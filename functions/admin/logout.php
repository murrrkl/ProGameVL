<?php
    session_start();
    unset($_SESSION["login"]);
    exit("<meta http-equiv='refresh' content='0; url= /functions/login.php'>");
?>