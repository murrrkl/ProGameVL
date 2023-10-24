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

    echo '<body>
            <header>
                <div class="header">
                    <a class = "menu" href="./account.php">Главная</a>
                    <h3 class = "menu">' . $_SESSION['login'] .", вход выполнен " .  '<a style = "width: 100%; text-align: right; text-decoration: none; " href = "/functions/admin/logout.php">Выйти</a></h3>
                </div>
            </header>
            <section id = "section" style = "display: flex; flex-direction: column;  height: 500px; margin-top: 50px;">
                <form method="POST" enctype="multipart/form-data">
                    <div style="display: flex; align-items: center; flex-direction: column;">
                        <h1>Добавление адреса</h1>
                        <input name="name" type="text" required placeholder="Введите адрес">
                            <button id = "load" name = "upload_btn" type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
            </section>
        </body>';
    ?>
<?php else:
    echo "<h2>Доступ закрыт!</h2>";
    ?>

<?php endif ?>

<?php

if (isset($_POST['upload_btn'])) {
    $name = $_POST['name'];
    
    $sql = $pdo->prepare("INSERT INTO addresses(`address`) VALUES (?);");
    $dbg = $sql->execute([$name]);
    echo "<script>window.location.href='/functions/admin/account.php';</script>";
    
}

?>

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
        font-family: "Evolventa-Regular";
        background-color: #F3FAF9;
    }

    #input_example{
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }

    h1 {
        color: #0D244F;
        margin-bottom: 20px;
    }

    input {
        width: 500px;
        height: 30px;
        font-size: 13px;
        background: white;
        border-radius: 25px;
        border: none;
        padding: 10px 20px;
        margin-bottom: 10px;
    }

    textarea {
        width: 500px;
        height: 300px;
        font-size: 13px;
        background: white;
        border-radius: 25px;
        border: none;
        resize: none;
        outline: none;
        -moz-appearance: none;
        padding: 20px;
        margin-bottom: 10px;
    }

    button {
        width: 500px;
        height: 45px;
        background-color: MediumPurple;
        border: none;
        border-radius: 25px;
        margin-bottom: 10px;
        font-size: 18px;
        font-family: "Evolventa-Regular";
    }


    #load {
        background-color: #0D244F;
        color: white;
        height: 50px;
        margin-top: 10px;
    }

    button:hover {
        box-shadow: 0 15px 20px rgba(59, 0, 105, .4);
        cursor: pointer;
    }

    h3 {
        font-size: 13px;
    }

    @media only screen and (max-width: 640px) {
        h3 {
            font-size: 9px;
        }

        input {
            width: 290px;
            height: 30px;
            font-size: 15px;
        }

        textarea {
            width: 290px;
            height: 220px;
            font-size: 15px;
        }

        button {
            width: 330px;
            height: 50px;
            font-size: 15px;
        }
    }
</style>
