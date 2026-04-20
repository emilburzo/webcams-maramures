<?php
function hls_cam($id, $title, $m3u8)
{
    $id_attr = htmlspecialchars($id, ENT_QUOTES);
    $title_attr = htmlspecialchars($title, ENT_QUOTES);
    $id_js = json_encode($id);
    $src_js = json_encode($m3u8);
    $needs_signing = str_starts_with($m3u8, '/LiveApp/') ? 'true' : 'false';
    echo <<<EOF
<div id="{$id_attr}_wrapper" class="cam">
    <video id="$id_attr" title="$title_attr" width="500" height="280" controls muted autoplay playsinline></video>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var id = $id_js;
            var video = document.getElementById(id);
            var src = $src_js;
            var needsSign = $needs_signing;
            var hide = function () {
                document.getElementById(id + '_wrapper').style.display = 'none';
            };
            var play = function () { var p = video.play(); if (p) p.catch(function () {}); };
            var init = function (url) {
                if (window.Hls && Hls.isSupported()) {
                    var hls = new Hls();
                    hls.loadSource(url);
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MANIFEST_PARSED, play);
                    hls.on(Hls.Events.ERROR, function (event, data) {
                        if (data.fatal) hide();
                    });
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = url;
                    video.addEventListener('loadedmetadata', play);
                    video.addEventListener('error', hide);
                } else {
                    hide();
                }
            };
            if (needsSign && window._freecamSign) {
                window._freecamSign(src).then(init).catch(hide);
            } else {
                init(src);
            }
        });
    </script>
</div>
EOF;
}

?>
