let i = 0;
let body = document.querySelector("body");

function percents() {
    i += 1;
    percent.innerHTML = i;
    if (i == 99) {
        clearInterval(timerId);
        preloader_text.innerHTML = "Eщё немного ...";
    }
}

function start() {
    preloader.classList.add("preloader-hide");
    body.classList.remove("overflow_y")
}

let timerId = setInterval(() => percents(), 100);

window.onload = function() {
    clearInterval(timerId);
    percent.innerHTML = 100;
    setTimeout(start, 200);
}