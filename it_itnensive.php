<html lang="ru">
<head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="robots" content="noyaca">
        <meta name="robots" content="noarchive">
        <meta name="yandex" content="noyaca">
        <meta name="yandex" content="noarchive">
        <meta name = "description" content="Проведите своё лето с ProGame!">
        <meta name="keywords" content="Владивосток, Программирование, онлайн, оффлайн, групповые занятия, индивидуальные занятия, Приморский край, cкетчинг, цифровой рисунок, IT, анимация, 3D-моделирование, Python, Roblox, Minecraft, создание игр, создание сайтов, создание приложений">
        <meta name="color-scheme" content="only light">
        <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
        <title>Интенсивы</title>
        <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Halogen_0.ttf" as="font" type="font/ttf" crossorigin>
        <link rel="preload" href="/fonts/boorsok.otf" as="font" type="font/otf" crossorigin>
        <link rel="preload" href="/fonts/Evolventa-Regular.otf" as="font" type="font/otf" crossorigin>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/it_itnensive.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="/js/maska-nomera.js"></script>
        <script defer src = "/js/pop_up.js"></script>
        <script defer src = "/js/int.js"></script>
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

        <?

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

        ?>

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
            <section id = "summer_block">
                <h1 class = "section_header">Интенсивы на каникулах</h1>
                <div class = "i_section flex">
                    <?

                        $stmt = $pdo->query('SELECT * FROM `intensive` ORDER BY `intensive`.`age` DESC');
                        $res = $stmt->fetchAll();
                        foreach($res as $row){
                            echo '<div class = "i_box">
                        <div class = "i_img_box">
                            <img class = "int_img" src = "/functions/admin/images/intensive/';
                            echo $row["image"];
                            echo '">';
                            if ($row["offline"] == 1) {
                                echo '<div class = "off_box">
                                        <h2 class = "format_text">Очно</h2>
                                    </div>';
                            }

                            if ($row["online"] == 1) {
                                echo ' <div class = "online_box">
                                        <h2 class = "format_text">Онлайн</h2>
                                    </div>';
                            }

                            echo '</div>';
                           
                            echo '<h1 class = "i_header">' . $row["name"] . '</h1>';
                            echo '<h2 class = "i_age">' . $row["age"] . '</h2>';
                            echo '<h2 class = "days">1 день: <span class = "topic">' . $row["day1"] . '</span></h2>';
                            echo '<h2 class = "days">2 день: <span class = "topic">' . $row["day2"] . '</span></h2>';
                            echo '<h2 class = "days">3 день: <span class = "topic">' . $row["day3"] . '</span></h2>';
                            echo '<h2 class = "days">4 день: <span class = "topic">' . $row["day4"] . '</span></h2>';
                            echo '<h2 class = "days">5 день: <span class = "topic">' . $row["day5"] . '</span></h2>';
                            echo '<button class = "i_btn" onclick="get_info(';
                              
                            echo "'" . $row["name"];
                            echo "','" . $row["description"];
                            echo "','" . $row["date"];
                            echo "','" . $row["image"];
                            echo "')";
                            echo '">Подробнее</button>';
                            echo '</div>';                     

                        }

                    ?>

                </div>
            </section>
        </main>

        <div id = "i_up_sign_popup" class="popup-bg">
            <div id = "i_sign_popup" class  = "popup flex">
                <img class="close-popup" id = "cl_sign_i" src="/images/icons/close.png" >
                <h1 id = "i_sign_up_header">Запишитесь на интенсив</h1>
                <h2 id = "i_sign_up_sub_header">Оставьте свои контакты и наш менеджер свяжется с вами в ближайшее время</h2>
                <form id = "i_contact_form" action="">
                    <input required id = "parent_name" type="text" name = "parent_name" class = "input_sign_up" placeholder="Ваше имя"><br>
                    <input required id = "child_name" type="text" name = "child_name" class = "input_sign_up" placeholder="Имя ребёнка"><br>
                    <input required id = "phone_mask" name ="phone" type="tel" class = "input_sign_up" placeholder="Номер телефона"><br>
                    <input required id = "age" type="number" name = "age" class = "input_sign_up" placeholder="Возраст ребёнка (полных лет)"><br>
                    <br>
                    <button id = "sign_up_btn" name = "i_sign_up_btn" type="submit">Отправить</button>
                </form>
                <p id = "i_sign_up_text">Нажимая на кнопку вы соглашаетесь с нашей <a id = "sign_up_a" href = "/docs/confidential.pdf">политикой конфиденциальности</a></p>
            </div>
        </div>

        <div id = "i_up_popup" class="popup-bg">
            <div id = "i_popup" class  = "popup flex">
                <img id = "close_i" src = "images/summer/mk/close.png">
                <h1 class = "in_header"></h1>
                <div class = "dotted_header flex">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class = "flex">
                    <div class = "i_img_block">
                        <img class = "i_img" src = "images/summer/mk/minecraft.png">
                    </div>
                    <div class = "i_description_block">
                        <p class = "i_description"></p>
                        <div class = "date"></div>
                        <h2 class = "i_pay"> Стоимость: <span class = "mk_money"> 8 900р.</span></h2>
                        <button class = "in_btn">Записаться</button>
                    </div>
                </div>

            </div>
        </div>



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
                <img src = "/images/whatsapp.webp" width="100%" height="100%">
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
