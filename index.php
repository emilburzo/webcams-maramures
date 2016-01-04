<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web - Maramureș</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body onload="start();">

<div class="cam">
    <img title="Suior" src="http://suior.dyndns.org:3334/cgi-bin/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Suior" src="http://suior.dyndns.org:3335/control/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Suior" src="http://suior.dyndns.org:3333/cgi-bin/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=3" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=4" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Cavnic" id="cavnic" width="504" height="376"/>
</div>

<div class="cam">
    <iframe
        src="http://www.rcs-rds.ro/cams_utilities/jwplayer/player-licensed53.swf?streamer=rtmp://82.76.249.73/digilivedge&file=baia_mare_desktop&bufferlength=1"
        width="504" height="376"></iframe>
</div>

<?php include_once("ga.php") ?>
</body>
</html>
