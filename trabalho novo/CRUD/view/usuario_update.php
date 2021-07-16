<!DOCTYPE html>
<html lang="en">

<head>
    <title>EDIÇÃO DE USUARIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body style="background-color: #990000">



<form action="" method="post" class="formulario">
    <img src="../img/logo.png" class="logo">
    <h2 id="titulo">Criação de Usuários</h2>
    <div class="row">

        <div class="col-lg-12">
            <input type="text" id="usuario" name="usuario" class="form-control campo" required placeholder="Usuario:" value="<?=$usuario->usuario?>"/>
        </div>

        <div class="col-lg-6">
            <input type="text" id="nome" name="nome" class="form-control campo" required placeholder="Nome:" value="<?=$usuario->nome?>"/>
        </div>

        <div class="col-lg-6">
            <input type="email" id="email" name="email" class="form-control campo" required placeholder="Email:" value="<?=$usuario->email?>"/>
        </div>

        <div class="col-lg-6">
            <input type="password" id="senha" name="senha" class="form-control campo" required placeholder="Senha:" value="<?=$usuario->senha?>"/>
        </div>

        <div class="col-lg-6" style="margin-top: 5px;">
            <select class="form-control" id="nivel"required name="nivel">
                <option value="<?=$usuario->nivel?>"></option>
                <option value="Professor">Professor</option>
                <option value="Aluno">Aluno</option>
            </select>
        </div>

        <div class="col-lg-12">
            <button class="form-control linkbotao" type="submit">Salvar</button>
            <a style="text-align: center"href="indexUsuario.php" class="form-control linkbotao">Cancelar</a>
        </div>
    </div>
</form>
</body>
</html>