<?php
function jwplayer_cam($id, $title, $m3u8)
{
    echo <<<EOF
<div id="${id}_wrapper" class="cam">
    <div id="$id" title="$title"></div>

    <script>
        $(function () {
            var player = jwplayer("$id");
            player.setup({
                file: "$m3u8",
                height: 280,
                width: 500,
                autostart: true,
                mute: true,
                title: "$title"
            });
            player.on('error', function () {
                document.getElementById('${id}_wrapper').style.display = 'none';
            });
        });
    </script>
</div>
EOF;
}

?>