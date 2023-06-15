<?php include('../../Controller/VerificaLogado.php');
require_once 'GlobalPerfil.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/perfilArtistaMobile.css">
    <link rel="stylesheet" href="assets/css/preview-criar-evento.css" />
    <link rel="stylesheet" href="assets/css/modal-criarPub.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
</head>

<body>


    <div class="d-flex">
        <div class="area-sidebar">
            <div class="sidebar">
                <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                    <div class="d-flex justify-center align-items-center logos">
                        <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                        <h1 class="logo-tipo">Getto</h1>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="Feed/feed.php"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></a></li>
                            <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list" type="button">Amigos</button></li>
                            <li class="list-group-item"><a href="Evento/eventoArtista.php"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></a></li>
                            <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                            <li class="list-group-item"><a href="Configuracoes/configuracoes.php"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></a></li>
                            <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                        </ul>
                    </div>
                    <div class="nova-pub">
                        <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button" data-bs-toggle="modal" data-bs-target="#modalCriarPub">Nova
                            publicação</button>
                    </div>
                    <div class="sair">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                            <img src="../PerfilArtista/Feed/assets/img/sair.png">Sair
                        </a>
                    </div>
                </div>
            </div>
            <div class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
            </div>
            <a href="#">
                <div class="d-flex flex-row justify-content-center align-items-center btn-sair">
                    <img src="assets/img/icon-logout.svg" alt="Sair">
                    <h1>Sair</h1>
                </div>
            </a>
        </div>





        <div class="box-container">
            <div class="container-fluid">
                <!-- <div class="div-logo-marca">
                    <div class="logo-marca">
                        <img src="assets/img/logomarca.png" alt="">
                    </div>
                </div> -->
                <div class="area-perfil">
                    <div class="box-perfil">
                        <div class="informacao-perfil">
                            <div class="papel-parede-img-perfil">
                                <?PHP
                                if ($_SESSION['nivel'] == 2) {
                                ?>
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="assets/img/FotoCapa/<?PHP echo  $_SESSION['papel']; ?>" alt="">
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoP']; ?>" alt="">
                                <?PHP
                                } else {
                                ?>
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="../PerfilVisitante/assets/img/FotoCapa/<?PHP echo  $_SESSION['papel']; ?>" alt="">
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" class="img perfil-img" src="../PerfilVisitante/assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoP']; ?>" alt="">
                                <?PHP
                                }
                                ?>
                            </div>
                            <div class="area-bio">
                                <div class="usuario-bio">
                                    <div class="area-nick-nome">
                                        <div class="nick">
                                            <h1> <?PHP echo $_SESSION['nick']; ?></h1>
                                        </div>
                                        <div class="nome">
                                            <h1>(<?PHP echo $_SESSION['nome']; ?>)</h1>
                                        </div>
                                    </div>
                                    <?PHP
                                    if ($_SESSION['nivel'] == 2) {
                                    ?>
                                        <div class="bio">
                                            <p><?PHP echo $_SESSION['bio']; ?></p>
                                        </div>
                                    <?PHP
                                    }
                                    ?>
                                </div>
                                <?PHP
                                if ($_SESSION['nivel'] == 2) {
                                    $conexao = Conexao::conectar();
                                    $consulta = $conexao->prepare('SELECT idSeguidores FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                    $consulta->bindValue(2, $_SESSION['idA']);
                                    $consulta->execute();
                                    $resultado = $consulta->fetch();
                                    if ($resultado == false) {
                                ?>
                                        <form id="formSegui" name="formSegui" action="../../Controller/Seguir.php" method="POST">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $_SESSION['idA']; ?>">
                                            <div class="div-btn-editar-perfil">
                                                <div class="area-doacao">
                                                    <p class="alerta-pix">Sem chave pix cadastrada.</p>

                                                    <button type="button" style="position: relative;" class="btn btn-primary btn-doacao">
                                                        <img src="../PerfilArtista/assets/img/dollar.png" id="icone" alt="" srcset="">
                                                        <p class="slide-in" id="pix-info" style="color: #000;
                                                        position: absolute;
                                                        top: 30%;
                                                        left: -250px;
                                                        font-family: 'InterBold';
                                                        display: none;
                                                        ">A chave pix é <strong>827.374.873-90</strong></p>
                                                    </button>
                                                    <button class="btn btn-primary btn-editar-perfil" value="">
                                                        Seguir
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    <?PHP
                                    } else {
                                    ?>
                                        <form id="formSegui" name="formSegui" action="../../Controller/Deseguir.php" method="POST">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $_SESSION['idA']; ?>">
                                            <div class="div-btn-editar-perfil">
                                                <div class="area-doacao">
                                                    <p class="alerta-pix">Sem chave pix cadastrada</p>

                                                    <button type="button" style="position: relative;" class="btn btn-primary btn-doacao">
                                                        <img src="../PerfilArtista/assets/img/dollar.png" id="icone" alt="" srcset="">
                                                        <p class="slide-in" id="pix-info" style="color: #000;
                                                        position: absolute;
                                                        top: 30%;
                                                        left: -250px;
                                                        font-family: 'InterBold';
                                                        display: none;
                                                        ">A chave pix é <strong>827.374.873-90</strong></p>
                                                    </button>
                                                    <button class="btn btn-primary btn-editar-perfil" value="">
                                                        Deixar de seguir
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                <?php
                                    }
                                }
                                ?>

                            </div>


                            <div class="desc-perfil">
                                <div class="seguindo-seguidores">
                                    <div class="seguindo">
                                        <?PHP

                                        $seguindo = SeguidoresDao::consultarSeguindo($_SESSION['idU']);
                                        ?>
                                        <div class="seguindo-numero">
                                            <p><?PHP
                                                echo $seguindo;
                                                ?></p>
                                        </div>
                                        <div class="seguindo-text">
                                            <h1>Seguindo</h1>
                                        </div>
                                    </div>
                                    <div class="seguidores">


                                        <?PHP
                                        if ($_SESSION['nivel'] == 2) {
                                            $seguimores = SeguidoresDao::consultarSeguidores($_SESSION['idA']);
                                        ?>
                                            <div class="seguidores-numero">
                                                <p><?PHP
                                                    echo $seguimores;
                                                    ?></p>
                                            </div>
                                            <div class="seguidores-text">
                                                <h1>Seguidores</h1>
                                            </div>
                                        <?PHP
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h1 style="font-family: 'InterBold';font-size: 22px;margin-top: 10px;margin-bottom: 15px;">
                            Sua atividade
                        </h1>
                        <div class="btn-mudarExibicao">
                            <button id="btn-exibirPublicacoes" class="btn btn-primary">
                                <img src="assets/img/publicacao.png" alt="">
                            </button>

                            <button id="btn-exibirEventos" class="btn btn-primary">
                                <img src="assets/img/icone-calendario.png" alt="">
                            </button>
                        </div>

                        <div class="atividade">

                            <div id="publicacoes-web" class="col-8 publicacoes">

                                <img src="assets/img/Pubs/1.jpg" alt="">

                                <?php
                                require_once  '../../Dao/publicacaoDao.php';

                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idA']);
                                foreach ($mp as $p) {
                                ?>
                                    <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                <?PHP
                                }
                                ?>


                            </div>



                            <div id="eventos-web" class="col-4 eventos">



                                <div class="img-evento">
                                    <img src="Evento/assets/img/1.jpg" alt="">






                                    <h1>
                                        tituloEvento
                                    </h1>


                                </div>

                            </div>

                            <div id="publicacoes-mobile" class="col-8 publicacoes">



                            </div>



                            <div id="eventos-mobile" style="display: none;" class="col-4 eventos">



                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <nav class="mobile-nav">
        <a href="./Feed/feed.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-calendario.svg" alt="">
        </a>
        <a data-bs-toggle="modal" data-bs-target="#modalCriarPub" href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-notificacao.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-amigos.svg" alt="">
        </a>
        <a href="./Configuracoes/configuracoes.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>




    <!-- ------------------------------ MODAL EDITAR PAPEL DE PAREDE ------------------------------------- -->


    <div class="modal fade" id="modalEditarPapelParede" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ver Capa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="div-img-capa">
                        <img class="img-capa" src="assets/img/FotoCapa/<?PHP echo $_SESSION['papelParedeUsuario']; ?>" alt="">
                    </div>

                    <div class="btn-mudar-capa">
                        <input type="file" name="fotoCapa" id="input-papel-parede-modal" accept="image/*" style="display: none;">

                    </div>

                    <!-- <div class="preview">
                            <img id="preview-img" src="" alt="">
                        </div> -->

                </div>

            </div>
        </div>
    </div>




    <!-- ------------------------------ MODAL EDITAR FOTO DE PERFIL ------------------------------------- -->


    <div class="modal fade" id="modalEditarFotoPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ver foto de perfil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="div-img-usuario">
                        <img class="img-usuario" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                    </div>

                    <div class="btn-mudar-capa">
                        <input type="file" name="fotoPerfil" id="input-perfil-modal" accept="image/*" style="display: none;">

                    </div>

                    <!-- <div class="preview">
                            <img id="preview-img" src="" alt="">
                        </div> -->
                </div>

            </div>
        </div>
    </div>



    <!----------------------------------- MODAL SAIR DA CONTA -------------------------------- -->


    <div class="modal fade" id="modalSairConta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sair da conta</h1>
                    <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Você deseja sair da sua conta?
                </div>
                <div class="modal-footer">
                    <form name="formExclui" action="../../Controller/Logout.php" method="POST">
                        <button type="submit" class="btn btn-secondary">Sair</button>
                    </form>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "100px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script>
        document.getElementById('icone').addEventListener('click', function() {
            var pixInfo = document.getElementById('pix-info');

            // Verifica se o elemento está atualmente visível
            if (pixInfo.style.display === 'block') {
                pixInfo.style.display = 'none'; // Oculta o elemento
                // Modifica informações de estilo CSS
            } else {
                pixInfo.style.display = 'block'; // Exibe o elemento
            }
        });
    </script>
    <script src="assets/js/perfil.js"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/extrator"></script>
    <script src="assets/js/preview.js"></script>
</body>

</html>