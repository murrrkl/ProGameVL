<html lang="ru">
<head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="robots" content="noyaca">
        <meta name="robots" content="noarchive">
        <meta name="yandex" content="noyaca">
        <meta name="yandex" content="noarchive">
        <meta name = "description" content="Вы откроете захватывающий мир технологий, программирования и креативности, предназначенный специально для молодых умов.

        Основы программирования, создание веб-сайтов, разработка приложений и игр. Наши мастер-классы разработаны с учетом возрастных особенностей детей, чтобы сделать процесс обучения увлекательным, понятным и доступным.

        На странице вы найдете подробную информацию о каждом мастер-классе, включая описание программы и расписание занятий. Мы стремимся вдохновить детей на изучение новых технологий, развить их творческий потенциал и подготовить к цифровому будущему.">
        <meta name="keywords" content="Владивосток, Программирование, онлайн, оффлайн, групповые занятия, индивидуальные занятия, Приморский край, cкетчинг, цифровой рисунок, IT, анимация, 3D-моделирование, Python, Roblox, Minecraft, создание игр, создание сайтов, создание приложений">
        <meta name="color-scheme" content="only light">
        <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
        <title>Мастер-классы</title>
        <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Halogen_0.ttf" as="font" type="font/ttf" crossorigin>
        <link rel="preload" href="/fonts/boorsok.otf" as="font" type="font/otf" crossorigin>
        <link rel="preload" href="/fonts/Evolventa-Regular.otf" as="font" type="font/otf" crossorigin>
        <link rel="stylesheet" href="/css/header.css?14">
        <link rel="stylesheet" href="/css/master_class.css?13">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="/js/maska-nomera.js"></script>
        <script defer src = "/js/pop_up.js"></script>
        <script defer src = "/js/mk.js?7"></script>
    </head>
    <body class="overflow_y">

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

            function getColor($marker) {
                if ($marker == "red") {
                    return '#FA6660;"';
                } else if ($marker == "yellow") {
                    return '#FFD234;"';
                } else if ($marker == "orange") {
                    return '#FFBC5A;"';
                } else if ($marker == "green") {
                    return '#31DAB7;"';
                } else if ($marker == "blue") {
                    return '#5AD7FF;"';
                } else if ($marker == "purple") {
                    echo '#C57BFF;"';
                } else if ($marker == "darkblue") {
                    echo '#5168E3;"';
                } else if ($marker == "bordo") {
                    echo '#B90F0F;"';
                } else if ($marker == "salat") {
                    echo '#81FF76;"';
                } else if ($marker == "grey") {
                    echo '#D2CDD1;"';
                } else if ($marker == "light_blue") {
                    echo '#00FEFE;"';
                } 
                else {
                    echo '#FF7BD2;"';
                }
            }
        ?>

        <?
            $calend = 1;
            $sql1 = "SELECT * FROM calendar WHERE id = :calend";
            $stmt1 = $pdo->prepare($sql1);
            $stmt1->bindValue(":calend", $calend);
            $stmt1->execute();

            if($stmt1->rowCount() > 0){
                foreach ($stmt1 as $row) {
                    $june_1 = $row["june_1"];
                    $july_1 = $row["july_1"];
                    $august_1 = $row["august_1"];

                    $june_2 = $row["june_2"];
                    $july_2 = $row["july_2"];
                    $august_2 = $row["august_2"];

                    $june_3 = $row["june_3"];
                    $july_3 = $row["july_3"];
                    $august_3 = $row["august_3"];

                    $june_4 = $row["june_4"];
                    $july_4 = $row["july_4"];
                    $august_4 = $row["august_4"];
                }
            }

        ?>

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
            <section id = "summer_block">
                <h1 id = "mk_header">Мастер-классы</h1>
                <div id = "mk_block">
                    <img id = "cursor" src = "images/summer/mk/cursor.png">
                    <img id = "comp" src = "images/summer/mk/comp.png">
                    <div id = "age_block">
                        <h1 id = "age_6_7" class = "age_text">6-7 лет</h1>
                        <h1 id = "age_8_10" class = "age_text">8-10 лет</h1>
                        <h1 id = "age_11_13" class = "age_text">11-13 лет</h1>
                        <h1 id = "age_12_16" class = "age_text">12-16 лет</h1>
                        <div id = "grey_line">    <div id = "purple_line"></div> </div>
                    </div>
                    <div id = "mk_age_block">
                        <div class = "mk_section_block" id = "age_1">
                            <div id = "mk_section">
                                <?
                                $mk_age = "6-7 лет";
                                $sql = "SELECT * FROM mk WHERE age = :mk_age";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(":mk_age", $mk_age);
                                $stmt->execute();

                                if($stmt->rowCount() > 0){
                                    foreach ($stmt as $row) {
                                        echo '<div>
                                                <div class = "circle" style = "background-color: ';

                                        $marker = $row["marker"];
                                        $color = getColor($marker);
                                        $mk_name = $row["name"];
                                        $mk_name = str_replace('"', "*", $mk_name);
                                        $mk_desc = $row["description"];
                                        $mk_desc = str_replace('"', "*", $mk_desc);

                                        echo $color . '></div>';
                                        echo '<h1 class = "mk_name" onclick="get_info(';
                                        echo "'" . $mk_name;
                                        echo "','" . $mk_desc;
                                        echo "','" . $row["date"];
                                        echo "','" . $row["image"];
                                        echo "')";
                                        echo'">' . $row["name"] . '</h1>
                                </div>';
                                        
                                    }
                                }
                                ?>
                            </div>
                            <div class = "calendar">
                                <div class = "flex" style="width: 100%;">
                                    <h1 id = "june_1" class = "month current_m">Июнь</h1>
                                    <h1 id = "july_1" class = "month">Июль</h1>
                                    <h1 id = "august_1" class = "month">Август</h1>             
                                </div>
                                <div class = "calendar_img_block">
                                    <?php
                                    echo '<img id = "img_june_1" class = "calendar_img" src = "/functions/admin/images/calendar/' . $june_1 . '">';
                                    
                                    echo '<img id = "img_july_1" class = "calendar_img" src = "/functions/admin/images/calendar/' . $july_1 .'">';

                                    echo '<img id = "img_august_1" class = "calendar_img" src = "/functions/admin/images/calendar/' . $august_1 .'">';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class = "mk_section_block" id = "age_2">
                            <div id = "mk_section">
                                <?
                                $mk_age = "8-10 лет";
                                $sql = "SELECT * FROM mk WHERE age = :mk_age";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(":mk_age", $mk_age);
                                $stmt->execute();

                                if($stmt->rowCount() > 0){
                                    foreach ($stmt as $row) {
                                        echo '<div>
                                                <div class = "circle" style = "background-color: ';

                                        $marker = $row["marker"];
                                        $color = getColor($marker);
                                        $mk_name = $row["name"];
                                        $mk_name = str_replace('"', "*", $mk_name);
                                        $mk_desc = $row["description"];
                                        $mk_desc = str_replace('"', "*", $mk_desc);

                                        echo $color . '></div>';
                                        echo '<h1 class = "mk_name" onclick="get_info(';
                                        echo "'" . $mk_name;
                                        echo "','" . $mk_desc;
                                        echo "','" . $row["date"];
                                        echo "','" . $row["image"];
                                        echo "')";
                                        echo'">' . $row["name"] . '</h1>
                                </div>';
                                        
                                    }
                                }
                                ?>
                            </div>
                            <div class = "calendar">
                                <div class = "flex" style="width: 100%;">
                                    <h1 id = "june_2" class = "month current_m">Июнь</h1>
                                    <h1 id = "july_2" class = "month">Июль</h1>
                                    <h1 id = "august_2" class = "month">Август</h1>             
                                </div>
                                <div class = "calendar_img_block">
                                    <?php
                                    echo '<img id = "img_june_2" class = "calendar_img" src = "/functions/admin/images/calendar/' . $june_2 . '">';
                                    
                                    echo '<img id = "img_july_2" class = "calendar_img" src = "/functions/admin/images/calendar/' . $july_2 .'">';

                                    echo '<img id = "img_august_2" class = "calendar_img" src = "/functions/admin/images/calendar/' . $august_2 .'">';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class = "mk_section_block" id = "age_3">
                            <div id = "mk_section">
                                <?
                                $mk_age = "11-13 лет";
                                $sql = "SELECT * FROM mk WHERE age = :mk_age";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(":mk_age", $mk_age);
                                $stmt->execute();

                                if($stmt->rowCount() > 0){
                                    foreach ($stmt as $row) {
                                        echo '<div>
                                                <div class = "circle" style = "background-color: ';

                                        $marker = $row["marker"];
                                        $color = getColor($marker);
                                        $mk_name = $row["name"];
                                        $mk_name = str_replace('"', "*", $mk_name);
                                        $mk_desc = $row["description"];
                                        $mk_desc = str_replace('"', "*", $mk_desc);

                                        echo $color . '></div>';
                                        echo '<h1 class = "mk_name" onclick="get_info(';
                                        echo "'" . $mk_name;
                                        echo "','" . $mk_desc;
                                        echo "','" . $row["date"];
                                        echo "','" . $row["image"];
                                        echo "')";
                                        echo'">' . $row["name"] . '</h1>
                                </div>';
                                        
                                    }
                                }
                                ?>
                            </div>
                            <div class = "calendar">
                                <div class = "flex" style="width: 100%;">
                                    <h1 id = "june_3" class = "month current_m">Июнь</h1>
                                    <h1 id = "july_3" class = "month">Июль</h1>
                                    <h1 id = "august_3" class = "month">Август</h1>             
                                </div>
                                <div class = "calendar_img_block">
                                    <?php
                                    echo '<img id = "img_june_3" class = "calendar_img" src = "/functions/admin/images/calendar/' . $june_3 . '">';
                                    
                                    echo '<img id = "img_july_3" class = "calendar_img" src = "/functions/admin/images/calendar/' . $july_3 .'">';

                                    echo '<img id = "img_august_3" class = "calendar_img" src = "/functions/admin/images/calendar/' . $august_3 .'">';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class = "mk_section_block" id = "age_4">
                            <div id = "mk_section">
                                <?
                                $mk_age = "12-16 лет";
                                $sql = "SELECT * FROM mk WHERE age = :mk_age";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(":mk_age", $mk_age);
                                $stmt->execute();

                                if($stmt->rowCount() > 0){
                                    foreach ($stmt as $row) {
                                        echo '<div>
                                                <div class = "circle" style = "background-color: ';

                                        $marker = $row["marker"];
                                        $color = getColor($marker);
                                        $mk_name = $row["name"];
                                        $mk_name = str_replace('"', "*", $mk_name);
                                        $mk_desc = $row["description"];
                                        $mk_desc = str_replace('"', "*", $mk_desc);

                                        echo $color . '></div>';
                                        echo '<h1 class = "mk_name" onclick="get_info(';
                                        echo "'" . $mk_name;
                                        echo "','" . $mk_desc;
                                        echo "','" . $row["date"];
                                        echo "','" . $row["image"];
                                        echo "')";
                                        echo'">' . $row["name"] . '</h1>
                                </div>';
                                        
                                    }
                                }
                                ?>
                            </div>
                            <div class = "calendar">
                                <div class = "flex" style="width: 100%;">
                                    <h1 id = "june_4" class = "month current_m">Июнь</h1>
                                    <h1 id = "july_4" class = "month">Июль</h1>
                                    <h1 id = "august_4" class = "month">Август</h1>             
                                </div>
                                <div class = "calendar_img_block">
                                    <?php
                                    echo '<img id = "img_june_4" class = "calendar_img" src = "/functions/admin/images/calendar/' . $june_4 . '">';
                                    
                                    echo '<img id = "img_july_4" class = "calendar_img" src = "/functions/admin/images/calendar/' . $july_4 .'">';

                                    echo '<img id = "img_august_4" class = "calendar_img" src = "/functions/admin/images/calendar/' . $august_4 .'">';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
        </main>

        <div id = "mk_up_sign_popup" class="popup-bg">
            <div id = "mk_sign_popup" class  = "popup flex">
                <img class="close-popup" id = "cl_sign_mk" src="/images/icons/close.png" >
                <h1 id = "mk_sign_up_header">Запишитесь на мастер-класс</h1>
                <h2 id = "mk_sign_up_sub_header">Оставьте свои контакты и наш менеджер свяжется с вами в ближайшее время</h2>
                <form id = "mk_contact_form" action="">
                    <input type="hidden" id="form_mk_name" name="mk_name" value="">
                    <input required id = "parent_name" type="text" name = "parent_name" class = "input_sign_up" placeholder="Ваше имя"><br>
                    <input required id = "child_name" type="text" name = "child_name" class = "input_sign_up" placeholder="Имя ребёнка"><br>
                    <input required id = "phone_mask" name ="phone" type="tel" class = "input_sign_up" placeholder="Номер телефона"><br>
                    <input required id = "mk_age" type="number" name = "age" class = "input_sign_up" placeholder="Возраст ребёнка (полных лет)"><br>
                    <br>
                    <button id = "sign_up_btn" name = "mk_sign_up_btn" type="submit">Отправить</button>
                </form>
                <p id = "mk_sign_up_text">Нажимая на кнопку вы соглашаетесь с нашей <a id = "sign_up_a" href = "/docs/confidential.pdf">политикой конфиденциальности</a></p>
            </div>
        </div>

        <div id = "mk_up_popup" class="popup-bg">
            <div id = "mk_popup" class  = "popup flex">
                <img id = "close_mk" src = "images/summer/mk/close.png">
                <h1 class = "mk_header"></h1>
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
                    <div class = "mk_img_block">
                        <img class = "mk_img" src = "images/summer/mk/minecraft.png">
                    </div>
                    <div class = "mk_description_block">
                        <p class = "mk_description"></p>
                        <div class = "date"></div>
                        <h2 class = "mk_pay"> Стоимость: <span class = "mk_money"> 2 500р.</span></h2>
                        <button class = "mk_btn">Записаться</button>
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

        <a href="https://progamevl.ru/summer.php">
            <div id = "summer_circle" class="flex">
                <h1><span style="width:100%; text-align: center; margin-bottom: 10px;">Лето</span>
                <span style="color:rgb(228, 135, 23);">20</span><span style="color: rgb(255, 255, 255);">24</span></h1>
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
