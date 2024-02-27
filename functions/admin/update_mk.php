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
        $mk_id = $_GET["id"];
        $sql = "SELECT * FROM mk WHERE id = :mk_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":mk_id", $mk_id);
        // выполняем выражение и получаем адрес по id
        $stmt->execute();
        if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $mk_name = $row["name"];
            $mk_date = $row["date"];
            $mk_age = $row["age"];
            $mk_marker = $row["marker"];
            $mk_text = $row["description"];
            $mk_text = preg_replace('/<br>/i', '', $mk_text);
            $mk_image = $row["image"]; 
        }

        /*
        echo $news_text;
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
                        <h1>Редактирование</h1>
                        <input type="hidden" name="id" value="' . $mk_id .'"/>
                        <input type="hidden" name="img" value="' . $mk_image .'"/>
                        <input name="name" type="text" required placeholder="Введите название мастер-класса" value = ';
                        echo "'";
                        echo  $mk_name;
                        echo "'";
                        echo '>';

                        echo '<input name="date" type="text" required placeholder="Введите даты через запятую" value = ';
                        echo "'";
                        echo  $mk_date;
                        echo "'";
                        echo '>';


                        echo '<textarea name="description" required type="text" placeholder="Введите описание мастер-класса (1-2 предложения)">';
                        echo  $mk_text;
                        echo '</textarea>';

                        echo '
                        <select name="age" class = "select_group">
                         <option ';

                        if ($mk_age == "6-7 лет") {
                            echo'selected="selected" ';
                        }
                         
                        echo 'value="6-7 лет">6-7 лет</option>
                        <option ';

                        if ($mk_age == "8-10 лет") {
                            echo'selected="selected" ';
                        }

                        echo 'value="8-10 лет">8-10 лет</option>
                        <option ';

                        if ($mk_age == "11-13 лет") {
                            echo'selected="selected" ';
                        }

                        echo 'value="11-13 лет">11-13 лет</option>
                         <option ';

                        if ($mk_age == "12-16 лет") {
                            echo'selected="selected" ';
                        }

                        echo 'value="12-16 лет">12-16 лет</option>
                        </select>';

                        echo '<select name="marker" class = "select_group">
                         <option ';

                        if ($mk_marker == "red") {
                            echo'selected="selected" ';
                        }

                         echo 'value="red">Красный</option>
                         <option ';

                        if ($mk_marker == "yellow") {
                            echo'selected="selected" ';
                        }

                         echo 'value="yellow">Жёлтый</option>
                         <option ';

                        if ($mk_marker == "orange") {
                            echo'selected="selected" ';
                        }

                         echo 'value="orange">Оранжевый</option>
                         <option ';

                        if ($mk_marker == "green") {
                            echo'selected="selected" ';
                        }

                         echo 'value="green">Зелёный</option>
                         <option ';

                        if ($mk_marker == "blue") {
                            echo'selected="selected" ';
                        }

                         echo 'value="blue">Голубой</option>
                         <option ';

                        if ($mk_marker == "purple") {
                            echo'selected="selected" ';
                        }

                         echo 'value="purple">Фиолетовый</option>
                         <option ';

                        if ($mk_marker == "pink") {
                            echo'selected="selected" ';
                        }

                         echo 'value="pink">Розовый</option>
                        </select>';

                        echo '<h3>Изображение: <a href="./images/mk/' . $mk_image  .' "> ' . $mk_image  . '</a></h3>';
              

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
        echo "Мастер-класс не найден";
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
    $mk_id = $_POST['id'];
    $img = $_POST['img'];
    $name = $_POST['name'];
    $name = ucfirst($name);
    $date = $_POST['date'];

    $text = $_POST['description'];
    $text = preg_replace('/\n/i','<br>', $text);

    $age = $_POST['age'];
    $marker = $_POST['marker'];


    if (isset($_FILES['example']) & $_FILES['example']['error'] === UPLOAD_ERR_OK) {
        $uploaddir = '/images/mk/';

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

    $sql = "UPDATE `mk` SET name = :name, description = :text, date = :date, marker = :marker, age = :age, image = :image WHERE id = :mk_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mk_id", $mk_id);
    $stmt->bindValue(":name", $name);
    $stmt->bindValue(":text", $text);
    $stmt->bindValue(":date", $date);
    $stmt->bindValue(":marker", $marker);
    $stmt->bindValue(":age", $age);
    $stmt->bindValue(":image", $img);
    $stmt->execute();

    echo "<script>window.location.href='/functions/admin/mk_review.php';</script>";
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

    button:hover {
        box-shadow: 0 15px 20px rgba(59, 0, 105, .4);
        cursor: pointer;
    }

    h3 {
        font-size: 13px;
    }

    .select_group {
        width: 500px;
        height: 30px;
        font-size: 13px;
        background: white;
        border-radius: 25px;
        border: none;
        padding: 10px 20px;
        margin-bottom: 10px;
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
