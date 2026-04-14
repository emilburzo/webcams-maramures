<?php
function hls_cam($id, $title, $m3u8)
{
    $id_attr = htmlspecialchars($id, ENT_QUOTES);
    $title_attr = htmlspecialchars($title, ENT_QUOTES);
    $id_js = json_encode($id);
    $src_js = json_encode($m3u8);
    echo <<<EOF
<div id="{$id_attr}_wrapper" class="cam">
    <video id="$id_attr" title="$title_attr" width="500" height="280" controls muted autoplay playsinline></video>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var id = $id_js;
            var video = document.getElementById(id);
            var src = $src_js;
            var hide = function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            };
            var play = function () { var p = video.play(); if (p) p.catch(function () {}); };
            if (video.canPlayType('application/vnd.apple.mpegurl')) {
                video.src = src;
                video.addEventListener('loadedmetadata', play);
                video.addEventListener('error', hide);
            } else if (window.Hls && Hls.isSupported()) {
                var hls = new Hls();
                hls.loadSource(src);
                hls.attachMedia(video);
                hls.on(Hls.Events.MANIFEST_PARSED, play);
                hls.on(Hls.Events.ERROR, function (event, data) {
                    if (data.fatal) hide();
                });
            } else {
                hide();
            }
        });
    </script>
</div>
EOF;
}

?>
