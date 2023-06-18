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
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
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
                    <p>Olá, <?php echo ($_SESSION['nomeAdministrador']) ?> </p>

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
                    foreach($ld as $dl){
                    ?>
                    <div class="denuncia">
                        <div class="img-denuncia">
                            <img src="assets/img/img-denuncia.svg" alt="">
                        </div>
                        <div class="textos-denuncia">
                            <div class="titulo-denuncia">
                                <h1>TIPO DE DENÚNCIA: <?php echo $dl['nomeTipoDenuncia'] ?></h1>
                            </div>
                            <div class="desc-denuncia">

                                <p><?php echo $dl['descDenuncia'] ?></p>

                            </div>
                        </div>
                        <div class="box-btn-denuncia">
                            <button data-bs-toggle="modal" data-bs-target="#analiseDenuncia" class="btn-denuncia">
                                Analisar
                            </button>
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
   

    <div class="modal fade" id="analiseDenuncia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered justify-content-center modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Denúncia feita por Gabriel</h1>
                                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body-img">
                                                <img src="../Perfil/PerfilArtista/assets/img/FotoPerfil/8.jpg">
                                            </div>
                                            <div class="modal-body-info">
                                                <div class="modal-body-link">
                                                    <div class="link-titulo">
                                                        <p>Nickname</p>
                                                    </div>
                                                    <div class="link">
                                                        <p><?php echo $usuario['nicknameUsuario']; ?></p>
                                                    </div>
                                                </div>

                                                <div class="modal-body-link">
                                                    <div class="link-titulo">
                                                        <p>Nome:</p>
                                                    </div>
                                                    <div class="link">
                                                        <p><?PHP echo $usuario['nomeUsuario']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="modal-body-link">
                                                    <div class="link-titulo">
                                                        <p>Link repositório:</p>
                                                    </div>
                                                    <div class="link">
                                                        <a href="<?php echo $usuario['portfolio']; ?>"><?php echo $usuario['portfolio']; ?></a>
                                                    </div>
                                                </div>
                                                <div class="modal-body-link">
                                                    <div class="link-titulo">
                                                        <p>Email:</p>
                                                    </div>
                                                    <div class="link">
                                                        <p><?php echo $usuario['emailUsuario']; ?></p>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="formAprovar" name="btnaprova" id="btnAprovar" action="../Controller/AprovaArtista.php" method="post">
                                                <input type="hidden" name="usuario_id" value="<?php echo $usuario['idUsuario']; ?>">
                                                <input type="hidden" name="usuario_email" value="<?php echo $usuario['emailUsuario']; ?>">
                                                <input type="hidden" name="usuario_indice" value="<?php echo $chave; ?>">
                                                <button id="btn-aprovar" type="submit" data-bs-dismiss="modal" name="btnAprovar" class="btn btn-secondary">Aprovar</button>
                                            </form>

                                            <form class="formRecusar" id="formRecusar" method="post" action="../Controller/AprovaArtista.php">
                                                <input type="hidden" name="usuario_email" value="<?php echo $usuario['emailUsuario']; ?>">
                                                <input type="hidden" name="usuario_id" value="<?php echo $usuario['idUsuario']; ?>">
                                                <button id="btnRecusar" type="submit" data-bs-dismiss="modal" name="btnRecusar" class="btnRecusar btn btn-primary">Recusar</button>

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
</body>

</html>