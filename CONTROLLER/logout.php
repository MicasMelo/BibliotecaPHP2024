<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header("location:/gestaophp/CONTROLLER/index.php");
?>