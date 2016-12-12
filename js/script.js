// the rest
srcList = [];

function start() {
    var images = document.getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        if (images[i].classList.contains("skip")) {
            continue;
        }

        srcList[i] = images[i].src;
    }

    setInterval(timer, 5000);
}

function timer() {
    var time = new Date().getTime();
    var images = document.getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        var image = images[i];

        if (images[i].classList.contains("skip")) {
            continue;
        }

        if (image.complete) {
            image.src = srcList[i] + "&time=" + time;
        }
    }
}