<?php require_once 'connect.php';?>
<?php session_start();?>

<?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = $pdo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
    $sql->execute(array('login' => $login, 'password'=> $password));
    $array = $sql->fetch(PDO::FETCH_ASSOC);

    if ($array["id"] > 0) {
        $_SESSION['login'] = $array["login"];
        exit("<meta http-equiv='refresh' content='0; url= /functions/admin/account.php'>");
    } else {
        exit("<meta http-equiv='refresh' content='0; url= /functions/login.php'>");
    }


?>