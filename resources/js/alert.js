// Auto-hide success alert after 3 seconds
setTimeout(function () {
    fadeOutAndRemove("successAlert");
}, 3000);

// Auto-hide hapus alert after 3 seconds
setTimeout(function () {
    fadeOutAndRemove("hapusAlert");
}, 3000);

setTimeout(function () {
    fadeOutAndRemove("warningAlert");
}, 3000);

function fadeOutAndRemove(elementId) {
    var element = document.getElementById(elementId);
    if (element) {
        // Pastikan elemen ditemukan
        var opacity = 1;
        var interval = setInterval(function () {
            if (opacity <= 0) {
                clearInterval(interval);
                element.style.display = "none";
            } else {
                element.style.opacity = opacity;
                opacity -= 0.1; // Sesuaikan kecepatan fading sesuai kebutuhan
            }
        }, 200); // Sesuaikan interval sesuai kebutuhan
    }
}
