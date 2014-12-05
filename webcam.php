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

// fetch webcam URL content and save cookies file (webcam URL is tied to the session)
$ch = curl_init($url);

$cookie_file = "/tmp/cookies-" . rand();

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

unlink($cookie_file);

?>
