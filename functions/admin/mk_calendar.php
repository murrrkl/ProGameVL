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
        
        $mk_id = 1;
        $sql = "SELECT * FROM calendar WHERE id = :mk_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":mk_id", $mk_id);
        // выполняем выражение и получаем адрес по id
        $stmt->execute();

        if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
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
        /*
        echo $news_header;
        echo $news_name;
        echo $news_image;*/



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
                        <h1>Редактирование календарей</h1>

                        <input type="hidden" name="id" value="' . $mk_id .'"/>
                        <input type="hidden" name="june_1" value="' . $june_1 .'"/>
                        <input type="hidden" name="june_2" value="' . $june_2 .'"/>
                        <input type="hidden" name="june_3" value="' . $june_3 .'"/>
                        <input type="hidden" name="june_4" value="' . $june_4 .'"/>
                        <input type="hidden" name="july_1" value="' . $july_1 .'"/>
                        <input type="hidden" name="july_2" value="' . $july_2 .'"/>
                        <input type="hidden" name="july_3" value="' . $july_3 .'"/>
                        <input type="hidden" name="july_4" value="' . $july_4 .'"/>
                        <input type="hidden" name="august_1" value="' . $august_1 .'"/>
                        <input type="hidden" name="august_2" value="' . $august_2 .'"/>
                        <input type="hidden" name="august_3" value="' . $august_3 .'"/>
                        <input type="hidden" name="august_4" value="' . $august_4 .'"/>';

                        echo '<h2>6-7 лет</h2>';
                        echo '<h3>Июнь: <a href="./images/mk/' . $june_1  .' "> ' . $june_1  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_june_1" type="file"  name="e_june_1">
                            <button id="input_button_example1" ' . 'onclick="document.getElementById('. " 'input_june_1').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Июль: <a href="./images/mk/' . $july_1  .' "> ' . $july_1  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_july_1" type="file"  name="e_july_1">
                            <button id="input_button_example5" ' . 'onclick="document.getElementById('. " 'input_july_1').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Август: <a href="./images/mk/' . $august_1  .' "> ' . $august_1 . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_august_1" type="file"  name="e_august_1">
                            <button id="input_button_example9" ' . 'onclick="document.getElementById('. " 'input_august_1').click() " . '  " type="button">Выберите новый календарь</button>';
                       

                        echo '<h2>8-10 лет</h2>';
                        echo '<h3>Июнь: <a href="./images/mk/' . $june_2  .' "> ' . $june_2  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_june_2" type="file"  name="e_june_2">
                            <button id="input_button_example2" ' . 'onclick="document.getElementById('. " 'input_june_2').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Июль: <a href="./images/mk/' . $july_2  .' "> ' . $july_2  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_july_2" type="file"  name="e_july_2">
                            <button id="input_button_example6" ' . 'onclick="document.getElementById('. " 'input_july_2').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Август: <a href="./images/mk/' . $august_2  .' "> ' . $august_2 . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_august_2" type="file"  name="e_august_2">
                            <button id="input_button_example10" ' . 'onclick="document.getElementById('. " 'input_august_2').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h2>11-13 лет</h2>';
                        echo '<h3>Июнь: <a href="./images/mk/' . $june_3  .' "> ' . $june_3  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_june_3" type="file"  name="e_june_3">
                            <button id="input_button_example3" ' . 'onclick="document.getElementById('. " 'input_june_3').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Июль: <a href="./images/mk/' . $july_3  .' "> ' . $july_3  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_july_3" type="file"  name="e_july_3">
                            <button id="input_button_example7" ' . 'onclick="document.getElementById('. " 'input_july_3').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Август: <a href="./images/mk/' . $august_3  .' "> ' . $august_3 . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_august_3" type="file"  name="e_august_3">
                            <button id="input_button_example11" ' . 'onclick="document.getElementById('. " 'input_august_3').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h2>12-16 лет</h2>';
                        echo '<h3>Июнь: <a href="./images/mk/' . $june_4  .' "> ' . $june_4  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_june_4" type="file"  name="e_june_4">
                            <button id="input_button_example4" ' . 'onclick="document.getElementById('. " 'input_june_4').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Июль: <a href="./images/mk/' . $july_4  .' "> ' . $july_4  . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_july_4" type="file"  name="e_july_4">
                            <button id="input_button_example8" ' . 'onclick="document.getElementById('. " 'input_july_4').click() " . '  " type="button">Выберите новый календарь</button>';

                        echo '<h3>Август: <a href="./images/mk/' . $august_4  .' "> ' . $august_4 . '</a></h3>';
                        echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input class = "calendar" id = "input_august_4" type="file"  name="e_august_4">
                            <button id="input_button_example12" ' . 'onclick="document.getElementById('. " 'input_august_4').click() " . '  " type="button">Выберите новый календарь</button>';

                         echo ' <button id = "load" name = "upload_btn" type="submit">Сохранить</button>
                            </div>
                    </div>
                </form>
            </section>
        </body>';
    }
    else{
        echo "не найдено";
    }
    ?>
