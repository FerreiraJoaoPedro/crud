<?php
require_once "inc/config.php";
require_once "controller/ArtigoController.php";
require_once "model/Artigo.php";
$app = new ArtigoController();

if ( isset($_GET['acao']) ) {
    if ($_GET['acao'] == 'create') {
        $app->create();
    } else if ($_GET['acao'] == 'update') {
        $app->update();
    } else if ($_GET['acao'] == 'delete') {
        $app->delete();
    }

}else {
        $app->all();
        $app->e_autor();
}