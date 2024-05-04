<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Личный кабинет</title>
</head>

<?php require_once 'connect.php';?>
<?php session_start();?>


<?php if (!empty($_SESSION["login"])) :?>

<?php

    echo '
        <body>
            <header>
                <div class="header">
                    <a class = "menu" href="./account.php">Главная</a>
                    <h3 class = "menu">' . $_SESSION['login'] .", вход выполнен " .  '<a style = "width: 100%; text-align: right; text-decoration: none; " href = "/functions/admin/logout.php">Выйти</a></h3>
                </div>
            </header>
            <main style = "display: flex; flex-direction: column;  min-height: 100vh; align-items: center; margin-top: 50px; margin-bottom: 50px;">
                <h1 style = "color: #0D244F; width: 100%; text-align: center; font-size: 25px; margin-bottom: 15px;">Выберите филиал:</h1>
                <a class="btn" href="./churkin.php">
                    Чуркин
                </a>
                <a class="btn" href="./ivanovskaya.php">
                    Ивановская
                </a>
                <a class="btn" href="./egersheld.php">
                    Эгершельд
                </a>
                <a class="btn" href="./lugovaya.php">
                    Луговая
                </a>
                <a class="btn" href="./zarya.php">
                    Заря
                </a>
                <a class="btn" href="./snegovaya.php">
                    Снеговая падь
                </a>
                <a class="btn" href="./pervaya.php">
                    Первая речка
                </a>
                <a class="btn" href="./online.php">
                    Онлайн
                </a>
                
            
            </main>
        </body>';
?>
<?php else:
    echo "<script>window.location.href='/functions/login.php';</script>";
?>

<?php endif ?>

<style>
    * {

        margin: 0;
        padding:0;
    }

    @font-face {
        font-family: "Evolventa-Regular";
        src: url(./fonts/Evolventa-Regular.otf);
    }

    .header{
        background-color:rgba(255, 255, 255, 0.7);
        display: flex;
        justify-content: space-between;
        padding: 1.3em 1em; /* поля вокруг текста */
    }

    h3 {
        font-size: 9px;
    }

    .menu {
        text-transform: uppercase;
        padding: 0.5em 1em;
        color: gray;
        text-decoration: none;
        transition: 0.3s;
        letter-spacing: 2px;
    }
    .menu:hover {
        color: purple;
        cursor: pointer;
    }

    body {
        background-color: Lavender;
        background-color: #F3FAF9;
        font-family: "Evolventa-Regular";
    }

    .btn {
        width: 300px;
        height: 50px;
        background-color: #0D244F;
        justify-content: center;
        align-items: center;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
        line-height: 45px;
        border-radius: 45px;
        margin-bottom: 20px;
        padding:5px 32px;
        text-align: center;
        letter-spacing: 2px;
        font-size: 18px;
        color: white;
        font-family: "Evolventa-Regular";
    }

    .btn:hover {
        box-shadow: 0 15px 20px rgba(0, 17, 105, 0.4);
    }

</style>