<?php else:
    echo "<script>window.location.href='/functions/login.php';</script>";
    ?>

<?php endif ?>

<?php

function getRandomFileName($path)
{
  $path = $path ? $path . '/' : '';
  do {
      $name = md5(microtime() . rand(0, 999));
      $file = $path . $name;
  } while (file_exists($file));

  return $name;
}

if (isset($_POST['upload_btn'])) {
    $mk_id = $_POST['id'];

    $june_1 = $_POST['june_1'];
    $june_2 = $_POST['june_2'];
    $june_3 = $_POST['june_3'];
    $june_4 = $_POST['june_4'];

    $july_1 = $_POST['july_1'];
    $july_2 = $_POST['july_2'];
    $july_3 = $_POST['july_3'];
    $july_4 = $_POST['july_4'];

    $august_1 = $_POST['august_1'];
    $august_2 = $_POST['august_2'];
    $august_3 = $_POST['august_3'];
    $august_4 = $_POST['august_4'];

    $uploaddir = '/images/calendar/';

    if (isset($_FILES['e_june_1']) & $_FILES['e_june_1']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_june_1']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_june_1']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $june_1 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_june_2']) & $_FILES['e_june_2']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_june_2']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_june_2']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $june_2 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_june_3']) & $_FILES['e_june_3']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_june_3']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_june_3']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $june_3 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_june_4']) & $_FILES['e_june_4']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_june_4']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_june_4']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $june_4 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_july_4']) & $_FILES['e_july_4']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_july_4']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_july_4']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $july_4 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_july_3']) & $_FILES['e_july_3']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_july_3']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_july_3']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $july_3 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_july_2']) & $_FILES['e_july_2']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_july_2']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_july_2']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $july_2 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_july_1']) & $_FILES['e_july_1']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_july_1']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_july_1']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $july_1 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_august_4']) & $_FILES['e_august_4']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_august_4']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_august_4']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $august_4 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_august_3']) & $_FILES['e_august_3']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_august_3']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_august_3']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $august_3 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_august_2']) & $_FILES['e_august_2']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_august_2']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_august_2']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $august_2 = $name_img . $format;
        }
    }

    if (isset($_FILES['e_august_1']) & $_FILES['e_august_1']['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['e_august_1']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['e_august_1']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $august_1 = $name_img . $format;
        }
    }

    $sql = "UPDATE `calendar` SET june_1 = :june_1, july_1 = :july_1, august_1 = :august_1, june_2 = :june_2, july_2 = :july_2, august_2 = :august_2, june_3 = :june_3, july_3 = :july_3, august_3 = :august_3, june_4 = :june_4, july_4 = :july_4, august_4 = :august_4 WHERE id = :mk_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mk_id", $mk_id);
    $stmt->bindValue(":june_1", $june_1);
    $stmt->bindValue(":july_1", $july_1);
    $stmt->bindValue(":august_1", $august_1);

    $stmt->bindValue(":june_2", $june_2);
    $stmt->bindValue(":july_2", $july_2);
    $stmt->bindValue(":august_2", $august_2);

    $stmt->bindValue(":june_3", $june_3);
    $stmt->bindValue(":july_3", $july_3);
    $stmt->bindValue(":august_3", $august_3);

    $stmt->bindValue(":june_4", $june_4);
    $stmt->bindValue(":july_4", $july_4);
    $stmt->bindValue(":august_4", $august_4);
    $stmt->execute();

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

    .calendar {
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }

    h1, h2 {
        color: #0D244F;
        margin-bottom: 20px;
    }

    input[type='checkbox'] {
        margin-top: 10px;
        width: auto;
        height: auto;
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

<script>

    document.getElementById('input_june_1').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example1");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

     document.getElementById('input_june_2').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example2");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_june_3').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example3");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_june_4').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example4");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });


    document.getElementById('input_july_1').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example5");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_july_2').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example6");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });


    document.getElementById('input_july_3').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example7");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_july_4').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example8");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_august_1').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example9");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_august_2').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example10");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_august_3').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example11");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

    document.getElementById('input_august_4').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example12");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

</script>
