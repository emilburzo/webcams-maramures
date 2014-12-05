<?php

// webcam list
$array = [
    "0" => "http://jurnalul.ro/webcam/suior-1-427.html",
    "1" => "http://jurnalul.ro/webcam/suior-2-428.html",
    "2" => "http://jurnalul.ro/webcam/cavnic-roata-1-288.html",
    "3" => "http://jurnalul.ro/webcam/cavnic-roata-3-303.html",
];

// webcam id parameter
$id = htmlspecialchars($_GET["id"]);

if (!array_key_exists($id, $array)) {
    header("Content-Type: text/plain");
    echo "Nice try.";
    return;
}

$url = $array[$id];

$cookie_file = "/tmp/webcam_cookies_" . $id;
$content_file = "/tmp/webcam_content_" . $id;

// purge cache file if older than 10 minutes
if (file_exists($cookie_file) && (filemtime($cookie_file) > (time() - 60 * 10))) {
    unlink($cookie_file);
    unlink($content_file);
}

if (file_exists($cookie_file)) {
    // cache file exists, serve contents
    $relative_url = file_get_contents($content_file);
} else {
    // no cache file, get copy from live
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

    $content = curl_exec($ch);

    curl_close($ch);

    // parse webcam URL
    $findme = "hide_cam_url.php";
    $pos1 = strpos($content, $findme);

    $findme = "webcam_img";
    $pos2 = strpos($content, $findme);

    $relative_url = substr($content, $pos1, ($pos2 - $pos1 - 6));

    // save to cache file
    file_put_contents($content_file, $relative_url);
}

//echo $relative_url;

// fetch image
$ch = curl_init("http://jurnalul.ro/" . $relative_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

$image = curl_exec($ch);

curl_close($ch);

header("Content-Type: image/jpeg");
echo $image;

?>
