<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $message = 'Запись на мастер-класс:' . $_POST["mk_name"] ."\n";
    $message .= 'Имя родителя: ' . $_POST["parent_name"] . "\n";
    $message .= 'Имя ребёнка: ' . $_POST["child_name"] . "\n";
    $message .= 'Телефон: ' . $_POST["phone"] . "\n";
    $message .= 'Возраст: ' . $_POST["age"] . "\n";

    $mailTo = "office@progamevl.ru"; // Ваш e-mail
    $subject = "Запись на мастер-класс"; // Тема сообщения
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: user_form@progamevl.ru <user_form@progamevl.ru>\r\n";

    if(mail($mailTo, $subject, $message, $headers)) {
        echo '<div class="flex" id = "submit_form">
                <h1 id = "submit_header">Спасибо !</h1>
                <div id = "submit_heart"></div>
                <h2 id = "submit_subheader">Благодарим, что оставили заявку.</h2>
                <p id = "submit_text">В ближайшее время с Вами свяжется <br> менеджер по указанному номеру.</p>
                <div id = "submit_panda"></div>
                <div class = "flex" id = "submit_text_req">Пишите по всем <br> вопросам</div>
                <div class = "flex" style="margin-bottom: 10px;">
                    <a href="https://vk.com/progame_vl"><div class = "soc_icon" id = "vk_i"></div></a>
                    <a href="https://t.me/+tNk7Txy8qOBjNDQ6"><div class = "soc_icon" id = "telegram_i"></div></a>
                    <a href="https://www.instagram.com/progame_vl"><div class = "soc_icon" id = "instagram_i"></div></a>
                    <a href="https://api.whatsapp.com/send?phone=79841953014"><div class = "soc_icon" id = "wh_i"></div></a>
                </div>
                <a href="tel:+7 984 195-30-14" class = "submit_contact">
                +7 (984) 195-30-14
                </a>
                <p class = "submit_contact">
                Email: office@progamevl.ru
                </p>
            </div>';
    } else {
        echo "Сообщение не отправлено!";
    }
}

?>
