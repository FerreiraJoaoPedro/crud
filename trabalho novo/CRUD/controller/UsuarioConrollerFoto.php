<?php
class UsuarioController{


    public function all(){
        $obj = new Usuario();
        $usuarios = $obj->all();

        include 'view/usuario_all.php';
    }

    public function create(){
        $obj = new Usuario();

        if(isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['nivel']) && isset($_POST['senha'])){
            $obj->setUsuario($_POST['usuario']);
            $obj->setNome($_POST['nome']);
            $obj->setEmail($_POST['email']);
            $obj->setNivel($_POST['nivel']);
            $obj->setSenha($_POST['senha']);
            $obj->setFigura($figura);
            $obj->create();
        }

        include 'view/usuario_create.php';
        include 'inc/upload.php';
    }

    public function read(){

    }

    public function update(){
        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Usuario();

        $obj->setId($_GET['id']);

        if( isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){

            $obj->setUsuario($_POST['usuario']);
            $obj->setNome($_POST['nome']);
            $obj->setEmail($_POST['email']);
            $obj->setSenha($_POST['senha']);
            $obj->setNivel($_POST['nivel']);
            $obj->update();
        }

        $usuario = $obj->read();

        include 'view/usuario_update.php';
    }

    public function delete(){

        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Usuario();
        $obj->setId($_GET['id']);
        $obj->delete();

    }


}