<?php
class ArtigoController{


    public function all(){
        $obj = new Artigo();
        $artigos = $obj->all();
        include 'view/artigo_all.php';
    }

    public function create(){
        $obj = new Artigo();

        if( isset($_POST['titulo']) && isset($_POST['conteudo'])){
            $obj->setTitulo($_POST['titulo']);
            $obj->setConteudo($_POST['conteudo']);
            $obj->setUsuarioid($_SESSION['usuario']->id);
            $obj->create();
        }

        include 'view/artigo_create.php';
    }

    public function read()
    {

    }

    public function e_autor()
    {
        if (!isset($_GET['id'])) {
            echo "Id não informado";
            exit;
        }
    }

    public function update(){
        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Artigo();

        $obj->setId($_GET['id']);

        if( isset($_POST['titulo']) && isset($_POST['conteudo']) ){
            $obj->setTitulo($_POST['titulo']);
            $obj->setConteudo($_POST['conteudo']);
            $obj->update();
        }

        $artigo = $obj->read();

        include 'view/artigo_update.php';
    }

    public function delete(){

        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Artigo();
        $obj->setId($_GET['id']);
        $obj->delete();


    }


}