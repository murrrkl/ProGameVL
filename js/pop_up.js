$(document).ready(function () {
    $("#contact_form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/contact.php',
            data: formNm.serialize(),
            success: function (data) {
                // Вывод текста результата отправки
                $(formNm).html('<p style="text-align:center">'+data+'</p>');
                document.getElementById("sign_up_header").style.display = 'none';
                document.getElementById("sign_up_sub_header").style.display = 'none';
                document.getElementById("sign_up_text").style.display = 'none';
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                $(formNm).html(error);
            }
        });
        return false;
    });
});

$('#requisites').click(function(e) {
    e.preventDefault();
    $('#requisites_popup').fadeIn(800);
});

$('#cl').click(function() {
    $('#requisites_popup').fadeOut(800);
});

$('.sign_up').click(function(e) {
    e.preventDefault();
    $('#sign_up_popup').fadeIn(800);
});

$('#cl1').click(function() {
    $('#sign_up_popup').fadeOut(800);
});

$('#cl2').click(function() {
    $('#submit_popup').fadeOut(800);
});

$('#phone_mask').mask('+7 (999) 999-99-99');

$.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
        $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
        var range = $(this).get(0).createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
};

$('input[type="tel"]').click(function(){
    $(this).setCursorPosition(5);  // set position number
});