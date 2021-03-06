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
          content='webcam, maramureș, munte, baia mare, baia sprie, romania, munte, cavnic, suior, lacul mogoșa, lacul bodi, ignis, varful ignis, borsa, borșa, pasul prislop'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<header>
    <p>Webcam-uri în direct din zona Maramureș (Baia Mare, Tăuții-Măgherăuș, <strike>Baia Sprie</strike>, Cavnic, Baraj Firiza, Borșa),
        în special de la munte (Șuior, Lacul Mogoșa / Bodi, Cavnic, <strike>vârful Igniș</strike>, Telescaun Borșa)</p>
</header>

<div id="webcam_suior_1_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="http://82.79.217.239:3334/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_1_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_2_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="http://82.79.217.239:3335/control/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_2_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_3_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="http://82.79.217.239:3333/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_3_wrapper').style.display = 'none';"/>
</div>

<div id="webcam_suior_4_wrapper" class="cam">
    <img class="skip" title="Suior"
         src="http://82.79.217.239:3336/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="document.getElementById('webcam_suior_4_wrapper').style.display = 'none';"/>
</div>

<?php jwplayer_cam("webcam_bm", "Baia Mare", "https://digilive.rcs-rds.ro/digilivedge/baia_mare_desktop.stream/index.m3u8"); ?>

<?php jwplayer_cam("webcam_aeroclub_bm", "Tăuții-Măgherăuș - Aeroclubul Baia Mare", "https://live2.freecam.ro:5443/LiveApp/streams/222562831095066913214038.m3u8"); ?>

<?php jwplayer_cam("webcam_simared", "Baraj Firiza - Simared", "https://live.simared.ro/camera1/stream.m3u8"); ?>

<div title="Lacul Mogoșa" class="cam">
    <iframe width=504 height=376 src="https://play.webcamromania.ro/b3p4l5g5v534o2v223" allowfullscreen
            name="Lacul Mogoșa" scrolling="no" seamless="seamless" frameborder="0"></iframe>
</div>

<?php jwplayer_cam("webcam_cavnic", "Cavnic - Roata 1", "https://live.freecam.ro:5443/LiveApp/streams/238240691967830141202578.m3u8"); ?>

<?php jwplayer_cam("webcam_cavnic2", "Cavnic - Roata 2", "https://live.freecam.ro:5443/LiveApp/streams/298364518216581967384953.m3u8"); ?>

<?php jwplayer_cam("webcam_cavnic3", "Cavnic - Roata 3", "https://live.freecam.ro:5443/LiveApp/streams/937528909720485946133487.m3u8"); ?>

<div title="Cavnic - Icoana" class="cam">
    <iframe width=504 height=376 src="https://play.webcamromania.ro/b3p4l5g5v534o21353" allowfullscreen
            name="Cavnic - Icoana" scrolling="no" seamless="seamless" frameborder="0"></iframe>
</div>

<div title="Borșa - Telescaun" class="cam">
    <iframe width=504 height=376 src="https://play.webcamromania.ro/b3p4l5g5v534o2w223" allowfullscreen
            name="Borșa - Telescaun" scrolling="no" seamless="seamless" frameborder="0"></iframe>
</div>

<script type="text/javascript" src="js/jwplayer.js"></script>
<script>jwplayer.key = "jScWsLuA6KaZwo3HVTDeYjOBtJsY3/SdyB6BkQ==";</script>
</body>
</html>
