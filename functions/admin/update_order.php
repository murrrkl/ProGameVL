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
        $order_id = $_GET["id"];
        $sql = "SELECT * FROM orders WHERE id = :order_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":order_id", $order_id);
        // выполняем выражение и получаем адрес по id
        $stmt->execute();
        if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $name = $row["name"];
            $o_text = $row["order_text"];
            $o_text = str_replace(array("<br>"), PHP_EOL, $o_text);
            $comment = $row["comment"];

            $sum = $row["sum"];
            $address = $row["address"];
            $status = $row["status"];
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
                        <input type="hidden" name="id" value="' . $order_id .'"/>';

                        echo '<input name="name" required type="text" placeholder="Введите фамилию и имя ученика" value = ';
                        echo "'";
                        echo  $name;
                        echo "'";
                        echo '>';

                        echo '<select name="address" class = "select_group">';
                            echo '<option ';

                                if ($address == "Чуркин") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Чуркин">Чуркин</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Ивановская") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Ивановская">Ивановская</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Эгершельд") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Эгершельд">Эгершельд</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Луговая") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Луговая">Луговая</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Заря") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Заря">Заря</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Снеговая падь") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Снеговая падь">Снеговая падь</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Первая речка") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Первая речка">Первая речка</option>
                            <option ';

                            echo '<option ';

                                if ($address == "Онлайн") {
                                    echo'selected="selected" ';
                                }
                             
                                echo 'value="Онлайн">Онлайн</option>
                            <option ';

                            
                        echo '</select>';


                        echo '<textarea name="order_text" required type="text" placeholder="Введите текст заказа в формате: артикул_наименование (количество)">' . $o_text .'</textarea>';

                        echo '<input name="comment" type="text" placeholder="Введите комментарий к заказу" value = ';
                        echo "'";
                        echo  $comment;
                        echo "'";
                        echo '>';

                        echo '<input name="sum" required type="number" placeholder="Введите стоимость заказа" value = ';
                        echo "'";
                        echo  $sum;
                        echo "'";
                        echo '>';                 

                        if ($status == 1) {
                            echo '<label>
                                    <input type="checkbox" checked name ="status"> Выдан
                                </label>';
                        } else {
                                echo '<label>
                                    <input type="checkbox" name ="status"> Выдан
                                </label>';
                        }

            
            echo '<div style="display: flex; flex-wrap: wrap; width: 500px; flex-direction: column; align-items: center; margin-top: 10px;">
                            <button id = "load" name = "upload_btn" type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
            </section>
        </body>';
    }
    else{
        echo "Заказ не найден";
    }
} 
    ?>
<?php else:
    echo "<script>window.location.href='/functions/login.php';</script>";
    ?>

<?php endif ?>

<?php

    if (isset($_POST['upload_btn'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $order_text = $_POST['order_text'];
        $order_text = str_replace("\n", '<br>', $order_text);
        $order_text = str_replace("\r", '', $order_text);

        $comment = $_POST['comment'];
        $address = $_POST['address'];
        $sum = $_POST['sum'];

        if (!empty($_POST['status'])) {
            $status = 1;
        } else {
            $status = 0;
        }
  

        $sql = "UPDATE `orders` SET name = :name, order_text = :order_text, comment = :comment, sum = :sum, status = :status, address = :address  WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":order_text", $order_text);
        $stmt->bindValue(":comment", $comment);
        $stmt->bindValue(":sum", $sum);
        $stmt->bindValue(":status", $status);
        $stmt->bindValue(":address", $address);

        $stmt->execute();

        // echo $name . " ". $order_text . " ". $comment . " ". $address . " ". $sum . " ". $id . " ". $status;

        if ($address == "Луговая") {
            echo "<script>window.location.href='/functions/admin/lugovaya.php';</script>";
        } else if ($address == "Чуркин") {
            echo "<script>window.location.href='/functions/admin/churkin.php';</script>";
        } else if ($address == "Ивановская") {
            echo "<script>window.location.href='/functions/admin/ivanovskaya.php';</script>";
        } else if ($address == "Заря") {
            echo "<script>window.location.href='/functions/admin/zarya.php';</script>";
        } else if ($address == "Снеговая падь") {
            echo "<script>window.location.href='/functions/admin/snegovaya.php';</script>";
        } else if ($address == "Первая речка") {
            echo "<script>window.location.href='/functions/admin/pervaya.php';</script>";
        } else if ($address == "Эгершельд") {
            echo "<script>window.location.href='/functions/admin/egersheld.php';</script>";
        } else if ($address == "Онлайн") {
            echo "<script>window.location.href='/functions/admin/online.php';</script>";
        }       
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
