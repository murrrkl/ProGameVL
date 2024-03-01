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
        // если запрос GET
        if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
        $intensive_id = $_GET["id"];
        $sql = "SELECT * FROM intensive WHERE id = :intensive_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":intensive_id", $intensive_id);
        // выполняем выражение и получаем адрес по id
        $stmt->execute();
        if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $i_name = $row["name"];
            $i_name = str_replace(array("<br>"), PHP_EOL, $i_name);
            $i_age = $row["age"];
            $i_date = $row["date"];
            $i_text = $row["description"];
            $i_text = str_replace(array("<br>"), PHP_EOL, $i_text);
            $i_day_1 = $row["day1"];
            $i_day_2 = $row["day2"];
            $i_day_3 = $row["day3"];
            $i_day_4 = $row["day4"];
            $i_day_5 = $row["day5"];
            $i_image = $row["image"];

            $i_offline = $row["offline"];
            $i_online = $row["online"];
        }


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
                        <h1>Редактирование</h1>
                        <input type="hidden" name="id" value="' . $intensive_id .'"/>
                        <input type="hidden" name="img" value="' . $i_image .'"/>';

                        echo '<textarea id = "i_name" name="name" required type="text" placeholder="Введите название интенсива">' . $i_name .'</textarea>';

                        echo '<input name="age" type="text" required placeholder="Введите возрастную категорию" value = ';
                        echo "'";
                        echo  $i_age;
                        echo "'";
                        echo '>

                        <input name="date" type="text" required placeholder="Введите даты через запятую" value = ';
                        echo "'";
                        echo  $i_date;
                        echo "'";
                        echo '>

                        <input name="day1" type="text" required placeholder="Введите тему 1-ого дня" value = ';
                        echo "'";
                        echo  $i_day_1;
                        echo "'";
                        echo '>

                        <input name="day2" type="text" required placeholder="Введите тему 2-ого дня" value = ';
                        echo "'";
                        echo  $i_day_2;
                        echo "'";
                        echo '>

                        <input name="day3" type="text" required placeholder="Введите тему 3-eго дня" value = ';
                        echo "'";
                        echo  $i_day_3;
                        echo "'";
                        echo '>

                        <input name="day4" type="text" required placeholder="Введите тему 4-ого дня" value = ';
                        echo "'";
                        echo  $i_day_4;
                        echo "'";
                        echo '>

                        <input name="day5" type="text" required placeholder="Введите тему 5-ого дня" value = ';
                        echo "'";
                        echo  $i_day_5;
                        echo "'";
                        echo '>

                        <textarea name="description" required type="text" placeholder="Введите описание интенсива (1-2 предложения)">' . $i_text .'</textarea>';

                        
                        echo '<h3>Изображение: <a href="./images/intensive/' . $i_image  .' "> ' . $i_image  . '</a></h3>';

                        if ($i_offline == 1) {
                            echo '<label>
                                    <input type="checkbox" checked name ="offline"> Очно
                                </label>';
                        } else {
                                echo '<label>
                                        <input type="checkbox" name ="offline"> Очно
                                    </label>';
                        }

                        if ($i_online == 1) {
                            echo '<label>
                                    <input type="checkbox" checked name ="online"> Онлайн
                                </label>';
                        } else {
                                echo '<label>
                                        <input type="checkbox" name ="online"> Онлайн
                                </label>';
                        }

            
            echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <input id = "input_example" type="file"  name="example">
                            <button id="input_button_example" ' . 'onclick="document.getElementById('. " 'input_example').click() " . '  " type="button">Выберите новое фото</button>
                            <button id = "load" name = "upload_btn" type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
            </section>
        </body>';
    }
    else{
        echo "Интенсив не найден";
    }
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
    $i_id = $_POST['id'];
    $name = $_POST['name'];
    $name = ucfirst($name);
    $name = str_replace("\n",'<br>', $name);
    $name = str_replace("\r",'', $name);
    $age = $_POST['age'];
    $date = $_POST['date'];

    $day_1 = $_POST['day1'];
    $day_2 = $_POST['day2'];
    $day_3 = $_POST['day3'];
    $day_4 = $_POST['day4'];
    $day_5 = $_POST['day5'];

    $i_text = $_POST['description'];
    $i_text = str_replace("\n", '<br>', $i_text);
    $i_text = str_replace("\r", '', $i_text);

    $img = $_POST['img'];

    if (!empty($_POST['offline'])) {
        $i_offline = 1;
    } else {
        $i_offline = 0;
    }

    if (!empty($_POST['online'])) {
        $i_online = 1;
    } else {
        $i_online = 0;
    }

    if (isset($_FILES['example']) & $_FILES['example']['error'] === UPLOAD_ERR_OK) {
        $uploaddir = '/images/intensive/';
        $fileTmpName = $_FILES['example']['tmp_name'];
        $image = getimagesize($fileTmpName);
        $name_img = getRandomFileName($fileTmpName);
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['example']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            $img = $name_img . $format;
        }
    }

    $sql = "UPDATE `intensive` SET name = :name, age = :age, date = :date, description = :text, day1 = :day1, day2 = :day2, day3 = :day3, day4 = :day4, day5 = :day5, image = :image, offline = :offline, online = :online  WHERE id = :i_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":i_id", $i_id);
    $stmt->bindValue(":name", $name);
    $stmt->bindValue(":age", $age);
    $stmt->bindValue(":date", $date);

    $stmt->bindValue(":day1", $day_1);
    $stmt->bindValue(":day2", $day_2);
    $stmt->bindValue(":day3", $day_3);
    $stmt->bindValue(":day4", $day_4);
    $stmt->bindValue(":day5", $day_5);

    $stmt->bindValue(":text", $i_text);
    $stmt->bindValue(":image", $img);
    $stmt->bindValue(":offline", $i_offline);
    $stmt->bindValue(":online", $i_online);
    $stmt->execute();

    echo "<script>window.location.href='/functions/admin/intensive_review.php';</script>";
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
        height: 150px;
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

    #i_name {
        width: 500px;
        height: 35px;
        border-radius: 15px;
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

    document.getElementById('input_example').addEventListener('change', function(){
        let input_button = document.getElementById("input_button_example");
        let input_button_text = input_button.innerText;

        if( this.value ){
            input_button.innerText = "Файл выбран";
        } else {
            input_button.innerText = input_button_text;
        }
    });

</script>
