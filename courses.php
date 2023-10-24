<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name = "description" content="Школа программирования для детей и подростков во Владивостоке. Обучим работе с Python, C++, С#, HTML, CSS, JavaScript, Scratch, Roblox, Minecraft и многое другое. Персональная программа. Записывайтесь сейчас! Создавайте свои проекты. Отслеживайте прогресс. Актуальные навыки. Опытные преподаватели. Персональная программа. Выбирайте удобный формат - онлайн или оффлайн, идивидуальые занятия или в небольшой группе.">
        <meta name="keywords" content="Владивосток, Программирование, онлайн, оффлайн, групповые занятия, индивидуальные занятия, Приморский край, cкетчинг, цифровой рисунок, IT, анимация, 3D-моделирование, Python, Roblox, Minecraft, создание игр, создание сайтов, создание приложений">
        <meta name="color-scheme" content="only light">
        <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
        <title>Курсы</title>
        <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/courses.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="/js/maska-nomera.js"></script>
        <script defer src = "/js/pop_up.js"></script>
        <script defer src = "/js/courses.js"></script>
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
            <section class = "flex" id = "courses">
                <h1 class = "section_header">Наши курсы</h1>
                <div class = "course" id = "bit_box">
                    <div id = "bit_course">
                        <div class = "flex age">
                            <p>5-6 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">BIT</h1>
                        </div>
                        <img class = "course_img" id = "BIT" src = '/images/courses/ghost.png' alt = "Программирование в игровой форме">
                        <p class = "course_text">Ваш ребёнок будет погружен в мир логики и информатки с первого занятия, научиться работе в команде и всё это в игровом формате</p>
                        <button class = "course_but" id = "bit_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "bit_course_more">
                        <img class="close-popup" id = "cl_bit" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Развивающие занятия</li>
                                <li>Знакомство с компьютером и алгоритмами</li>
                                <li>Создание несложных программ</li>
                                <li>Решение интересных задач</li>
                                <li>Развитие творческих способностей</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>

                <div class = "course" id = "byte_box">
                    <div id = "byte_course">
                        <div class = "flex age">
                            <p>6-7 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">BYTE</h1>
                        </div>
                        <img class = "course_img" id = "BYTE" src = '/images/courses/animation.png' alt = "Скелетная анимация">
                        <p class = "course_text">Научимся блочному языку программирования, похожему на конструктор, где программы собираются из рахноцветных блоков</p>
                        <button class = "course_but" id = "byte_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "byte_course_more">
                        <img class="close-popup" id = "cl_byte" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Pixel Art</li>
                                <li>2D проекты в Scratch Junior</li>
                                <li>3D проекты в Kodu</li>
                                <li>Создание анимации в Pivot Animator</li>
                                <li>Знакомство с устройством компьютера</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "kb_box">
                    <div id = "kb_course">
                        <div class = "flex age">
                            <p>8-9 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">KBYTE</h1>
                        </div>
                        <img class = "course_img" id = "KB" src = '/images/courses/scratch.png' alt="Блочное программирование">
                        <p class = "course_text">Научимся создавать игры и анимации, понимать логику программированич и принципы выполнения команд</p>
                        <button class = "course_but" id = "kb_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "kb_course_more">
                        <img class="close-popup" id = "cl_kb" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Написание кода в игровой форме</li>
                                <li>Изучение основ программирования с Minecraft Edu</li>
                                <li>Создание интерактивных историй, игр и мультфильмов в Scratch</li>
                                <li>Создание собственных 3D-сцен в CoSpaces</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "kb2_box">
                    <div id = "kb2_course">
                        <div class = "flex age">
                            <p>9-10 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">KBYTE II</h1>
                        </div>
                        <img class = "course_img" id = "KB2" src = '/images/courses/mine.png' alt = "Майнкрафт">
                        <p class = "course_text">Создадим мини-игры внутри Minecraft, а также наделим виртуального помощника искусственным интеллектом</p>
                        <button class = "course_but" id = "kb2_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "kb2_course_more">
                        <img class="close-popup" id = "cl_kb2" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Программирование виртуального робота в Vex Code</li>
                                <li>Написание кода в игровой форме в среде Minecraft Education Edition</li>
                                <li>Создание 2D и 3D-игр в Scratch и CoSpaces</li>
                                <li>3D-моделирование в Tinker Cad</li>
                                <li>Видеомонтаж</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "mb_box">
                    <div id = "mb_course">
                        <div class = "flex age">
                            <p>10-11 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">MBYTE</h1>
                        </div>
                        <img class = "course_img" id = "MB" src = '/images/courses/roblox.png' alt = "Roblox Studio">
                        <p class = "course_text">Создадим захватывающие 3D игры с помощью языка программирования Lua и инструментов разработки Roblox Studio</p>
                        <button class = "course_but" id = "mb_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "mb_course_more">
                        <img class="close-popup" id = "cl_mb" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Создание пиксельной игры в GDevelop</li>
                                <li>Создание 3D-проектов в Roblox Studio</li>
                                <li>Изучение языка программирования Lua</li>
                                <li>Создание мобильных приложений в Mit App</li>
                                <li>Изучение основ языка программирования Python</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "mb2_box">
                    <div id = "mb2_course">
                        <div class = "flex age">
                            <p>11-12 лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header">MBYTE II</h1>
                        </div>
                        <img class = "course_img" id = "MB2" src = '/images/courses/roblox2.png' alt = "Язык программирования Lua в Roblox Studio">
                        <p class = "course_text">Наш курс - это идеальный выбор для всех, кто хочет попробовать себя в разных видах программирования, начиная от разработки игр и заканчивая созданием сайтов</p>
                        <button class = "course_but"  id = "mb2_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "mb2_course_more">
                        <img class="close-popup" id = "cl_mb2" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Создание 2D-игр в Construct3</li>
                                <li>Создание 3D-игр на Unity</li>
                                <li>Продвинутые проекты в Roblox Studio</li>
                                <li>Написание сайта с адаптивной вёрсткой на HTML и применением стилей CSS</li>
                                <li>Знакомство с языками программирования Python и C#</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "gb_box">
                    <div id = "gb_course">
                        <div class = "flex age">
                            <p>13+ лет</p>
                        </div>
                        <img class = "course_img" id = "python" src = '/images/courses/python.png' alt = "Язык программирования Python">
                        <div class = "header_box">
                            <h1 class = "course_header gbyte">Прикладное программирование</h1>
                        </div>
                        <p class = "course_text">Погрузимся в разработку на популярных языках программирования, где научимся прописывать коды и создавать собственные проекты </p>
                        <button class = "course_but" id = "gb_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "gb_course_more">
                        <img class="close-popup" id = "cl_gb" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Изучение яызка программирования Python</li>
                                <li>Создание Telegram-бота</li>
                                <li>Обучение нейронных сетей</li>
                                <li>Знакомство с базовыми алгоритмами</li>
                                <li>Изучение языка программирования C++ и решение олимпиадных задач</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "gb1_box">
                    <div id = "gb1_course">
                        <div class = "flex age">
                            <p>13+ лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header gbyte">Игровое программирование</h1>
                        </div>
                        <img class = "course_img" id = "game" src = '/images/courses/game.png' alt = "Игровое программирование">
                        <p class = "course_text">Научимся создавать собственные 2D и 3D игровые миры и программировать их на базе популярных движков Unity и Unreal Engine, как настоящие разработчики</p>
                        <button class = "course_but" id = "gb1_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "gb1_course_more">
                        <img class="close-popup" id = "cl_gb1" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Изучение языка программирования C#</li>
                                <li>Создание 2D и 3D-игр на Unity</li>
                                <li>Создание крутых 3D-игр в Unreal Engine</li>
                                <li>Создание 2D-игр на Python</li>
                                <li>Создание 2D-игр в Godot</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "gb2_box">
                    <div id = "gb2_course">
                        <div class = "flex age">
                            <p>13+ лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header gbyte">Веб-программирование</h1>
                        </div>
                        <img class = "course_img" id = "web" src = '/images/courses/program.png' alt = "Программист">
                        <p class = "course_text">Откройте для себя новые возможности и станьте востребованным специалистом в сфере веб-разработки</p>
                        <button class = "course_but" id = "gb2_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "gb2_course_more">
                        <img class="close-popup" id = "cl_gb2" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Написание сайта с адаптивной вёрсткой на HTML</li>
                                <li>Создание анимированных эффектов и применение стилей CSS</li>
                                <li>Создание интерактивности с JavaScript</li>
                                <li>Продвинутые механизмы с PHP</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "gb3_box">
                    <div id = "gb3_course">
                        <div class = "flex age">
                            <p>13+ лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header gbyte">Этичный хакер</h1>
                        </div>
                        <img class = "course_img" id = "hacker" src = '/images/courses/hacker.png' alt = "Кибер-безопасность">
                        <p class = "course_text">Курс по кибербезопасности, который поможет Вам научиться защищать себя от кибератак. Освой самую востребованную профессию в IT-сфере!</p>
                        <button class = "course_but" id = "gb3_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "gb3_course_more">
                        <img class="close-popup" id = "cl_gb3" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Введение в информационную безопасность</li>
                                <li>Математические методы защиты информации</li>
                                <li>Защищённые компьютерные сети</li>
                                <li>Kali Linux</li>
                                <li>CTF</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course" id = "gb4_box">
                    <div id = "gb4_course">
                        <div class = "flex age">
                            <p>16+ лет</p>
                        </div>
                        <div class = "header_box">
                            <h1 class = "course_header gbyte">Введение в специальность</h1>
                        </div>
                        <img class = "course_img" id = "android" src = '/images/courses/android.png' alt = "Создание мобильных приложений">
                        <p class = "course_text">Создадим мобильные приложения под Android, пройдём все этапы разработки от начала до конца и познакомимся с языком программирования Java</p>
                        <button class = "course_but" id = "gb4_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "gb4_course_more">
                        <img class="close-popup" id = "cl_gb4" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>3D-моделирование в 3D Studio Max</li>
                                <li>Изучение языка программирования Java</li>
                                <li>Все этапы разработки мобильных приложений</li>
                                <li>Тестирование готовых приложений</li>
                                <li>Знакомство с Git</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course art_box" id = "art_box">
                    <div id = "art_course">
                        <div>
                            <div class = "flex age art">
                                <p>8-11 лет</p>
                            </div>
                            <div class = "flex age art">
                                <p>12-15 лет</p>
                            </div>
                        </div>
                        <div class = "header_box art_header">
                            <h1 class = "course_header">Скетчинг</h1>
                        </div>
                        <img class = "course_img" id = "scetch" src = '/images/courses/scetch.png' alt = "Скетчинг">
                        <p class = "course_text" style="color: black;">Освоим техники и приёмы рисования спиртовыми маркерами, создадим настроение при помощи света и тени. Начни свой путь художника сегодня!</p>
                        <button class = "course_but" id = "art_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "art_course_more">
                        <img class="close-popup" id = "cl_art" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Правила постановки рук</li>
                                <li>Работа со светом и тенью</li>
                                <li>Основы композиции и перспективы</li>
                                <li>Рисование персонажей</li>
                                <li>Работа с различными стилями</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
                <div class = "course art_box" id = "art1_box">
                    <div id = "art1_course">
                        <div>
                            <div class = "flex age art">
                                <p>8-11 лет</p>
                            </div>
                            <div class = "flex age art">
                                <p>12-15 лет</p>
                            </div>
                        </div>
                        <div class = "header_box art_header">
                            <h1 class = "course_header">Цифровой рисунок</h1>
                        </div>
                        <img class = "course_img" id = "art" src = '/images/courses/art.png' alt = "Цифровой рисунок">
                        <p class = "course_text" style="color: black;">Вместо бумаги используем планшет, вместо маркеров Pencil. Попробуй себя в новом творчестве и освой совеременный стиль рисования!</p>
                        <button class = "course_but" id = "art1_btn">Подробнее</button>
                    </div>
                    <div class = "course_more" id = "art1_course_more">
                        <img class="close-popup" id = "cl_art1" src="/images/courses/crossed_white.png" >
                        <div class="flex">
                            <ul class = "course_list">
                                <li>Рисование на графическом планшете</li>
                                <li>Монолинейная иллюстрация</li>
                                <li>Работа с цветом и тоном</li>
                                <li>Свет и композиция</li>
                                <li>Рисование персонажей</li>
                                <li>Градиенты, кисти и шумы</li>
                            </ul>
                            <button class="sign_up course_sign">Записаться на бесплатное занятие</button>
                        </div>
                    </div>
                </div>
            </section>

            <section id = "start">
                <img id = "dog" src = "/images/corgy.svg" alt = "корги за компьютером">
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
