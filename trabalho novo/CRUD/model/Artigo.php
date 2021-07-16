<?php
class Artigo{

    private $id;
    private $titulo;
    private $conteudo;
    private $usuarioid;
    private $data_postagem;

    private $mensagem;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){
        $sql = $this->con->prepare("SELECT artigo.*, date_format(artigo.data_postagem, '%d/%m/%Y') as data_postagem, 
        usuario.figura as autor, if(? = artigo.usuario_id,1,0) as e_autor from artigo join usuario on usuario.id=artigo.usuario_id;");
        $sql->execute([$_SESSION['usuario']->id]);
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
        $sql = $this->con->prepare("INSERT INTO artigo (titulo, conteudo, data_postagem, usuario_id) VALUES (?,?,CURRENT_DATE,?)");
        $sql->execute([$this->getTitulo(), $this->getConteudo(), $_SESSION['usuario']->id]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
            header("Location: indexArtigo.php");
        }
    }

    public function e_autor(){
        $sql = $this->con->prepare("");
        $sql->execute($_SESSION['usuario']->id);
        $row = $sql->fetchObject();
        return $row;
    }

    public function read(){
        $sql = $this->con->prepare("SELECT * FROM artigo WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;
    }

    public function update(){
        $sql = $this->con->prepare("UPDATE artigo SET titulo=?, conteudo=? WHERE id=?");
        $sql->execute([$this->getTitulo(), $this->getConteudo(), $this->getId()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
            header("Location: indexArtigo.php");
        }
    }

    public function delete(){
        $sql = $this->con->prepare("DELETE FROM artigo WHERE id=?");
        $sql->execute([$this->getId()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
            header("Location: indexArtigo.php");
        }
    }



    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param   mixed  $titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * @param mixed $conteudo
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;
    }

    /**
     * @return mixed
     */
    public function getDataPostagem()
    {
        return $this->data_postagem;
    }

    /**
     * @param mixed $data_postagem
     */
    public function setDataPostagem($data_postagem)
    {
        $this->data_postagem = $data_postagem;
    }

    /**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }
}