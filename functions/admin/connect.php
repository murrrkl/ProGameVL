<?php
    $user = "root";
    $pass = "";
    $db = "n43849_new";

    try {
        // подключаемся к серверу
        $pdo = new PDO("mysql:host=localhost; charset=utf8; dbname=$db", $user, $pass);
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>