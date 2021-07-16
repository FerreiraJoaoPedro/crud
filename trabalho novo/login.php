<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CADASTRO DE USUÁRIOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
<form class="formulario" action="autenticacao.php" method="post">
    <img class="logo" src="img/logo.png">
    <h2 class="text-center">Faça o Login</h2>
    <div class="col-lg-12">
        <input type="email" id="email" name="email" class="form-control campo" required placeholder="Email:">
        <input type="password" id="senha" name="senha" class="form-control campo" required placeholder="Senha:">
        <button type="submit" class="btn form-control campo" name="Logar">Logar</button>
        <a href="CRUD/indexUsuario.php?acao=create" class="btn form-control campo">Registre-se</a>
    </div>
</form>
</body>
</html>