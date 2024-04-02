function get_info(name, desc, date, img) {
    let path = "/functions/admin/images/mk/" + img;
    let mk_date = date.split(',');
    let mk_name = name;
    let mk_desc = desc;

    while (mk_name.indexOf('*') != -1) {
        mk_name = mk_name.replace('*', '"');
    }

    while (mk_desc.indexOf('*') != -1) {
        mk_desc = mk_desc.replace('*', '"');
    }

    $('.mk_img').attr("src", path);

    $('.mk_header').text(mk_name);

    mk_desc = mk_desc.split('<br>');

    if (mk_desc.length > 1) {   
        for (let i = mk_desc.length - 1; i > 0; i--) {
            $(".mk_description").prepend(mk_desc[i]);
            $(".mk_description").prepend("<br>");
        }
    }
    $(".mk_description").prepend(mk_desc[0]);

    for (let i = mk_date.length - 1; i >= 0; i--) {
        let s = '<div class = "time_line"><div class = "time_circle"></div><h2 class = "time">' + mk_date[i] + '</h2></div>';
        $(".date").prepend(s);
    }

    
    $('#mk_up_popup').fadeIn(700);
    //alert(name + text + date + img);
}

$('#close_mk').click(function() {
    $('#mk_up_popup').fadeOut(700);

    setTimeout(() => {
            $(".mk_description").text("");
            $( ".time_line" ).remove();
    }, 700);
});

/* Возраст 1 */

$('#june_1').click(function(e) {
    if ($("#july_1").hasClass("current_m") == true) {
         $('#july_1').removeClass('current_m');
         $('#img_july_1').fadeOut(300);
    } else if ($("#august_1").hasClass("current_m") == true) {
         $('#august_1').removeClass('current_m');
          $('#img_august_1').fadeOut(300);
    }

    if ($("#june_1").hasClass("current_m") == false) {
        $('#june_1').addClass('current_m');

        setTimeout(() => {
            $('#img_june_1').fadeIn(400);
        }, 400);
    }

});

$('#july_1').click(function(e) {
    if ($("#june_1").hasClass("current_m") == true) {
        $('#june_1').removeClass('current_m');
        $('#img_june_1').fadeOut(300);
    } else if ($("#august_1").hasClass("current_m") == true) {
        $('#august_1').removeClass('current_m');
        $('#img_august_1').fadeOut(300);
    }

    if ($("#july_1").hasClass("current_m") == false) {
        $('#july_1').addClass('current_m');

        setTimeout(() => {
            $('#img_july_1').fadeIn(400);
        }, 400);
    }

});

$('#august_1').click(function(e) {
    if ($("#june_1").hasClass("current_m") == true) {
        $('#june_1').removeClass('current_m');
        $('#img_june_1').fadeOut(300);
    } else if ($("#july_1").hasClass("current_m") == true) {
        $('#july_1').removeClass('current_m');
        $('#img_july_1').fadeOut(300);
    }


    if ($("#august_1").hasClass("current_m") == false) {
        $('#august_1').addClass('current_m');
        
        setTimeout(() => {
            $('#img_august_1').fadeIn(400);
        }, 400);
    }
});

/* Возраст 2 */

$('#june_2').click(function(e) {
    if ($("#july_2").hasClass("current_m") == true) {
         $('#july_2').removeClass('current_m');
         $('#img_july_2').fadeOut(300);
    } else if ($("#august_2").hasClass("current_m") == true) {
         $('#august_2').removeClass('current_m');
          $('#img_august_2').fadeOut(300);
    }

    if ($("#june_2").hasClass("current_m") == false) {
        $('#june_2').addClass('current_m');

        setTimeout(() => {
            $('#img_june_2').fadeIn(400);
        }, 400);
    }

});

