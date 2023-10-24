<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name = "description" content="Зарабатывай геймтокены на занятия и за выполенния домашних заданий и обменивай на крутые призы от нашей школы!">
    <meta name="keywords" content="Геймтокены, призы за успехи в учёбе, progamem, progame Владивосток, школа программирования">
    <meta name="color-scheme" content="only light">
    <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
    <title>Призы</title>
    <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/Inter-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/segoeprint.woff" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/shop.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="/js/maska-nomera.js"></script>
    <script defer src = "/js/pop_up.js"></script>
</head>
<body class="overflow_y">
<header id="header-section">
    <div id = "container">
        <div id = "menu">
            <a href="index.php" id = "menu_logo"></a>
            <nav id = "menu_nav">
                <ul id = "menu_list">
                    <li class = "menu_item"><a href="news.php">Новости</a></li>
                    <li class = "menu_item"><a href="courses.php">Курсы</a></li>
                    <li class = "menu_item"><a href="gallery.php">Галерея</a></li>
                    <li class = "menu_item"><a href="payment.php">Оплата</a></li>
                    <li class = "menu_item"><a href="#contact">Контакты</a></li>
                </ul>
            </nav>
            <button id = "menu_btn" class="sign_up">ЗАПИСАТЬСЯ НА УРОК</button>
        </div>
    </div>
</header>

<nav id="header-section-mobile" class="navbar">
    <div class="navbar-container container">
        <a href="index.php" id = "menu_logo"></a>
        <input type="checkbox"  name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="menu-items">
            <li><a href="news.php">Новости</a></li>
            <li><a href="courses.php">Курсы</a></li>
            <li><a href="gallery.php">Галерея</a></li>
            <li><a href="payment.php">Оплата</a></li>
            <li><a href="#contact">Контакты</a></li>
            <li><a class="sign_up" id = "record">Записаться на урок</a></li>
            <li><a href="tel:+7 984 195-30-14" id = "tel">+7 (984) 195-30-14</a></li>
            <li><a href="tel:2002 - 500" id = "tel">2002 - 500</a></li>
            <div id = "soc_icon_block">
                <a href="https://vk.com/progame_vl"><div class = "soc_icon" id = "vk_i"></div></a>
                <a href="https://t.me/+tNk7Txy8qOBjNDQ6"><div class = "soc_icon" id = "telegram_i"></div></a>
                <a href="https://www.instagram.com/progame_vl"><div class = "soc_icon" id = "instagram_i"></div></a>
                <a href="https://api.whatsapp.com/send?phone=79841953014"><div class = "soc_icon" id = "wh_i"></div></a>
            </div>
        </ul>
    </div>
</nav>

<main>
    <section class = "flex" id = "shop">
        <h1 class = "section_header">Призы</h1>
        <h2 class = "shop_header">Зарабатывай геймтокены и обменивай на крутые призы от нашей школы!</h2>
        <div class = "flex">
        <?php
            $user = "n43849_new_user";
            $pass = "77885599VL^^";
            $db = "n43849_new";

            try {
                // подключаемся к серверу
                $pdo = new PDO("mysql:host=localhost; charset=utf8mb4; dbname=$db", $user, $pass);
            }
            catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            $stmt = $pdo->query('SELECT * FROM `shop` ORDER BY `price` ASC');
            $res = $stmt->fetchAll();

            foreach($res as $row) {
                echo '
                    <div class = " flex product_box">
                    <img class = "product_img" src = "/functions/admin/images/shop/' . $row["image"] . '">
                    <h2 class = "product_name">'. $row["name"] .'</h2>
                    <h3 class = "product_number">арт. 00' . $row["id"] . '</h3>
                    <div class="flex">
                        <h3 class = "product_price">' . $row["price"] . '</h3>
                        <img class = "token" src = "/images/shop/gametocken.png">
                    </div>
                </div>';
            }
        ?>
        </div> 
        <h4 class = "shop_header last_header">* Организатор акции оставляет за собой право заменить товар на аналогичный с сохранением потребительских свойств в случае, если исходный товар не доступен.</h4>
    </section>
    <section id = "start">
        <img id = "dog" src = "/images/corgy.svg">
        <div id = "start_block" class="flex">
            <h1 id = "start_header">Запишитесь на бесплатное пробное занятие и мы подберём для вас программу</h1>
            <button class="flex sign_up" id = "start_btn">Начать учиться</button>
        </div>
    </section>
</main>

