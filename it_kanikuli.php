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
        <title>IT-каникулы</title>
        <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Halogen_0.ttf" as="font" type="font/ttf" crossorigin>
        <link rel="preload" href="/fonts/boorsok.otf" as="font" type="font/otf" crossorigin>
        <link rel="preload" href="/fonts/Evolventa-Regular.otf" as="font" type="font/otf" crossorigin>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/it_kanikuli.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="/js/maska-nomera.js"></script>
        <script defer src = "/js/pop_up.js"></script>
        <script defer src = "/js/it_kanikuli.js"></script>
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

        ?>

        <main>
            <section id = "summer_block">
                <h1 class = "section_header">☀️Летние IT каникулы  от PROGAME - это уникальная возможность совместить обучение и развлечение!</h1>
                <div id = "circle_section" class = "flex">
                    <div class = "circle flex">
                        <h1 class = "circle_header">Программа 10 дней</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/data.png"></div>
                        <p class = "circle_text"> С понедельника по пятницу<br>c 9:00 до 18:00</p>
                    </div>
                    <div class = "circle flex">
                        <h1 class = "circle_header">Развитие</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/idea.png"></div>
                        <p class = "circle_text">Программирование, 3D-моделирование, скетчинг, цифровой рисунок</p>
                    </div>
                    <div class = "circle flex">
                        <h1 class = "circle_header">От 8 до 14 лет</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/child.png"></div>
                        <p class = "circle_text">Группы формируются по возрасту</p>
                    </div>
                    <div class = "circle flex">
                        <h1 class = "circle_header">Питание</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/food.png"></div>
                        <p class = "circle_text">Трёхразовое питание и вкусные переменки</p>
                    </div>
                    <div class = "circle flex">
                        <h1 class = "circle_header">Наша команда</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/teacher.png"></div>
                        <p class = "circle_text">С ребятами занимаются опытные преподаватели и весёлые наставники</p>
                    </div>
                    <div class = "circle flex">
                        <h1 class = "circle_header">27 500 рублей</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/coin.png"></div>
                        <p class = "circle_text">В данную стоимость "всё включено" - Вам не нужно ничего доплачивать</p>
                    </div>                   
                </div>

                <div class="flex">
                    <h1 class = "section_header program_h">Каждый день IT-каникул - это полноценные развивающие занятия по программированию и цифровому творчеству, а также невероятные тематические приключения:</h1>
                    <div class = "flex">
                        <div class = "program">
                            <h2 class = "program_header">Первая половина дня</h2>
                            <h2 class = "program_text">Активно занимаемся и развиваемся</h2>
                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Программирование в Roblox и Minecraft</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Создание игр и виртуальных миров</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Вирусы и Кибербезопасность</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Кино и моушн-дизайн</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Анимация и мультипликация</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Скетчинг</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker blue"></div>
                                <h1 class = "pr_text">Цифровой рисунок</h1>
                            </div>
                        </div>
                        <div class = "program">
                            <h2 class = "program_header">Вторая половина дня</h2>
                            <h2 class = "program_text">Активный отдых</h2>
                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Экскурсии</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Творческие мастер-классы</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Подвижные игры</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Прогулки</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Квесты</h1>
                            </div>

                            <div class = "program_punct">
                                <div class = "marker yellow"></div>
                                <h1 class = "pr_text">Командные проекты</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    <h1 class = "section_header">Фотографии с прошлых смен</h1>
                    <div class = "i_box flex">
                        <div class="flex" id = "i_1_2">
                            <img class = "it_img" id = "i1" src = "/images/summer/it_kanikuli/i1.png">
                            <img class = "it_img" id = "i2" src = "/images/summer/it_kanikuli/i2.png">
                        </div>
                        <img class = "it_img" id = "i3" src = "/images/summer/it_kanikuli/i3.png">
                    </div>
                    <div class = "i_box flex second_box">
                        <img class = "it_img" id = "i4" src = "/images/summer/it_kanikuli/i4.png">
                        <div id = "i_5_6"> 
                            <img class = "it_img" id = "i5" src = "/images/summer/it_kanikuli/i5.png">
                            <img class = "it_img" id = "i6"src = "/images/summer/it_kanikuli/i6.png">
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <h1 class = "section_header">Расписание смен</h1>
                    <div class = "smena flex in_btn">
                        <h1 class = "circle_header">1 смена</h1>
                        <img  class = "img_smena" src = "/images/summer/it_kanikuli/smena1.png" >
                        <p class = "smena_text">3 июня - 14 июня </p>
                    </div>
                    <div class = "smena flex in_btn">
                        <h1 class = "circle_header">2 смена</h1>
                        <img  class = "img_smena" src = "/images/summer/it_kanikuli/smena2.png" >
                        <p class = "smena_text">24 июня - 5 июля</p>
                    </div>
                </div>

                <div class="flex">
                    <h1 class = "section_header">Скидка при оплате до 1 мая!</h1>
                    <div class = "circle flex">
                        <h1 class = "sale_header">10%</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/sale1.png"></div>
                        <p class = "circle_text">Для учеников нашей школы ProGame</p>
                    </div>    

                    <div class = "circle flex">
                        <h1 class = "sale_header">5%</h1>
                        <div class = "img_box"><img class = "circle_img" src = "/images/summer/it_kanikuli/sale2.png"></div>
                        <p class = "circle_text">Для новых учеников</p>
                    </div>
                </div>

                <div class="flex">
                    <h1 class = "section_header">Адрес</h1>
                    <h2 class = "add_text">Океанский проспект, 83 <br> (Район Дальпресса)</h2>
                </div>

            </section>

            <section id = "start">
                <img id = "dog" src = "/images/corgy.svg">
                <div id = "start_block" class="flex">
                    <h1 id = "start_header">Заполните форму и мы пригласим Вас на наши IT-каникулы!</h1>
                    <button class="flex in_btn" id = "start_btn">Записаться</button>
                </div>
            </section>
        </main>

        <div id = "i_up_sign_popup" class="popup-bg">
            <div id = "i_sign_popup" class  = "popup flex">
                <img class="close-popup" id = "cl_sign_i" src="/images/icons/close.png" >
                <h1 id = "i_sign_up_header">Запишитесь на IT-каникулы</h1>
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
