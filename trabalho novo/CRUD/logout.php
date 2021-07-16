<?php
session_start();

unset($_SESSION['usuario']);

$_SESSION['msg'] = "Você efetuou logout";
header("Location: ../login.php");
?>