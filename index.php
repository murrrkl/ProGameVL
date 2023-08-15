<?php

if(isset($_POST["age"])) {
    $course = $_POST["age"];
    if ($course === "7-8") {
        header("Location: ./tests/age_7_8.php");
    } else if ($course === "9-10") {
        header("Location: ./tests/age_9_10.php");
    } else if ($course === "11-12") {
        header("Location: ./tests/age_11_12.php");
    } else if ($course === "13+") {
        header("Location: ./tests/age_13.php");
    }
}
?>

<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name = "description" content="Школа программирования для детей и подростков во Владивостоке. Обучим работе с Python, C++, С#, HTML, CSS, JavaScript, Scratch, Roblox, Minecraft и многое другое. Персональная программа. Записывайтесь сейчас! Создавайте свои проекты. Отслеживайте прогресс. Актуальные навыки. Опытные преподаватели. Персональная программа. Выбирайте удобный формат - онлайн или оффлайн, идивидуальые занятия или в небольшой группе.">
        <meta name="keywords" content="Владивосток, Программирование, онлайн, оффлайн, групповые занятия, индивидуальные занятия, Приморский край, cкетчинг, цифровой рисунок, IT, анимация, 3D-моделирование, Python, Roblox, Minecraft, создание игр, создание сайтов, создание приложений">
        <meta name="color-scheme" content="only light">
        <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
        <title>Главная</title>
        <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/fonts/Inter-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Rubik-Medium.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/segoeprint.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/main.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src = "/js/main.js"></script>
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
                <br>
                <li><a class="sign_up" id = "record">Записаться на урок</a></li>
                <li><a href="tel:+7 984 195-30-14" id = "tel">+7 (984) 195-30-14</a></li>
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
        <section id="main_block">
            <div id = "main">
                <div class = "photo_box" id = "yellow_box">
                    <img class = "photo_box" id = "girl" src = "/images/girl.png" alt = "ученица программирует">
                </div>
                <div class = "photo_box" id = "green_box">
                    <img class = "photo_box" id = "boy" src = "/images/boy.png" alt = "ученик программирует">
                </div>
                <div class = "flex">
                    <h1 id = "main_header" class = "white_text">
                        Школа IT-профессий
                    </h1>
                    <h1 class = "white_text" id = "sub">
                        для
                    </h1>
                    <h2 id = "children">детей и подростков</h2>
                </div>
                <h2 class = "white_text" id = "second_header">Обучение программированию с фокусом на результат!</h2>
                <div style="display: flex; width: 100%; align-items: center;justify-content: center;">
                    <div class="sign_up" id="main_btn">
                        <a id = "free_btn">БЕСПЛАТНЫЙ УРОК</a>
                        <div id = "white_btn">
                            <img id = "arrow" src = "/images/arrow.png" alt = "Стрелка">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id = "about" class = "flex">
            <div id = "about_block">
                <h1 class = "block_header">О нас</h1>
                <p id = "about_text">Меня зовут Исакова Елена Дмитриевна. <br> Я руководитель сети школ программированием ProGame в городе Владивостоке. <br><br>
                    Мы специализируемся на предоставлении качественного и доступного современного дополнительного образования детей и подростков в сфере IT технологий. <br><br>
                    Даём возможность по-новому взглянуть на процесс обучения, создаём комфортную образовательную среду, как для наших учеников, так и их родителей.
                    <span id = "dots">...</span>
                    <span id = "more_content">
                        <span style="display:none;">
                        <br><br>
                        Наши ученики - это наша гордость, и задача нашей школы с любовью и заботой передавать знания и навыки, которые способствуют развитию подрастающего поколения в быстроизменяющемся технологическом мире.
                        </span>
                        <a id="more_link">Показать</a>
                    </span>
                </p>
            </div>
            <div id = "photo_block">
                <div id = "yellow"></div>
                <img id = "progame" src = "/images/Progame.png" alt = "progame logo">
                <img id = "elena_photo" src = "/images/Elena_.png" alt = "Исакова Елена Дмитриевна">
            </div>
        </section>
        <section class = "flex" id = "best">
            <div id = "white_box">
                <div style="display: flex;">
                    <h1 class = "block_header" id = "third_block_header">Почему нас выбирают</h1>
                    <img src = "/images/question.png" id = "question" alt = "Вопрос">
                </div>
                <div class = "flex" style="align-items: start; justify-content: start;">
                    <div class = "slot">
                        <div class = "num flex" id="first">1</div>
                        <h1 class="best_header">Программа</h1>
                        <p class = "best_text">Обучение проводится индивидуально или в небольших группах с учётом пожеланий ученика и родителя.</p>
                        <p class = "best_text" style="margin-top: 5px;">Программы разработаны нами так, чтобы ребёнку было интересно и познавательно</p>
                    </div>
                    <div class = "slot">
                        <div class = "num flex" id="second">2</div>
                        <h1 class="best_header">Преподаватели</h1>
                        <p class = "best_text">Тщательно подобранный преподавательский состав из молодых специалистов с реальным опытом разработки и преподавания</p>
                    </div>
                    <div class = "slot">
                        <div class = "num flex" id="third">3</div>
                        <h1 class="best_header">Доступность</h1>
                        <p class = "best_text">Уроки проводятся очно в 7 филиалах во Владивостоке и дистанционно из любой точки Приморского края без траты времени на дорогу.</p>
                        <p class = "best_text" style="margin-top: 5px;">Наша гибкая ценовая политика позволяет найти подходящее именно Вам предложение</p>
                    </div>
                </div>
            </div>
        </section>

        <section id = "forth_block">
            <h1 class = "block_header">Найдём особый подход к вашему <br> ребёнку и доведём до результата</h1>
            <div class = "flex" id = "forth_slots">
                <div class = "forth_block_slot">
                    <img class = "photo_slot" src="/images/pic1.png" alt = "ребёнок за компьютером">
                    <h2 class = "forth_block_header">Объясняем сложное простыми словами</h2>
                    <p class = "forth_block_text">Доносим до детей самую суть, не заставляя бездумно заучивать.</p>
                </div>
                <div class = "forth_block_slot">
                    <img class = "photo_slot" src="/images/pic2.png" alt = "ребёнок программирует">
                    <h2 class = "forth_block_header">Поддерживаем и помогает ребёнку поверить в себя</h2>
                    <p class = "forth_block_text">В первую очередь мы станем для вашего ребёнка другом, поможем ему поверить в себя, преодолеть стеснение, неуверенность и раскрыть своим способности на 100 %</p>
                </div>
                <div class = "forth_block_slot" id = "forth_block_third_slot" style="background-color: #CAE6FF;">
                    <div style="display: flex; justify-content: center;">
                        <img class = "photo_slot" id = "third_slot" src="/images/pic3.png" alt = "наши ученики">
                    </div>
                    <h2 class = "forth_block_header">Более 500 детей</h2>
                    <p class = "forth_block_text">Достигли поставленных целей и уже покоряют новые вершины вместе с ProGame</p>
                    <img id="plane" src = "/images/plane.png" alt = "бумажный самолётик">
                </div>
            </div>
        </section>
        <section id = "licence_block">
            <h1 class = "block_header" id = "licence_header">Государственная лицензия</h1>
            <div id = "licence_section">
               <div style="display: flex;" class="licence_blocks">
                    <div class = "licence_block" style="margin-right: 30px;">
                        <img class = "licence_img" src = "/images/ruble.png" alt = "монеты">
                        <p class = "licence_text">Оплачивайте обучение материнским капиталом</p>
                    </div>
                    <div class = "licence_block">
                        <img class = "licence_img" src = "/images/taxes.png" alt = "монеты">
                        <p class = "licence_text">Поможем получить налоговый вычет 13% от стоимости курса</p>
                    </div>
                </div>
                <button class="sign_up" id = "licence_btn">
                    Связаться с нами
                    <img id = "cur_arrow" src = "/images/curved_arrow.png" alt = "стрелка-указатель">
                </button>
            </div>
        </section>
        <section id = "teachers">
            <h1 id = "teachers_header">Преподаватели</h1>
            <div id = "progress_section">
                <div class="flex">
                    <div id = "progress_line" class="flex">
                        <div class = "points" id = "first_point"></div>
                        <div class = "points" id = "second_point"></div>
                        <div class = "points" id = "third_point"></div>
                    </div>
                </div>
                <div id = "progress_description_section" class="flex">
                    <p class = "progress_description">Наши учителя проходят многоэтапный отбор и обучение</p>
                    <p class = "progress_description">У нас работают только молодые учителя с реальным портфолио и опытом</p>
                    <p class = "progress_description">Наши преподаватели найдут общий язык с любым ребёнком</p>
                </div>
            </div>
            <div id = "teacher_slider" class="flex" style="align-items: start;">
                <div class="carousel">
                    <ul id="carousel__list">
                        <li class="flex carousel__item" data-pos="-3">
                            <img class = "teacher_photo" src = "/images/teachers/AI.png" alt = "Антон Ильесович">
                            <h2 class = "teacher_name">Нургалиев Антон Ильесович</h2>
                            <p class = "teacher_text">Действующий Frontend-Developer в IT-компании</p>
                        </li>
                        <li class="flex carousel__item" data-pos="-2">
                            <img class = "teacher_photo" src = "/images/teachers/KL.png" alt = "Каринэ Лёвовна">
                            <h2 class = "teacher_name">Матевосян Каринэ Лёвовна</h2>
                            <p class = "teacher_text">Математическое обеспечение и администрирование информационных систем</p>
                        </li>
                        <li class="flex carousel__item" data-pos="-1">
                            <img class = "teacher_photo" src = "/images/teachers/SM.png" alt = "Софья Максимовна">
                            <h2 class = "teacher_name">Будянская Софья Максимовна</h2>
                            <p class = "teacher_text">Прикладная информатика в компьютерном дизайне</p>
                        </li>
                        <li class="flex carousel__item" data-pos="0">
                            <img class = "teacher_photo" src = "/images/teachers/EO.png" alt = "Эвелина Олеговна">
                            <h2 class = "teacher_name">Полянская Эвелина Олеговна</h2>
                            <p class = "teacher_text">Программная инженерия</p>
                        </li>
                        <li class="flex carousel__item" data-pos="1">
                            <img class = "teacher_photo" src = "/images/teachers/KA.png" alt = "Кристина Александровна">
                            <h2 class = "teacher_name">Самойлова Кристина Александровна</h2>
                            <p class = "teacher_text">IT-аналитик</p>
                        </li>
                        <li class="flex carousel__item" data-pos="2">
                            <img class = "teacher_photo" src = "/images/teachers/SE.png" alt = "Степан Евгеньевич">
                            <h2 class = "teacher_name">Туров Степан Евгеньевич </h2>
                            <p class = "teacher_text">Программная инженерия</p>
                        </li>
                        <li class="flex carousel__item" data-pos="3">
                            <img class = "teacher_photo" src = "/images/teachers/VV.png" alt = "Валерия Викторовна">
                            <h2 class = "teacher_name">Антоненко Валерия Викторовна</h2>
                            <p class = "teacher_text">Больше 8 лет в сфере диджитал рисования. Действующий digital-дизайнер</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <a href="https://api.whatsapp.com/send?phone=79841953014">
            <div id = "whats_app" class="flex">
                <img src = "/images/whatsapp.png" width="100%" height="100%">
            </div>
        </a>

        <section id = "education">
            <h1 class = "block_header">Как проходит обучение</h1>
            <div id = "education_block">
                <img id = "education_photo" src = "/images/education.png" alt = "Сертификат в конце обучения">
                <div id = "education_slots">
                    <div class = "education_slot" id = "first_education_slot">
                        <div class = "education_icon flex">
                            <img src = "/images/icons/form.png" alt="education icon" height="100%" width="100%">
                        </div>
                        <h2 class = "education_header">Формат и время занятий</h2>
                        <p class = "education_text">Вы можете выбрать удобный для Вас формат - очно или онлайн, групповые занятия или индивидуальные. <br> <br> Длительность группового занятия — 90 минут, индивидуального - 60 минут.</p>
                    </div>
                    <div class = "education_slot" id = "second_education_slot">
                        <div class = "education_icon flex">
                            <img src = "/images/icons/prize.png" alt="education icon" height="100%" width="100%">
                        </div>
                        <h2 class = "education_header">Призы и награды</h2>
                        <p class = "education_text">За успехи в учёбе и выполнение домашних заданий дети зарабатывают внутреннюю валюту - Геймтокены, которые можно тратить на призы</p>
                    </div>
                    <div class = "education_slot" id = "third_education_slot">
                        <div class = "education_icon flex">
                            <img src = "/images/icons/brain.png" alt="education icon" height="100%" width="100%">
                        </div>
                        <h2 class = "education_header">Домашнее задание</h2>
                        <p class = "education_text">После каждого занятия ученикам даются домашние задания, чтобы самостоятельно закрепить пройденный материал</p>
                    </div>
                    <div class = "education_slot" id = "fourth_education_slot">
                        <img src = "/images/icons/pin.png" id = "fourth_education_icon" alt = "Скрепка">
                        <h2 id = "fourth_education_header">Ваш ребёнок сам будет хотеть заниматься и с нетерпением ждать каждого занятия!</h2>
                    </div>
                </div>
                <div class = "flex" id = "certificate">
                    <h2 id = "certificate_text">По окончании курса ваш ребёнок получит сертификат</h2>
                    <img id = "certificate_icon" src = "/images/icons/certificate.png" alt = "Сертификат">
                </div>
            </div>
        </section>

        <section id = "test">
            <h1 id = "test_header">Пройдите мини-тест и узнайте наиболее эффективную программу для вашего ребёнка</h1>
           <div class="flex">
               <div id = "white_section">
                    <h2 id = "test_sub_header">Выберите возраст:</h2>
                    <form action="index.php" method="POST">
                        <input class = "test_age_r" type="radio" name="age" value="7-8" checked="checked"/>
                        <label class = "test_age">7-8 лет</label><br><br>
                        <input class = "test_age_r" type="radio" name="age" value="9-10" />
                        <label class = "test_age">9-10 лет</label><br><br>
                        <input class = "test_age_r" type="radio" name="age" value="11-12" />
                        <label class = "test_age">11-12 лет</label><br><br>
                        <input class = "test_age_r" type="radio" name="age" value="13+" />
                        <label class = "test_age">13+ лет</label><br><br>
                        <button id = "test_btn" name = "test_btn" type="submit">Далее</button>
                    </form>
                </div>
               <img id = "cat_test" src = "/images/cat_test.png" alt = "cat test">
           </div>
        </section>
        <section id = "start">
            <img id = "dog" src = "/images/corgy.svg" alt="корги за компьютером">
            <div id = "start_block" class="flex">
                <h1 id = "start_header">Запишитесь на бесплатное пробное занятие и мы подберём для вас программу</h1>
                <button class="sign_up" id = "start_btn">Начать учиться</button>
            </div>
        </section>
        <section id = "reviews">
            <h1 id = "reviews_header">Отзывы</h1>
            <div id = "reviews_block">
                <div class = "review_slot" id = "first_review">
                    <h1 class = "review_author">Анастасия</h1>
                    <p class = "review_text">
                        Елена, хочу вас поблагодарить за вашу огромную работу, за вашу прескрасную школу! </p>
                    <p class = "review_text">
                        Саша занимался у вас 2 года, за это время он всерьёз заинтересовался программированием, а с недавнего времени и скетчингом.😊
                    </p>
                    <p class = "review_text">Меня радует, что за это время значительно подтянулась компьютерная граммотность и освоенно множество интересных программ. Было здорово у вас учиться, поэтому нам с Сашей очень-очень жаль с вами расстоваться - мы переезжаем в другой город.
                    </p>
                    <p class = "review_text">
                        Желаем вам и всем вашим преподавателям успехов и талантливых учеников! 😉 <br> Спасибо вам за всё!
                    </p>
                    <div class = "author_child">
                        <p class="review_child_name">Сын Александр</p>
                        <p class="review_child">Группа 9-11 лет</p>
                    </div>
                    <p class = "review_date">25 мая 2021</p>
                </div>
                <div class = "review_slot" id = "second_review">
                    <h1 class = "review_author">Елена</h1>
                    <p class = "review_text">
                        Добрый вечер! Хочу выразить благодарности от себя и своего ребёнка за Ваш труд! Вы вкладываете душу и сердце в занятия.
                    </p>
                    <p class = "review_text">
                        Ребёнок бежала на занятия скетчингом - ей было интересно, познавательно. Она получила знания, а не просто ходила “порисовать”!
                        Процветания Вам!  До встречи в новом учебном году!
                    </p>
                    <p class = "review_text">
                        Гайварончкая Е. и дочь Вика❤
                    </p>
                    <div class = "author_child">
                        <p class="review_child_name">Дочь Виктория</p>
                        <p class="review_child">Скетчинг</p>
                    </div>
                    <p class = "review_date">28 мая 2022</p>
                </div>
                <div class = "review_slot" id = "third_review">
                    <h1 class = "review_author">Виктория</h1>
                    <p class = "review_text">
                        Добрый день! Мы с Женей хотим выразить огромнуб благодарность за обучение! Очень интересно было, и, главное дали реальные практические занятия!
                    </p>
                    <p class = "review_text">
                        Женя хочет быть программистом!
                    </p>
                    <div class = "author_child">
                        <p class="review_child_name">Сын Евгений</p>
                        <p class="review_child">Группа 13-17 лет</p>
                    </div>
                    <p class = "review_date">10 апреля 2021</p>
                </div>

                <div class = "review_slot" id = "fourth_review">
                    <h1 class = "review_author">Алина</h1>
                    <p class = "review_text">
                        Спасибо большое за ваш труд! Такая насыщенная программа👍 И самое важное, что без телефонов!!!
                        Показали детям сколько всего интересного за пределами этой коробочки!😁
                    </p>
                    <p class = "review_text">
                        Сын сказал, что аж всплакнул, когда прощались и что вторая смена в понедельник и хочет ещё😄
                        Ждите в следующем году обязательно🤗
                    </p>
                    <div class = "author_child">
                        <p class="review_child_name">Сын Платон</p>
                        <p class="review_child">Группа 8-10 лет</p>
                    </div>
                    <p class = "review_date">20 июня 2022</p>
                </div>
                <div class = "review_slot" id = "fifth_review">
                    <h1 class = "review_author">Елена</h1>
                    <p class = "review_text">
                        Спасибо большое за  занятия. На самом деле это что-то невероятное! Софья до конца не поняла, что произошло😅, пока не загрузила на телефон и она не увидела, что у неё получилось. Сколько было восторга 💥 “Я! Сама! Это моё”
                    </p>
                    <p class = "review_text">
                        Видеть, как горят глаза ребёнка неподдельным восторгом и интересом - самое большое удовольствие для родителей.
                        Спасибо🤗
                    </p>
                    <div class = "author_child">
                        <p class="review_child_name">Дочь Софья</p>
                        <p class="review_child">Группа 9-10 лет</p>
                    </div>
                    <p class = "review_date">15 сентября 2021</p>
                </div>
                <div class = "review_slot" id = "sixth_review">
                    <h1 class = "review_author">Наталья</h1>
                    <p class = "review_text">
                        Отличный педагог, приятная и дружелюбная атмосфера.
                        Сын начал заниматься с осени 2019 г. И он был в восторге с первого занятия и с нетерпением ждал очередного.
                        Преподаватель уделяет внимание каждому ребёнку 👍
                    </p>
                    <p class = "review_text">
                        В общем ребёнок доволен и видно, как горит “глаз”, когда делится с нами новыми навыками.
                    </p>
                    <p class = "review_date">15 июля 2020</p>
                </div>

            </div>
        </section>
        <section id = "questions">
            <h1 id = "questions_header">Часто задаваемые вопросы</h1>
            <div id = "question_block">
                <div class="spoiler_wrap">
                    <h2 class="spoiler_title">В городах Приморского края кроме Владивостока можно заниматься?
                        <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                    </h2>
                    <div class="spoiler_content">
                        <p>Наши онлайн занятия успешно проводятся в городах:</p>
                        <ul>
                            <li>✓ Уссурийск</li>
                            <li>✓ Находка</li>
                            <li>✓ Артём</li>
                            <li>✓ Арсеньев</li>
                            <li>✓ Спасск-Дальний</li>
                            <li>✓ Большой Камень</li>
                            <li>✓ Партизанск</li>
                            <li>✓ Лесозаводск</li>
                            <li>✓  Дальнегорск</li>
                            <li>✓ Дальнереченск</li>
                            <li>✓ Фокино</li>
                        </ul>
                    </div>
                </div>
                <div class="spoiler_wrap">
                    <h2 class="spoiler_title">Как проходят занятия?
                        <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                    </h2>
                    <div class="spoiler_content">
                        <p>
                            Занятие проходит 1 раз в неделю и длится 90 минут. Времени хватает на изучение теории и воплощение её в своих проектах на компьютере. Обучение состоит из 80 % практики и 20 % теории.
                        </p>
                    </div>
                </div>
                <div class="spoiler_wrap">
                    <div class="spoiler_title">Какое максимальное количество человек в группах?
                        <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                    </div>
                    <div class="spoiler_content">
                        <p>
                            Занятие проходят в группах до 10 человек. Мы не делаем больших групп, чтобы уделить время каждому.
                        </p>
                    </div>
                </div>
                <div class="spoiler_wrap">
                    <h2 class="spoiler_title">Как прийти на бесплатный урок?
                        <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                    </h2>
                    <div class="spoiler_content">
                        <p>
                            Для записи на бесплатный урок вы можете обратиться в мессенджер Whatsapp или отправить заявку на сайте.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id = "maps">
            <h1 id = "maps_header">Как нас найти?</h1>
            <div id = "maps_block">
                <iframe id = "map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae6c3856fbc51c75b5de89c3903a463ac134e740f442840ee248663474c25f8dc&amp;source=constructor" width="666" height="401" frameborder="0"></iframe>
            </div>
        </section>

        <section class = "flex" id = "connection">
            <h1 id = "connection_header">Остались вопросы?</h1>
            <img id = "connection_cat" src = "/images/cat.png" alt = "connection cat">
            <div id = "connection_block" class = "flex">
                <p id = "connection_text">Оставьте свой номер и мы свяжемся с Вами</p>
                <button class="sign_up flex" id = "connection_btn">
                    Оставить заявку
                </button>

            </div>
        </section>
    </main>

    <footer id = "contact">
        <div class="flex" id = "contact_block">
            <div id = "addresses_block">
                <h1 id = "addresses_header">Адреса</h1>
                <ul>
                    <li class="contact_text">Океанский проспект, 83</li>
                    <li class="contact_text">Калинина 11a/2</li>
                    <li class="contact_text">Проспект 100-летия Владивостоку, 155</li>
                    <li class="contact_text">Невельского, 31</li>
                    <li class="contact_text">Каплунова, 6</li>
                    <li class="contact_text">Адмирала Горшкова, 36</li>
                    <li class="contact_text">Казанская, 4</li>
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
                <a class = "contact_a contact_text">office@progamevl.ru</a>
                <a class = "contact_a contact_text" href = "tel:+7 984 195-30-14">+7 984 195-30-14</a>
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
                <h1 id = "date_label">Дата рождения ребёнка</h1>
                <input required id = "date_sign_up" type="date" name ="Date" class = "input_sign_up" placeholder="Дата рождения ребёнка"><br>
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

    <script src = "/js/preloader.js"></script>
    </body>
</html>