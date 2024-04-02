
function get_info(name, desc, date, img) {
   	let new_name = name.replace("<br>", " ");
   	$('.in_header').text(new_name);

   	let path = "/functions/admin/images/intensive/" + img;
    let i_date = date.split(',');

    $('.i_img').attr("src", path);

    let i_desc = desc;

    while (i_desc.indexOf('*') != -1) {
        i_desc = i_desc.replace('*', '"');
    }

    i_desc = i_desc.split('<br>');
   
   	if (i_desc.length > 1) {
   		for (let i = i_desc.length - 1; i > 0; i--) {
	   		$(".i_description").prepend(i_desc[i]);
	   		$(".i_description").prepend("<br>");
   		}
   	}

   	$(".i_description").prepend(i_desc[0]);

    for (let i = i_date.length - 1; i >= 0; i--) {
        let s = '<div class = "time_line"><div class = "time_circle"></div><h2 class = "time">' + i_date[i] + '</h2></div>';
        $(".date").prepend(s);
    }
   	

    $('#i_up_popup').fadeIn(700);
}

$('#close_i').click(function() {
    $('#i_up_popup').fadeOut(700);

    setTimeout(() => {
    		$(".i_description").text(" ");
            $( ".time_line" ).remove();
    }, 700);
});

$('#cl_sign_i').click(function() {
    $( ".time_line" ).remove();
    $(".i_description").text("");
    $('#i_up_sign_popup').fadeOut(300);
});

$(document).ready(function () {
    $("#i_contact_form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/contact_i.php',
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
    let form_i_name = document.querySelectorAll('.in_header')[0].textContent;
    while (form_i_name.indexOf('"') != -1) {
        form_i_name = form_i_name.replace('"', '');
    }
    
    document.getElementById("form_i_name").value = form_i_name;

    $('#i_up_popup').fadeOut(300);
    setTimeout(() => {
        $('#i_up_sign_popup').fadeIn(400);
    }, 400);
});
