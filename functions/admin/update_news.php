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
        $news_id = $_GET["id"];
        $sql = "SELECT * FROM news WHERE id = :news_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":news_id", $news_id);
        // выполняем выражение и получаем адрес по id
        $stmt->execute();
        if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $news_name = $row["name"];
            $news_header = $row["date"];
            $news_text = $row["text"];
            $news_text = preg_replace('/<br>/i', '', $news_text);
            $news_image = $row["image"]; 
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
                        <input type="hidden" name="id" value="' . $news_id .'"/>
                        <input type="hidden" name="img" value="' . $news_image .'"/>
                        <input name="name" type="text" required placeholder="Введите заголовок" value = ';
                        echo "'";
                        echo  $news_name;
                        echo "'";
                        echo '>';

                        echo '<input name="date" type="text" placeholder="Введите даты или подзаголовок, если есть" ';

                        if ($news_header !== ' ') {
                            echo 'value = ';
                            echo "'";
                            echo  $news_header;
                            echo "'";
                        }
                        echo '>';

                        echo '<textarea name="description" required type="text" placeholder="Введите основной текст">';
                        echo  $news_text;
                        echo '</textarea>';

                        echo '<h3>Изображение: <a href="./images/' . $news_image  .' "> ' . $news_image  . '</a></h3>';

                        
                        

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
        echo "Новость не найдена";
    }
} 
    ?>
<?php else:
    echo "<h2>Доступ закрыт!</h2>";
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
    $news_id = $_POST['id'];
    $name = $_POST['name'];
    $name = ucfirst($name);
    $date = $_POST['date'];
    $img = $_POST['img'];
    $text = $_POST['description'];
    $text = preg_replace('/\n/i','<br>', $text);

    if(!empty($_POST['view'])){
        $view = 1;
    }else{
        $view = 0;
    }

    if (isset($_FILES['example']) & $_FILES['example']['error'] === UPLOAD_ERR_OK) {
        // $uploaddir = './images/shop/';
        // $uploadfile = $uploaddir . basename($_FILES['example']['name']);
        $uploaddir = '/images/';
        //$uploadfile = $uploaddir . basename($_FILES['example']['name']);
        $fileTmpName = $_FILES['example']['tmp_name'];
        // Результат функции запишем в переменную
        $image = getimagesize($fileTmpName);
        // Сгенерируем новое имя файла через функцию getRandomFileName()
        $name_img = getRandomFileName($fileTmpName);
         // Сгенерируем расширение файла на основе типа картинки
        $extension = image_type_to_extension($image[2]);
        // Сократим .jpeg до .jpg
        $format = str_replace('jpeg', 'jpg', $extension);

        echo '<pre>';
        if (!move_uploaded_file($_FILES['example']['tmp_name'], __DIR__ . $uploaddir . $name_img . $format)) {
            echo '<script>alert("Ошибка загрузки!")</script>';
            echo '<script>alert(' . $name_img . $format .')</script>';
        } else {
            // $img = basename($_FILES['example']['name']);
            $img = $name_img . $format;
        }
    }

    $sql = "UPDATE `news` SET name = :name, date = :date, text = :text, image = :image WHERE id = :news_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":news_id", $news_id);
    $stmt->bindValue(":name", $name);
    $stmt->bindValue(":date", $date);
    $stmt->bindValue(":text", $text);
    $stmt->bindValue(":image", $img);
    $stmt->execute();

    echo "<script>window.location.href='/functions/admin/news_review.php';</script>";
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
