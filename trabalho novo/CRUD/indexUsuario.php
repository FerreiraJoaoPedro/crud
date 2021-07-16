<?php


require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/Usuario.php";

$app = new UsuarioController();


if (isset($_FILES['inputArquivo'])) {
    $arquivo = $_FILES['inputArquivo']['tmp_name'];
    $local = '../img/';
    $formato = strtolower(substr($_FILES['inputArquivo']['name'], -4));
    if(!empty($_FILES['inputArquivo'])){
        $nomear = $_POST['email']. $formato;
        move_uploaded_file($arquivo, $local . $nomear);
        $_SESSION['nomear'] = $nomear;
    }

}

if ( isset($_GET['acao']) ){
    if( $_GET['acao']=='create' ){
        $app->create();


        if (isset($_POST['figura'])):

            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $extensao = pathinfo($_FILES['figura']['name'], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatosPermitidos)):

                $pasta = "../img";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if (move_uploaded_file($temporario, $pasta . $novoNome)):
                endif;
            endif;

        endif;
    }else if ( $_GET['acao']=='update' ){
        $app->update();
    }else if ( $_GET['acao']=='delete'){
        $app->delete();
    }

}else{
    $app->all();
}