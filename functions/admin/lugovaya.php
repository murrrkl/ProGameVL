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
            </header>';
    ?>
<?php else:
    echo "<h2>Доступ закрыт!</h2>";
    ?>

<?php endif ?>

<?php
    $stmt = $pdo->prepare('SELECT * FROM `orders` WHERE address = :address AND status = :status ORDER BY `orders`.`id` ASC');
    $stmt->execute(['address' => 'Луговая', 'status' => 0]);
    $res = $stmt->fetchAll();

    echo '<h1 style = "color: #0D244F; width: 100%; text-align: center; font-size: 25px; margin-top: 30px; margin-bottom: 10px;">Актуальные заказы:</h1>';

    echo "<div style='display: flex; justify-content: center;'> <div style=' text-align: left; background-color: white; width: auto; margin-top: 40px; border-radius: 30px; '><table id = 'database'><tr><th class = 'order_num'> № </th><th class = 'name'> Ученик </th><th class = 'order_text'> Заказ </th> <th class = 'order_text'> Комментарий </th><th class = 'name'> Стоимость </th><th class='btn_th'></th><th class='btn_th'></th></tr>";
    foreach($res as $row){
        echo "<tr>";
        echo "<td class = 'order_num'>" . $row["id"] . "</td>";
        echo "<td class = 'name'>" . $row["name"] . "</td>";
        echo "<td class = 'order_text'>" . $row["order_text"] . "</td>";
        echo "<td class = 'order_text'>" . $row["comment"] . "</td>";
        echo "<td class = 'name' style = 'text-align: center;'>" . $row["sum"] . "</td>";
        echo "<td><a class = 'update' href='update_product.php?id=" . $row["id"] . "'><button class = 'btn'>Редактировать</button></a></td>";
        echo "<td><form action='./product_review.php' method='post'>
                            <input type='hidden' name='id' value='" . $row["id"] . "' />
                            <input type='submit' class='btn delete' value='Удалить'>
                        </form></td>";
        echo "</tr>";
    }
    echo "</table> </div> </div>";
    echo '<h1 style = "color: #0D244F; width: 100%; text-align: center; font-size: 25px; margin-top: 30px; margin-bottom: 10px;">Выданные заказы:</h1>';
    $stmt = $pdo->prepare('SELECT * FROM `orders` WHERE address = :address AND status = :status ORDER BY `orders`.`id` ASC');
    $stmt->execute(['address' => 'Луговая', 'status' => 1]);
    $res = $stmt->fetchAll();
    echo "<div style='display: flex; justify-content: center;'> <div style=' text-align: left; background-color: white; width: auto; margin-top: 40px; border-radius: 30px; '><table id = 'database'><tr><th class = 'order_num'> № </th><th class = 'name'> Ученик </th><th class = 'order_text'> Заказ </th> <th class = 'order_text'> Комментарий </th><th class = 'name'> Стоимость </th><th class='btn_th'></th><th class='btn_th'></th></tr>";
    foreach($res as $row){
        echo "<tr>";
        echo "<td class = 'order_num'>" . $row["id"] . "</td>";
        echo "<td class = 'name'>" . $row["name"] . "</td>";
        echo "<td class = 'order_text'>" . $row["order_text"] . "</td>";
        echo "<td class = 'order_text'>" . $row["comment"] . "</td>";
        echo "<td class = 'name' style = 'text-align: center;'>" . $row["sum"] . "</td>";
        echo "<td><a class = 'update' href='update_product.php?id=" . $row["id"] . "'><button class = 'btn'>Редактировать</button></a></td>";
        echo "<td><form action='./product_review.php' method='post'>
                            <input type='hidden' name='id' value='" . $row["id"] . "' />
                            <input type='submit' class='btn delete' value='Удалить'>
                        </form></td>";
        echo "</tr>";
    }
    echo "</table> </div> </div>";
     



    echo "</body>";


    if(isset($_POST["id"])) {
        $sql = "DELETE FROM shop WHERE id = :userid";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":userid", $_POST["id"]);
        $stmt->execute();
        echo "<script>window.location.href='/functions/admin/product_review.php';</script>";
    }

?>

<style>
    * {
        box-sizing: border-box;
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
        font-size: 13px;
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
        background-color: #F3FAF9;
        font-family: "Evolventa-Regular";
    }

    .update {
        font-size: 12px;
        color:  black;
        text-decoration: none;
    }

    .btn {
        margin-left: 20px;
        width: 150px;
        height: 40px;
        background-color: #cfd6fd;
        justify-content: center;
        align-items: center;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
        border-radius: 45px;
        padding:5px 2px;
        text-align: center;
        letter-spacing: 2px;
        border: none;
        color: black;
    }

    .btn_th {
        width: 150px;
    }

    .delete {
        background-color: Salmon;
    }

    td {
        padding-top: 30px;
        padding-right: 15px;
    }

    .order_num {
        width: 50px;
    }

    .name {
        width: 120px;
    }

    .order_text {
        width: 300px;
    }


    .btn:hover {
        box-shadow: 0 15px 20px rgba(59, 0, 105, .4);
        cursor: pointer;
    }

    .delete:hover {
        box-shadow: 0 15px 20px rgba(159, 0, 10, .4);
        cursor: pointer;
    }

    #database {
        padding: 30px;
        margin: auto;
        text-align: left;
    }

    .description {
        width: 400px;
        height: 200px;

    }

    .more_link {
        font-size: calc(var(--index) * 0.7);
        font-weight: 400;
        color: #0D244F;
    }

    .more_link:hover {
        cursor: pointer;
    }

    .more_content span{
        display: none;
    }

    @media only screen and (max-width: 640px) {
        h3 {
            font-size: 9px;
        }

        .btn {
            margin-left: 10px;
            width: 90px;
            height: 30px;
        }

        #database {
            padding: 10px;
        }

        th {
            font-size: 10px;
        }

        .name {
            width: 40px;
            font-size: 10px;
        }

        .description {
            width: 50px;
            height: 300px;
            font-size: 10px;
        }
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $(document).ready(function() {
        // 250 characters are shown by default
        var showChar = 180;
        var dots = "... ";
        var moreText = "Показать";
        var lessText = "Скрыть";

        $('.description').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var cont = content.substr(0, showChar);
                var restOfTheText = content.substr(showChar, content.length - showChar);

                var html = cont + '<span class="dots">' + dots + '</span><span class="more_content"><span>' + restOfTheText + '</span><a href="" class="more_link">' + moreText + '</a></span>';

                $(this).html(html);
            }

        });
        $(".more_link").click(function() {
            if($(this).hasClass("test")) {
                $(this).removeClass("test");
                $(this).html(moreText);
            } else {
                $(this).addClass("test");
                $(this).html(lessText);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>
