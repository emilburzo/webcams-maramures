<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camere Web din Maramureș</title>
    <meta name=”description” content='Webcam-uri în direct din zona Maramureș, în special de la munte'>
    <meta name=”keywords”
          content='webcam, maramureș, munte, baia mare, baia sprie, romania, munte, cavnic, suior, ignis, varful ignis'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<header>
    <p>Webcam-uri în direct din zona Maramureș (Baia Mare, Baia Sprie, Cavnic, Baraj Firiza), în special de la munte
        (Șuior, Cavnic, <strike>vârful Igniș</strike>)</p>
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

<div id="webcam_bm_wrapper" class="cam">
    <div id="webcam_bm" title="Baia Mare"></div>

    <script>
        $(function () {
            var id = 'webcam_bm';
            var player = jwplayer(id);
            player.setup({
                file: 'http://82.76.249.73/digilivedge/baia_mare_desktop.stream/index.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "Baia Mare (by RCS&RDS)"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div id="webcam_simared_wrapper" class="cam">
    <div id="webcam_simared" title="Baraj Firiza - Simared"></div>

    <script>
        $(function () {
            var id = 'webcam_simared';
            var player = jwplayer(id);
            player.setup({
                file: 'https://live.simared.ro/camera1/stream.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "Baraj Firiza - Simared"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div id="webcam_baiasprie_wrapper" class="cam">
    <div id="webcam_baiasprie" title="Baia Sprie"></div>

    <script>
        $(function () {
            var id = 'webcam_baiasprie';
            var player = jwplayer(id);
            player.setup({
                file: 'http://link7.ro:8080/hls/live.stream.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "Baia Sprie"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div id="webcam_cavnic_wrapper" class="cam">
    <div id="webcam_cavnic" title="Cavnic - Roata 1"></div>

    <script>
        $(function () {
            var id = 'webcam_cavnic';
            var player = jwplayer(id);
            player.setup({
                file: 'https://cloud.freecam.ro:5443/LiveApp/streams/450965265241723352567818.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "SuperSki Cavnic - Roata 1"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div id="webcam_cavnic2_wrapper" class="cam">
    <div id="webcam_cavnic2" title="Cavnic - Roata 2"></div>

    <script>
        $(function () {
            var id = 'webcam_cavnic2';
            var player = jwplayer(id);
            player.setup({
                file: 'https://cloud.freecam.ro:5443/LiveApp/streams/391658104080449579762345.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "SuperSki Cavnic - Roata 2"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div id="webcam_cavnic3_wrapper" class="cam">
    <div id="webcam_cavnic3" title="Cavnic - Roata 3"></div>

    <script>
        $(function () {
            var id = 'webcam_cavnic3';
            var player = jwplayer(id);
            player.setup({
                file: 'https://cloud.freecam.ro:5443/LiveApp/streams/016890061533468758179924.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "SuperSki Cavnic - Roata 3"
            });
            player.on('error', function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            });
        });
    </script>
</div>

<div title="Cavnic - Icoana" class="cam">
    <iframe width=504 height=376 src="https://play.webcamromania.ro/b3p4l5g5v534o21353" allowfullscreen
            name="Cavnic - Icoana" scrolling="no" seamless="seamless" frameborder="0"></iframe>
</div>

<!--<div class="cam">-->
<!--    <iframe width="504" height="376"-->
<!--            src="https://www.youtube.com/embed/74Xt3MbGIYI?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>-->
<!--    </iframe>-->
<!--</div>-->

<script type="text/javascript" src="js/jwplayer.js"></script>
<script>jwplayer.key = "jScWsLuA6KaZwo3HVTDeYjOBtJsY3/SdyB6BkQ==";</script>
<script async defer data-domain="maramures.webcam" src="https://plausible.emilburzo.com/js/plausible.js"></script>
</body>
</html>
