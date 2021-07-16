<?php
session_start();

require_once "CRUD/inc/config.php";

$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("SELECT * FROM USUARIO WHERE email = ? AND senha = ?");
$sql->execute([$_POST['email'], SHA1($_POST['senha'])]);

$usuario = $sql->fetchObject();


if( $usuario ){

    $_SESSION['usuario'] = $usuario;
    header("Location: CRUD");
}

else{

    $_SESSION['msg'] = "Usuário não encontrado";
    header("Location: login.php");
}