<?php
include('../../../Controller/VerificaLogado.php');
require_once '../../../Dao/publicacaoDao.php';
require_once '../../../Dao/Conexao.php';
require_once '../../../Dao/CurtidaDao.php';
require_once '../../../Dao/ComentarioDao.php';
require_once '../../../Dao/ArtistaDao.php';
require_once '../../../Dao/SeguidoresDao.php';
require_once '../../../Dao/TipoDenunciaDao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denúncia</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/denunciaComentario.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container-fluid main">
        <div class="container">


            <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-bottom: 5px;">
                Este é o comentário que você quer denunciar?
            </h1>
            <div class="box-comentario ">
                <?PHP
                if ($_POST['nivelConta'] == 2) {
                ?>
                    <img src="../assets/img/FotoPerfil/<?PHP echo $_POST['fotoPerfil']; ?>" alt="">
                <?PHP
                } else {
                ?>
                    <img src="../../PerfilVisitante/assets/img/FotoPerfil/<?PHP echo $_POST['fotoPerfil']; ?>" alt="">
                <?PHP
                }
                ?>
                <div class="conteudo-comentario">
                    <h1><?PHP echo $_POST['nickname']; ?></h1>
                    <p><?PHP echo $_POST['comentario']; ?></p>

                </div>
            </div>

            <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-bottom: 5px;">
                Selecione o que mais se assemelha com sua denúncia!
            </h1>
            <form action="../../../Controller/CadastraDenuncia.php" method="Post">

                <select name="tipoDenuncia" id="">
                    <option value="#">Selecionar...</option>
                    <?php
                    $td = TipoDenunciaDao::ListaTipoDenuncia();

                    foreach($td as $dt){
                    ?>
                    <option value="<?PHP echo $dt['idTipoDenuncia']; ?>"><?PHP echo $dt['nomeTipoDenuncia']; ?></option>
                    <?php
                    }
                    ?>
                </select>

                <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-top: 5px;">
                    Abaixo faça uma breve descrição sobre sua denúncia!
                </h1>

                <div id="divComentario" class="comentario slide-in">

                    <div class="box-text-area">

                        <textarea placeholder="Escreva sua denúncia" name="desc" id="" cols="30" rows="10">

                        </textarea>
                        <input type="hidden" name="comentario" value="<?php echo $_POST['comentario']; ?>">
                        <input type="hidden" name="nickname" value="<?php echo $_POST['nickname']; ?>">
                        <input type="hidden" name="idDenunciado" value="<?php echo $_POST['idDenunciado']; ?>">
                        <input type="hidden" name="idDenunciador" value="<?php echo $_POST['idDenunciador']; ?>">
                        <div class="box-btn-comentario">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                            </button>
                        </div>

                    </div>





                </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>