<?php
require_once "restricao.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>É A LISTAGEM DOS CARA NESSE BAGUIO DOIDO AQ MEMO MAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/stylelogin.css">
</head>

<body style="background-color: #990000">
<div class="alinhar">
    <h2>Usuários</h2></div>
<div class="container">


            <span style="float:right">
                <a href="?acao=create" class="btn linkbotao">Cadastrar novo usuário</a>
            </span>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Classificação</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php $i=1; foreach($usuarios AS $usuario){ ?>
            <tr>
                <td><?=$i++?></td>
                <td><img style="width: 50px; height: 50px; border-radius: 50px" src="../img/<?=$usuario->figura?>">
                    <?=$usuario->usuario?></td>
                <td><?=$usuario->nome?></td>
                <td><?=$usuario->email?></td>
                <td><?=$usuario->nivel?></td>

                <td class="celulabotoes">
                    <div class="divtd">
                        <a style="text-align: center" href="?acao=update&id=<?=$usuario->id?>" class="form-control botaoeditar">Editar</a>
                        <!--Button to Open the Modal -->
                        <button
                                type="button"
                                class="  btn-excluir form-control botaoeditar"
                                data-toggle="modal"
                                data-target="#myModal"
                                data-id="<?=$usuario->id?>"
                        >
                            Excluir
                        </button>

                    </div>

            </tr>
        <?php } ?>

        </tbody>
    </table>

</div>
<div class="alinhar">
    <a class="btn linkbotao" href="index.php">Voltar</a>
</div>

</body>


</html>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Exclusão</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Tem certeza que deseja excluir o registro?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a id="modal-btn-excluir" href="" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>

        </div>
    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $("#modal-btn-excluir").attr('href', 'indexUsuario.php?acao=delete&id='+id);
    });
</script>