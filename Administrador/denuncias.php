<?PHP include('../Controller/VerificaLogadoAdm.php');
require_once 'GlobalAdm.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="assets/img/logomarca.svg" type="imagem">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/modalDenuncia.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main>

        <div class="box-sidebar">
            <div class="sidebar">
                <div class="logotipo-e-logomarca">
                    <div class="logomarca">
                        <img src="assets/img/logomarca.svg" alt="">
                    </div>
                    <div class="logotipo">
                        <h1>Getto</h1>
                    </div>
                </div>
                <div class="navegacao-sidebar">
                    <ul>
                        <li class="item-sidebar">
                            <a href="dashboard.php" id="dash">Dashboard</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="#" id="denuncia">Denúncias</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="verifica.php" id="verificacao">Verificação de artistas</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="addTags.php" id="tutorial">Tags</a>
                        </li>


                    </ul>
                </div>
                <div class="sair">
                    <a href="../Controller/LogoutAdm.php" class="btn-sair" id="sair">
                        Logout
                    </a>
                </div>
            </div>

        </div>
        <div class="box-dashboard">
            <div class="header-adm">
                <div class="texto-adm">
                    <p >Olá, <?php echo ($_SESSION['nomeAdministrador']) ?> </p>

                </div>
                <div class="notificacao-perfil">
                    <div class="notificacao">
                        <img src="assets/img/notification.svg" alt="">
                    </div>
                    <div class="img-perfil">
                        <img src="assets/img/background.png" id="perfil-adm">
                    </div>
                </div>
            </div>
            <!--BOX DA DENúNCIA COMEÇA AQUI-->
            <div class="box-denuncia-verificacao">


                <div class="box-denuncias">
                    <div class="titulo-container-denuncia">
                        <h1>
                            Denúncias recentes
                        </h1>
                    </div>


                    <?PHP
                    $ld = DenunciaDao::ListaDenuncia();
                    foreach ($ld as $dl) {
                    ?>
                        <div class="denuncia">
                            <div class="img-denuncia">
                                <img src="assets/img/img-denuncia.svg" alt="">
                            </div>
                            <div class="textos-denuncia">
                                <div class="titulo-denuncia">
                                    <h1>TIPO DE DENÚNCIA: <?php echo $dl['nomeTipoDenuncia'] ?></h1>
                                </div>
                                
                            </div>
                            <div class="box-btn-denuncia">
                                <button data-bs-toggle="modal" data-bs-target="#analiseDenuncia<?php echo $dl['idDenuncia'] ?>" class="btn-denuncia">
                                    Analisar
                                </button>
                            </div>
                        </div>

                        <?php
                        $denunciado = DenunciaUsuarioDao::ListaDenunciado($dl['idDenuncia']);
                        $denunciador = DenunciaUsuarioDao::ListaDenunciador($dl['idDenuncia']);
                        ?>

                        <div class="modal fade" id="analiseDenuncia<?php echo $dl['idDenuncia'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered justify-content-center modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Denúncia feita por <?php echo $denunciador[0]['nomeUsuario'] ?>'</h1>
                                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="denunciado">

                                            <div class="informacoes-denunciado">
                                                <h1 style="font-family: 'InterBold';"><?php echo $denunciado[0]['nomeUsuario'] ?> está sendo denunciado por:</h1>
                                                <div class="comentario">
                                                    <div class="box-comentario">


                                                   
                                                        <?PHP
                                                        if ($denunciado[0]['nivelContaUsuario'] == 2) {
                                                        ?>
                                                            <img src="../Perfil/PerfilArtista/assets/img/FotoPerfil/<?php echo $denunciado[0]['fotoPerfilUsuario']; ?>" alt="">
                                                        <?PHP
                                                        } else {
                                                        ?>
                                                            <img src="../Perfil/PerfilVisitante/assets/img/FotoPerfil/<?php echo $denunciado[0]['fotoPerfilUsuario']; ?>" alt="">
                                                        <?PHP
                                                        }
                                                        ?>

                                                        <div class="conteudo-comentario">
                                                            <h1><?php echo $denunciado[0]['nicknameUsuario'] ?></h1>
                                                            <p><?php echo $denunciado[0]['nomeUsuario'] ?></p>




                                                        </div>

                                                    </div>
                                                </div>
                                                <h2 style="font-family: 'InterBold';
                        margin: 0;">Classificação da denúncia</h2>
                                                <div class="classificacaoDenuncia">
                                                    <h3 style="color: red; font-family: 'InterBold';"><?php echo $dl['nomeTipoDenuncia'] ?></h3>
                                                </div>

                                                <h2 style="font-family: InterBold;">Data da denúncia</h2>
                                                <div class="box-dataDenuncia">
                                                    <h3><?php echo $dl['dataFormatada'] ?></h3>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="denunciante">
                                            <div class="informacoes-denuncia">
                                                <h1 style="font-family: 'InterBold';">
                                                    Descrição da denúncia
                                                </h1>
                                                <div class="box-descDenuncia">
                                                    <h3 style="font-family: 'InterBold';"><?php echo $dl['descDenuncia'] ?></h3>
                                                </div>

                                            </div>
                                            <div class="informacoes-denunciante">
                                                <h2>Foi denunciado por:</h2>
                                                <div class="box-denunciante">
                                                    <div class="box-comentario">


                                                    <?PHP
                                                        if ($denunciador[0]['nivelContaUsuario'] == 2) {
                                                        ?>
                                                            <img src="../Perfil/PerfilArtista/assets/img/FotoPerfil/<?php echo $denunciador[0]['fotoPerfilUsuario']; ?>" alt="">
                                                        <?PHP
                                                        } else {
                                                        ?>
                                                            <img src="../Perfil/PerfilVisitante/assets/img/FotoPerfil/<?php echo $denunciador[0]['fotoPerfilUsuario']; ?>" alt="">
                                                        <?PHP
                                                        }
                                                        ?>

                                                        <div class="conteudo-comentario">
                                                            <h1><?php echo $denunciador[0]['nicknameUsuario'] ?></h1>
                                                            <p><?php echo $denunciador[0]['nomeUsuario'] ?></p>




                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form name="ignora" id="ignora" method="post" action="../Controller/IgnorarDenuncia.php">
                                            <input type="hidden" name="idDenuncia" value="<?php echo $dl['idDenuncia']; ?>">
                                            <button id="btn-aprovar" type="submit" data-bs-dismiss="modal" name="#" class="btn btn-secondary">Ignorar denúncia</button>
                                        </form>
                                        <form class="formAprovar" name="btnaprova" id="btnAprovar" action="#" method="post">

                                            
                                        <button id="btnRecusar" type="submit" data-bs-dismiss="modal" name="#" class="btnRecusar btn btn-primary">Remover comentário</button>
                                        </form>

                                        <form class="formRecusar" id="formRecusar" method="post" action="#">

                                            <button id="btnRecusar" type="submit" data-bs-dismiss="modal" name="#" class="btnRecusar btn btn-primary">Remover comentário</button>

                                        </form>

                                        <!-- <form class="formRecusar" id="formRecusar" style="display: none;" method="post" action="../Controller/AprovaArtista.php">
                                                                    <input type="hidden" name="usuario_email" value="<?php echo $usuario['emailUsuario']; ?>">
                                                                    <input type="hidden" name="usuario_id" value="<?php echo $usuario['idUsuario']; ?>">
                                                                    <textarea name="motivoRecusa" id="" cols="30" rows="10"></textarea>
                                                                    <button id="btnRecusar" type="submit" class="btn btn-primary">Enviar</button>
                                                                </form> -->


                                    </div>

                                </div>
                            </div>
                        </div>


                    <?php
                    }
                    ?>


                    


                </div>
                <!--BOX DA VERIFICAÇÃO COMEÇA AQUI-->

            </div>



        </div>


    </main>


   

    <!-- ----------------------- ALERTA QUANDO APROVAR UM ARTISTA ---------------------- -->



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnRecusarList = document.querySelectorAll('.btnRecusar');

            btnRecusarList.forEach(function(btnRecusar) {
                btnRecusar.addEventListener('click', function() {
                    const formRecusar = btnRecusar.nextElementSibling;
                    const formAprovar = btnRecusar.parentElement.querySelector('.formAprovar');

                    formAprovar.style.display = 'none';
                    btnRecusar.style.display = 'none';
                    formRecusar.style.display = 'block';
                });
            });
        });
    </script>

    <script src="../jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>





    <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

        }

        // Seleciona o botão "Aprovar" pelo id
        var btnAprovar = document.getElementById("btn-aprovar");
        var divAlert = document.getElementById("alert");

        // Adiciona um evento de clique ao botão
        btnAprovar.addEventListener("click", function() {
            // Cria um elemento "div" para o alerta
            divAlert.style.display = 'flex';
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>
</body>

</html>