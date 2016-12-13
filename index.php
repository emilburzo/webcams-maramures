<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web din Maramureș</title>
    <meta name=”description” content='Webcam-uri în direct din zona Maramureș, în special de la munte'>
    <meta name=”keywords” content='webcam, maramureș, munte, baia mare, baia sprie, romania, munte, cavnic, suior, ignis, varful ignis'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/superski/video.js"></script>
    <script src="js/superski/videojs-contrib-hls.min.js"></script>
</head>
<body onload="start();">

<header>
    <p>Webcam-uri în direct din zona Maramureș (Baia Mare, Baia Sprie, Cavnic), în special de la munte (Șuior, Cavnic, vârful Igniș)</p>
</header>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3334/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>" />
</div>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3335/control/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>" />
</div>

<div class="cam">
    <img class="skip" title="Suior" src="http://suior.dyndns.org:3333/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>" />
</div>

<div class="cam">
    <video id=skivid controls title="Cavnic" style="width: 504px !important; height: 376px !important;">
        <source src="http://rtmp.streamaxia.com/ski/ski.stream/playlist.m3u8" type="application/x-mpegURL">
    </video>

    <script>
        var player = videojs('skivid', {
            controlBar: false,
            bigPlayButton: false,
            loadingSpinner: false,
            textTrackDisplay: false,
            errorDisplay: false,
            textTrackSettings: false,
            posterImage: false,
            nativeControlsForTouch: true
        });
        player.userActive(true);
        player.play();
    </script>
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=3" />
</div>

<div class="cam">
    <img title="Cavnic" src="webcam.php?id=4" />
</div>

<div class="cam">
    <iframe width="504" height="376" src="https://www.youtube.com/embed/<?php system("curl -s https://www.youtube.com/channel/UClIsAcbHUMmSG8kMDuJydDw/live | grep videoId | cut -d '\"' -f 4")?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
</div>

<?php include_once("ga.php") ?>
</body>
</html>
