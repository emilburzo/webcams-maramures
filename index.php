<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web - Maramureș</title>

    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body onload="start();">

<div class="cam">
    <img src="webcam.php?id=0" width="504" height="376"/>
</div>

<div class="cam">
    <img src="webcam.php?id=1" width="504" height="376"/>
</div>

<div class="cam">
    <img src="webcam.php?id=2" width="504" height="376"/>
</div>

<div class="cam">
    <img src="webcam.php?id=3" width="504" height="376"/>
</div>

<div class="cam">
    <img src="webcam.php?id=4" width="504" height="376"/>
</div>

<div class="cam">
    <iframe
        src="http://www.rcs-rds.ro/cams_utilities/jwplayer/player-licensed53.swf?streamer=rtmp://82.76.249.73/digilivedge&file=baia_mare_desktop&bufferlength=1"
        width="504" height="376"></iframe>
</div>

<?php include_once("ga.php") ?>
</body>
</html>