<footer id = "contact">
    <div class="flex" id = "contact_block">
        <div id = "addresses_block">
            <h1 id = "addresses_header">Адреса</h1>
            <ul>
                <?php
                    $stmt = $pdo->query('SELECT * FROM `addresses` ORDER BY `addresses`.`id` ASC');
                    $res = $stmt->fetchAll();

                    foreach($res as $row) {
                    echo '<li class="contact_text">' . $row["address"] . '</li>';
                    }
                ?>
            </ul>
        </div>
        <div class = "flex" id = "social">
            <a class = "social_a" href="https://t.me/+tNk7Txy8qOBjNDQ6">
                <div class = "flex" id = "telegram">
                    TELEGRAM
                </div>
            </a>
            <a class = "social_a" href="https://www.instagram.com/progame_vl">
                <div class = "flex" id = "instagram">
                    INSTAGRAM
                </div>
            </a>
            <a class = "social_a" href="https://vk.com/progame_vl">
                <div class = "flex" id = "vkontakte">
                    VKONTAKTE
                </div>
            </a>
        </div>
        <div id = "contact_phone">
            <h1 id = "contact_header">Как с нами связаться</h1>
            <a class = "contact_a contact_text" href="mailto:office@progamevl.ru">office@progamevl.ru</a>
            <a class = "contact_a contact_text" href = "tel:+7 984 195-30-14">+7 984 195-30-14</a>
            <a class = "contact_a contact_text" href = "tel:2002 - 500">2002 - 500</a>
        </div>
    </div>
    <div id = "white_line"></div>
    <div class="flex" id = "document_block">
        <p class = "document_text" id = "desktop_text">© 2023 ProGameVL</p>
        <div class="flex" id = "documents">
            <a class = "document_text doc" id = "requisites">Реквизиты</a>
            <a class = "document_text doc" href = "/docs/license.pdf">Лицензия</a>
            <a class = "document_text doc" href = "/docs/INN.pdf">ИНН</a>
            <a class = "document_text doc" href = "/docs/OGRN.pdf">ОГРН</a>
            <a class = "document_text doc" href = "https://docs.google.com/document/d/1tyC4HICWIrlPZl_ZxLpnQFViXcW5oQeh8r8H6vFcE4I/edit?usp=sharing">Образец договора на оказание образовательных услуг</a>
        </div>
        <p class = "document_text" id = "mobile_text">© 2023 ProGameVL</p>
    </div>
</footer>

<div id = "requisites_popup" class="popup-bg">
    <div class = "popup">
        <img class="close-popup" id = "cl" src="/images/icons/close.png" >
        <h1 id = "requisites_header">Реквизиты</h1>
        <p class = "requisites_text">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «БЕРИС»</p>
        <p class = "requisites_text">Г. ВЛАДИВОСТОК, УЛ. АЛЕУТСКАЯ,Д. 45-А ОФ.905</p>
        <p class = "requisites_text">ИНН/КПП 2540147523/2540010</p>
        <p class = "requisites_text">Р/С 40702810400060001999</p>
        <p class = "requisites_text">В АО «ДАЛЬНЕВОСТОЧНЫЙ БАНК»</p>
        <p class = "requisites_text">БИК 040507705 К/С 30101810900000000705</p>

    </div>
</div>

<div id = "sign_up_popup" class="popup-bg">
    <div id = "sign_popup" class  = "popup flex">
        <img class="close-popup" id = "cl1" src="/images/icons/close.png" >
        <h1 id = "sign_up_header">Запишитесь на бесплатный урок</h1>
        <h2 id = "sign_up_sub_header">Оставьте свои контакты и наш менеджер свяжется с вами в ближайшее время</h2>
        <form id = "contact_form" action="">
            <input required id = "parent_name" type="text" name = "Parent_name" class = "input_sign_up" placeholder="Ваше имя"><br>
            <input required id = "child_name" type="text" name = "Child_name" class = "input_sign_up" placeholder="Имя ребёнка"><br>
            <input required id = "phone_mask" name ="Phone" type="tel" class = "input_sign_up" placeholder="Номер телефона"><br>
            <input required id = "age" type="number" name = "Age" class = "input_sign_up" placeholder="Возраст ребёнка (полных лет)"><br>
            <h1 id = "date_label">Где вам удобнее заниматься? (Можно выбрать несколько)</h1>
            <table>
                <?php 
                    $index_address = 0;
                    foreach($res as $row) {
                        if ($index_address % 2 == 0) {
                            echo '<tr>';

                        } 

                        echo '<td>
                        <input class="address_checkbox" type="checkbox" name="address[]" value="' . $row["address"] . '">
                        <label class="address_label">📍 ' . $row["address"] . '</label>
                    </td>';

                        if ($index_address % 2 != 0) {
                            echo '</tr>';

                        } 
                        $index_address++;  
                    }

                    if ($index_address % 2 != 0) {
                        echo '<td></td></tr>';
                    }
                ?> 
                <tr>
                    <td>
                        <input class="address_checkbox" type="checkbox" name="address[]" value="Онлайн">
                        <label class="address_label">🌎 Онлайн</label>
                    </td>
                </tr>
            </table>
            <br>
            <button id = "sign_up_btn" name = "sign_up_btn" type="submit">Отправить</button>
        </form>
        <p id = "sign_up_text">Нажимая на кнопку вы соглашаетесь с нашей <a id = "sign_up_a" href = "/docs/confidential.pdf">политикой конфиденциальности</a></p>
    </div>
</div>

<div id = "preloader" class = "preloader">
    <p id = "preloader_text">Идёт загрузка страницы<br>
        Пожалуйста, подождите ... </p>
    <div class = "preloader_loader">
        <div class="loadingio-spinner-spin-xhfksgy9s2">
            <div class="ldio-nzs6obxip0o">
                <div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div>
            </div>
        </div>
        <span class = "preloader_percents">
                        <span id = "percent">0</span>%
                    </span>
    </div>
</div>

<a href="https://api.whatsapp.com/send?phone=79841953014">
    <div id = "whats_app" class="flex">
        <img src = "/images/whatsapp.png" width="100%" height="100%">
    </div>
</a>
        <!-- Yandex.Metrika counter -->

        <script type="text/javascript" > 
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(86582635, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/86582635" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter --> 

<script src = "/js/preloader.js"></script>
</body>
</html>
<?php

?>

<?php
?>