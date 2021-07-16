<?php
class Usuario
{
    private $id;
    private $usuario;
    private $nome;
    private $email;
    private $senha;
    private $nivel;
    private $figura;

    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all()
    {
        $sql = $this->con->prepare("SELECT * FROM usuario");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create()
    {
        $sql = $this->con->prepare("INSERT INTO usuario (usuario, nome, email, senha, nivel, figura) VALUES (?,?,?,?,?,?)");
        $sql->execute([$this->getUsuario(), $this->getNome(), $this->getEmail(), sha1($this->getSenha()),
            $this->getNivel(), $_SESSION['nomear']]);

        if ($sql->errorCode() != '00000') {
            echo $sql->errorInfo()[2];
        } else {
            header("Location: indexUsuario.php");
        }
    }

    public function read()
    {
        $sql = $this->con->prepare("SELECT * FROM usuario WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;
    }

    public function update()
    {
        $sql = $this->con->prepare("UPDATE usuario SET usuario=?, nome=?, email=?, senha=?, nivel=? WHERE id=?");
        $sql->execute([$this->getUsuario(), $this->getNome(), $this->getEmail(), $this->getSenha(), $this->getNivel(), $this->getId()]);

        if ($sql->errorCode() != '00000') {
            echo $sql->errorInfo()[2];
        } else {
            header("Location: indexUsuario.php");
        }
    }

    public function delete()
    {
        $sql = $this->con->prepare("DELETE FROM usuario WHERE id=?");
        $sql->execute([$this->getId()]);

        if ($sql->errorCode() != '00000') {
            echo $sql->errorInfo()[2];
        } else {
            header("Location: indexUsuario.php");
        }
    }


    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param mixed $id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param mixed $email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return  mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param mixed $nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getFigura()
    {
        return $this->figura;
    }

    /**
     * @param mixed $figura
     */
    public function setFigura($figura)
    {
        $this->figura = $figura;
    }
}