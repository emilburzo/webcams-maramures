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

    <script src="js/script.js" type="text/javascript"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body onload="start();">

<header>
    <p>Webcam-uri în direct din zona Maramureș (Baia Mare, Baia Sprie, Cavnic), în special de la munte (Șuior, Cavnic, <strike>vârful Igniș</strike>)</p>
</header>

<div class="cam">
    <img class="skip" title="Suior"
         src="http://suior.dyndns.org:3334/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="this.style.display='none'"/>
</div>

<div class="cam">
    <img class="skip" title="Suior"
         src="http://suior.dyndns.org:3335/control/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="this.style.display='none'"/>
</div>

<div class="cam">
    <img class="skip" title="Suior"
         src="http://suior.dyndns.org:3333/cgi-bin/faststream.jpg?stream=full&fps=3&rand=<?php echo time(); ?>"
         onerror="this.style.display='none'"/>
</div>

<div class="cam">
    <div id="webcam_bm" title="Baia Mare"></div>

    <script>
        $(function () {
            jwplayer("webcam_bm").setup({
                file: 'http://82.76.249.73/digilivedge/baia_mare_desktop.stream/index.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "Baia Mare (by RCS&RDS)"
            });
        });
    </script>
</div>

<div class="cam">
    <div id="webcam_cavnic" title="Cavnic - Roata 1"></div>

    <script>
        $(function () {
            jwplayer("webcam_cavnic").setup({
                file: 'https://live.freecam.ro:5443/LiveApp/streams/021519647717484841659610.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "SuperSki Cavnic - Roata 1"
            });
        });
    </script>
</div>

<div class="cam">
    <div id="webcam_cavnic2" title="Cavnic - Roata 2"></div>

    <script>
        $(function () {
            jwplayer("webcam_cavnic2").setup({
                file: 'https://live.freecam.ro:5443/LiveApp/streams/279853686459469995264527.m3u8',
                height: 376,
                width: 504,
                autostart: true,
                mute: true,
                title: "SuperSki Cavnic - Roata 2"
            });
        });
    </script>
</div>


<script type="text/javascript" src="js/jwplayer.js"></script>
<script>jwplayer.key = "jScWsLuA6KaZwo3HVTDeYjOBtJsY3/SdyB6BkQ==";</script>

<?php include_once("ga.php") ?>
</body>
</html>
