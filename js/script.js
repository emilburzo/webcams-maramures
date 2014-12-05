srcList = [];

function start() {
    var images = document.getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        srcList[i] = images[i].src;
    }

    setInterval(timer, 1000);
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