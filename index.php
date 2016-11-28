<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web din Maramureș</title>
    <meta name=”description” content='Webcam-uri în direct din zona Maramureș, în special de la munte'>
    <meta name=”keywords” content='webcam, maramureș, munte, baia mare, baia sprie, romania, munte, mountain, cavnic, suior, ignis, varful ignis'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body onload="start();">

<div class="cam">
    <iframe width="504" height="376" src="https://www.youtube.com/embed/<?php system("curl -s https://www.youtube.com/channel/UClIsAcbHUMmSG8kMDuJydDw/live | grep videoId | cut -d '\"' -f 4")?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
</div>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3334/cgi-bin/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3335/control/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3333/cgi-bin/faststream.jpg?stream=full&fps=5&rand=<?php echo time(); ?>" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=3" width="504" height="376"/>
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=4" width="504" height="376"/>
</div>

<div class="cam">
    <img id="cavnic" class="skip" title="Cavnic" width="504" height="376"/>
</div>

<?php include_once("ga.php") ?>
</body>
</html>