$('#july_2').click(function(e) {
    if ($("#june_2").hasClass("current_m") == true) {
        $('#june_2').removeClass('current_m');
        $('#img_june_2').fadeOut(300);
    } else if ($("#august_2").hasClass("current_m") == true) {
        $('#august_2').removeClass('current_m');
        $('#img_august_2').fadeOut(300);
    }

    if ($("#july_2").hasClass("current_m") == false) {
        $('#july_2').addClass('current_m');

        setTimeout(() => {
            $('#img_july_2').fadeIn(400);
        }, 400);
    }

});

$('#august_2').click(function(e) {
    if ($("#june_2").hasClass("current_m") == true) {
        $('#june_2').removeClass('current_m');
        $('#img_june_2').fadeOut(300);
    } else if ($("#july_2").hasClass("current_m") == true) {
        $('#july_2').removeClass('current_m');
        $('#img_july_2').fadeOut(300);
    }


    if ($("#august_2").hasClass("current_m") == false) {
        $('#august_2').addClass('current_m');
        
        setTimeout(() => {
            $('#img_august_2').fadeIn(400);
        }, 400);
    }
});

/* Возраст 3 */

$('#june_3').click(function(e) {
    if ($("#july_3").hasClass("current_m") == true) {
         $('#july_3').removeClass('current_m');
         $('#img_july_3').fadeOut(300);
    } else if ($("#august_3").hasClass("current_m") == true) {
         $('#august_3').removeClass('current_m');
          $('#img_august_3').fadeOut(300);
    }

    if ($("#june_3").hasClass("current_m") == false) {
        $('#june_3').addClass('current_m');

        setTimeout(() => {
            $('#img_june_3').fadeIn(400);
        }, 400);
    }

});

$('#july_3').click(function(e) {
    if ($("#june_3").hasClass("current_m") == true) {
        $('#june_3').removeClass('current_m');
        $('#img_june_3').fadeOut(300);
    } else if ($("#august_3").hasClass("current_m") == true) {
        $('#august_3').removeClass('current_m');
        $('#img_august_3').fadeOut(300);
    }

    if ($("#july_3").hasClass("current_m") == false) {
        $('#july_3').addClass('current_m');

        setTimeout(() => {
            $('#img_july_3').fadeIn(400);
        }, 400);
    }

});

$('#august_3').click(function(e) {
    if ($("#june_3").hasClass("current_m") == true) {
        $('#june_3').removeClass('current_m');
        $('#img_june_3').fadeOut(300);
    } else if ($("#july_3").hasClass("current_m") == true) {
        $('#july_3').removeClass('current_m');
        $('#img_july_3').fadeOut(300);
    }


    if ($("#august_3").hasClass("current_m") == false) {
        $('#august_3').addClass('current_m');
        
        setTimeout(() => {
            $('#img_august_3').fadeIn(400);
        }, 400);
    }
});

/* Возраст 4 */

$('#june_4').click(function(e) {
    if ($("#july_4").hasClass("current_m") == true) {
         $('#july_4').removeClass('current_m');
         $('#img_july_4').fadeOut(300);
    } else if ($("#august_4").hasClass("current_m") == true) {
         $('#august_4').removeClass('current_m');
          $('#img_august_4').fadeOut(300);
    }

    if ($("#june_4").hasClass("current_m") == false) {
        $('#june_4').addClass('current_m');

        setTimeout(() => {
            $('#img_june_4').fadeIn(400);
        }, 400);
    }

});

$('#july_4').click(function(e) {
    if ($("#june_4").hasClass("current_m") == true) {
        $('#june_4').removeClass('current_m');
        $('#img_june_4').fadeOut(300);
    } else if ($("#august_4").hasClass("current_m") == true) {
        $('#august_4').removeClass('current_m');
        $('#img_august_4').fadeOut(300);
    }

    if ($("#july_4").hasClass("current_m") == false) {
        $('#july_4').addClass('current_m');

        setTimeout(() => {
            $('#img_july_4').fadeIn(400);
        }, 400);
    }

});

