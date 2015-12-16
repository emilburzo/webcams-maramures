// cavnic websocket livestream
var ws = new WebSocket("ws://81.30.148.60:9799");

ws.onmessage = function (event) {
    var msg = JSON.parse(event.data);
    document.getElementById('cavnic').setAttribute('src', 'data:image/png;base64,' + msg.image);
};

// the rest
srcList = [];

function start() {
    var images = document.getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        srcList[i] = images[i].src;
    }

    setInterval(timer, 5000);
}

function timer() {
    var time = new Date().getTime();
    var images = document.getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        var image = images[i];

        if (image.complete) {
            image.src = srcList[i] + "&time=" + time;
        }
    }
}