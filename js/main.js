var showChar = 458;
var dots = "...";
var moreText = "Показать";
var lessText = "Скрыть";

$('#about_text').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

        var cont = content.substr(0, showChar);
        var restOfTheText = content.substr(showChar, content.length - showChar);

        var html = cont + '</span><span id="more_content"><span>' + restOfTheText;

        $(this).html(html);
    }

});

$("#more_link").click(function() {
    if($(this).hasClass("test")) {
        $(this).removeClass("test");
        $(this).html(moreText);
    } else {
        $(this).addClass("test");
        $(this).html(lessText);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
});

$('.spoiler_title').click(function() {
    $(this).parents('.spoiler_wrap').find('.spoiler_content').toggleClass('open');
    $(this).parents('.spoiler_wrap').find('.spoiler_arrow').toggleClass('open');
});

const state = {};
const carouselList = document.querySelector('#carousel__list');
const carouselItems = document.querySelectorAll('.carousel__item');
const elems = Array.from(carouselItems);

carouselList.addEventListener('click', function (event) {
    var newActive = event.target;
    var isItem = newActive.closest('.carousel__item');

    if (!isItem || newActive.classList.contains('carousel__item_active')) {
        return;
    };

    update(newActive);
});

const update = function(newActive) {
    const newActivePos = newActive.dataset.pos;

    const current = elems.find((elem) => elem.dataset.pos == 0);
    const prev = elems.find((elem) => elem.dataset.pos == -1);
    const next = elems.find((elem) => elem.dataset.pos == 1);
    const second = elems.find((elem) => elem.dataset.pos == -2);
    const last_ = elems.find((elem) => elem.dataset.pos == 2);
    const first = elems.find((elem) => elem.dataset.pos == -3);
    const last = elems.find((elem) => elem.dataset.pos == 3);


    current.classList.remove('carousel__item_active');

    [current, prev, next, second, last_, first, last].forEach(item => {
        var itemPos = item.dataset.pos;

        item.dataset.pos = getPos(itemPos, newActivePos)
    });
};

const getPos = function (current, active) {
    const diff = current - active;

    if (Math.abs(current - active) > 3) {
        return -current
    }

    return diff;
}

