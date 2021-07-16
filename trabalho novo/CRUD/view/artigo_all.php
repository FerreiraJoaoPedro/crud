<!DOCTYPE html>
<html lang="en">

<head>
    <title>É A LISTAGEM DAS AULA NESSE BAGUIO DOIDO AQ MEMO MAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/stylelogin.css">
</head>

<body style="background-color: #990000;">
<div class="alinhar">
    <h2>Artigos</h2></div>
<div class="container">


            <span style="float:right">
                <a href="?acao=create" class="btn linkbotao">Cadastrar nova aula</a>
            </span>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Conteúdo</th>
            <th>Data da Postagem</th>
            <th>Comente algo</th>

            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php $i=1; foreach($artigos AS $artigo){ ?>
            <tr>
                <td><?=$artigo->id?></td>
                <td><img style="width: 50px; height: 50px; border-radius: 50px" src="../img/<?=$artigo->autor?>"></td>
                <td style="width: 20%;"><?=$artigo->titulo?></td>
                <td style="width: 50%"><p style="font-size: 10px"><?=$artigo->conteudo?>
                        <td><?=$artigo->data_postagem?></td>

                <td><div class="divtd">
                        <img style="width: 25px; height: 25px; margin: 5px; border-radius: 50px;"  src="../img/<?=$_SESSION['usuario']->figura?>">
                        <form action="indexArtigo.php?acao=comentar&artigoId=<?=$artigo->id?>" method="post">
                            <textarea name="mensagem_envio"></textarea>
                            <button class="form-control linkbotao">Enviar comentário</button>
                    </div>
                    </form></td>

                    </form>
                </td>



                <td class="celulabotoes">
                    <div class="divtd">

                        <?php
                        if($artigo->e_autor == 0) {
                        $formatação = "hidden";
                        }
                        else{
                            $formatação = "visible";
                        }


                        ?>
                        <a style="visibility: <?=$formatação?>" href="?acao=update&id=<?=$artigo->id?>" class="btn form-control botaoeditar">Editar</a>
                        <button
                                type="button"
                                style="visibility: <?=$formatação?>"
                                class="  btn-excluir form-control botaoeditar"
                                data-toggle="modal"
                                data-target="#myModal"
                                data-id="<?=$artigo->id?>"
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
                <button style="visibility: <?=$formatação?>" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Tem certeza que deseja excluir o registro?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a style="visibility: <?=$formatação?>" id="modal-btn-excluir" href="" class="btn btn-primary">Sim</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>

        </div>
    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $("#modal-btn-excluir").attr('href', 'indexArtigo.php?acao=delete&id='+id);
    });
</script>>