$('#august_4').click(function(e) {
    if ($("#june_4").hasClass("current_m") == true) {
        $('#june_4').removeClass('current_m');
        $('#img_june_4').fadeOut(300);
    } else if ($("#july_4").hasClass("current_m") == true) {
        $('#july_4').removeClass('current_m');
        $('#img_july_4').fadeOut(300);
    }


    if ($("#august_4").hasClass("current_m") == false) {
        $('#august_4').addClass('current_m');
        
        setTimeout(() => {
            $('#img_august_4').fadeIn(400);
        }, 400);
    }
});

const start_line_position = $('#purple_line').position().left;

$('#age_2').fadeOut(1);
$('#age_3').fadeOut(1);
$('#age_4').fadeOut(1);

$('#age_6_7').click(function() {
    let position_line = $('#purple_line').position().left;
    let new_pos = start_line_position;

    $('#purple_line').animate({
      left: position_line,
    })/*.delay(0.5)*/
    .animate({
      left: new_pos
    });


    $('#age_2').fadeOut(300);
    $('#age_3').fadeOut(300);
    $('#age_4').fadeOut(300);
    setTimeout(() => {
        $('#age_1').fadeIn(400);
    }, 400);
});

$('#age_8_10').click(function() {
    let position_line = $('#purple_line').position().left;
    let new_pos = start_line_position +  $('#purple_line').width();

    $('#purple_line').animate({
      left: position_line,
    })/*.delay(0.5)*/
    .animate({
      left: new_pos
    });


    $('#age_1').fadeOut(300);
    $('#age_3').fadeOut(300);
    $('#age_4').fadeOut(300);
    setTimeout(() => {
        $('#age_2').fadeIn(400);
    }, 400);

});

$('#age_11_13').click(function() {
    let position_line = $('#purple_line').position().left;
    let new_pos = start_line_position +  $('#purple_line').width() * 2;

    $('#purple_line').animate({
      left: position_line,
    })/*.delay(0.5)*/
    .animate({
      left: new_pos
    });

    $('#age_1').fadeOut(300);
    $('#age_2').fadeOut(300);
    $('#age_4').fadeOut(300);
    setTimeout(() => {
        $('#age_3').fadeIn(400);
    }, 400);

});

$('#age_12_16').click(function() {
    let position_line = $('#purple_line').position().left;
    let new_pos = start_line_position +  $('#purple_line').width() * 3;

    $('#purple_line').animate({
      left: position_line,
    })/*.delay(0.5)*/
    .animate({
      left: new_pos
    });

    $('#age_1').fadeOut(300);
    $('#age_2').fadeOut(300);
    $('#age_3').fadeOut(300);
    setTimeout(() => {
        $('#age_4').fadeIn(400);
    }, 400);

});


/* Заявка */
$('.mk_btn').click(function() {
    let form_mk_name = document.querySelectorAll('.mk_header')[0].textContent;

    while (form_mk_name.indexOf('"') != -1) {
        form_mk_name = form_mk_name.replace('"', '');
    }
    
    document.getElementById("form_mk_name").value = form_mk_name;

    $('#mk_up_popup').fadeOut(300);
    setTimeout(() => {
        $('#mk_up_sign_popup').fadeIn(400);
    }, 400);
});

$('#cl_sign_mk').click(function() {
    $( ".time_line" ).remove();
    $(".mk_description").text("");
    $('#mk_up_sign_popup').fadeOut(300);
});


$(document).ready(function () {
    $("#mk_contact_form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/contact_mk.php',
            data: formNm.serialize(),
            success: function (data) {
                // Вывод текста результата отправки
                $(formNm).html('<p style="text-align:center">'+data+'</p>');
                document.getElementById("mk_sign_up_header").style.display = 'none';
                document.getElementById("mk_sign_up_sub_header").style.display = 'none';
                document.getElementById("mk_sign_up_text").style.display = 'none';
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                $(formNm).html(error);
            }
        });
        return false;
    });
});









