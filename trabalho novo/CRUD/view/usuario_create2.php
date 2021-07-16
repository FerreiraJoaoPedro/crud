<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRIANO USUARIO NESSE BAGUIO LOKO AQUI MAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/stylelogin.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>
<body style="background-color: #990000;">



<form href="indexUsuario.php/?acao=create" method="post" enctype="multipart/form-data" id="formTeste"class="formulario">
    <img src="../../img/logo.png" class="logo">
    <h2 id="titulo">Criação de Usuários</h2>
    <div class="row">

        <div class="col-lg-12">
            <input type="text" id="usuario" name="usuario" class="form-control campo" required placeholder="Usuario:">
        </div>

        <div class="col-lg-6">
            <input type="text" id="nome" name="nome" class="form-control campo" required placeholder="Nome:">
        </div>

        <div class="col-lg-6">
            <input type="email" id="email" name="email" class="form-control campo" required placeholder="Email:">
        </div>

        <div class="col-lg-6">
            <input type="password" id="senha" name="senha" class="form-control campo" required placeholder="Senha:">
        </div>

        <div class="col-lg-6" style="margin-top: 5px;">
            <select class="form-control" name="nivel" id="nivel" required>
                <option value="">Nivel</option>
                <option value="Professor">Professor</option>
                <option value="Aluno">Aluno</option>
            </select>
        </div>

        <div class="col-lg-12">
            <form method="post" enctype="multipart/form-data" id="formTeste">
                <input type="file" name="inputArquivo">
                <button type="submit"  class="form-control linkbotao" id="btnEnviar">Enviar</button>
            </form>
            <a style="text-align: center;" href="../indexUsuario.php" class="form-control linkbotao">Cancelar</a>
        </div>
    </div>
</form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>