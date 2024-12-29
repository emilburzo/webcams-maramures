<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web din Maramureș</title>
    <meta name=”description” content='Webcam-uri în direct din zona Maramureș, în special de la munte'>
    <meta name=”keywords”
          content='webcam, maramureș, munte, baia mare, romania, munte, cavnic, suior, lacul mogoșa, lacul bodi, ignis, varful ignis, borsa, borșa, pasul prislop'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<header>
    <p>Webcam-uri în direct din zona Maramureș (Baia Mare, Tăuții-Măgherăuș, Cavnic, Baraj Firiza, Borșa),
        în special de la munte (Șuior, Lacul Mogoșa / Bodi, Cavnic, vârful Igniș, Stațiunea Izvoare, Telescaun și pârtie Borșa)</p>
</header>

<div id="webcam_suior_1_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="https://camsuior1.npoint.ro/control/faststream.jpg?stream=full&fps=3&framecount=1000&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_1_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_2_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="https://camsuior2.npoint.ro/control/faststream.jpg?stream=full&fps=3&framecount=1000&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_2_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_3_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="https://camsuior3.npoint.ro/control/faststream.jpg?stream=full&fps=3&framecount=1000&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_3_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_4_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="https://camsuior4.npoint.ro/control/faststream.jpg?stream=full&fps=3&framecount=1000&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_4_wrapper').style.display = 'none';"/>
</div>

<?php jwplayer_cam("webcam_bm", "Baia Mare", "https://digilive.rcs-rds.ro/digilivedge/baia_mare_desktop.stream/index.m3u8"); ?>

<?php jwplayer_cam("webcam_aeroclub_bm", "Tăuții-Măgherăuș - Aeroclubul Baia Mare", "https://live2.freecam.ro:5443/LiveApp/streams/aeroclubul-romaniei-aeroclubul-baia-mare.m3u8"); ?>

<div class="cam">
    <iframe width=500 height=280 src="https://www.youtube.com/embed/<?php system("curl -s https://www.youtube.com/channel/UClIsAcbHUMmSG8kMDuJydDw/live | tr '{' '\n' | grep videoId | head -n 1 | cut -d '\"' -f 4 | tr -d '\n'")?>?autoplay=1&mute=1"  title="Webcam Vârful Igniș - LIVE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<?php jwplayer_cam("webcam_izvoare", "Stațiunea Izvoare - Pârtie", "https://p.webcamromania.ro/partiaizvoare/index.m3u8"); ?>

<?php jwplayer_cam("domeniul_mogosa", "Domeniul Mogoșa", "/mmdomeniulmogosa/index.m3u8"); ?>

<?php jwplayer_cam("domeniul_mogosa_lac", "Domeniul Mogoșa - Lac", "/mmdomeniulmogoslac/index.m3u8"); ?>

<?php jwplayer_cam("webcam_cavnic", "Cavnic - Roata 1", "/LiveApp/streams/partia-de-schi-cavnic-roata-1.m3u8"); ?>

<?php jwplayer_cam("webcam_cavnic2", "Cavnic - Roata 2", "/LiveApp/streams/partia-de-schi-cavnic-roata-2.m3u8"); ?>

<?php jwplayer_cam("webcam_cavnic3", "Cavnic - Roata 3", "/LiveApp/streams/partia-de-schi-cavnic-roata-3.m3u8"); ?>

<div title="Simared - Baraj Firiza" class="cam">
    <iframe width=500 height=280 src="https://rtsp.me/embed/fYstFyAz/" allowfullscreen
            name="Simared - Baraj Firiza" scrolling="no" seamless="seamless" frameborder="0"></iframe>
</div>

<script type="text/javascript" src="js/jwplayer.js"></script>
<script>jwplayer.key = "jScWsLuA6KaZwo3HVTDeYjOBtJsY3/SdyB6BkQ==";</script>
</body>
</html>
