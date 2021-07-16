<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRIANO CURSO NESSE BAGUIO LOKO AQUI MAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body style="background-color: #990000;">



<form action="" method="post" class="formulario">
    <img src="../img/logo.png" class="logo">
    <h2 id="titulo">Edição de Cursos</h2>

    <div class="col-lg-12">
        <input style="color: black" value="<?=$artigo->titulo?>" type="text" id="titulo" name="titulo" class="form-control campo" required placeholder="Titulo:">
    </div>
    <div class="col-lg-12">
        <textarea id="conteudo" value="<?=$artigo->conteudo?>" name="conteudo" class="form-control campo" required placeholder="Conteudo:"><?=$artigo->conteudo?></textarea>
    </div>
    <div class="col-lg-12">
        <button class="form-control linkbotao" type="submit">Salvar</button>
        <a style="text-align: center" href="indexArtigo.php" class="form-control linkbotao">Cancelar</a>
    </div>
    </div>
</form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>