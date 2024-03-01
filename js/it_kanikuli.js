$(document).ready(function () {
    $("#i_contact_form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/contact_k.php',
            data: formNm.serialize(),
            success: function (data) {
                // Вывод текста результата отправки
                $(formNm).html('<p style="text-align:center">'+data+'</p>');
                document.getElementById("i_sign_up_header").style.display = 'none';
                document.getElementById("i_sign_up_sub_header").style.display = 'none';
                document.getElementById("i_sign_up_text").style.display = 'none';
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                $(formNm).html(error);
            }
        });
        return false;
    });
});

/* Заявка */
$('.in_btn').click(function() {
    $('#i_up_popup').fadeOut(300);
    setTimeout(() => {
        $('#i_up_sign_popup').fadeIn(400);
    }, 400);
});

$('#cl_sign_i').click(function() {
    $('#i_up_sign_popup').fadeOut(300);
});