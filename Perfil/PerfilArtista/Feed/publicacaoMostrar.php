<?php
include('../../../Controller/VerificaLogado.php');
require_once '../../../Dao/publicacaoDao.php';
require_once '../../../Dao/Conexao.php';
require_once '../../../Dao/CurtidaDao.php';
require_once '../../../Dao/ComentarioDao.php';
$id = $_GET['id'];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação de @</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/publicacaoMostrar.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">




    <!-- Adicione a seguinte linha ao cabeçalho do seu documento HTML -->


</head>

<body>

    <div style="overflow-x: hidden;" class="d-flex">


        <!-- FAZ COM QUE A SIDEBAR NA WEB FIQUE CORRETA -->
        <div class="area-sidebar">
            <div class="sidebar">
                <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                    <div class="d-flex justify-center align-items-center logos">
                        <img style="display: none;" src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                        <h1 class="logo-tipo">Getto</h1>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                        <ul class="list-group">
                            <a href="#">
                                <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                            </a>

                            <a href="../../PerfilArtista/Evento/eventoArtista.php">
                                <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                            </a>
                            <a href="">
                                <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                            </a>
                            <a href="../Configuracoes/configuracoes.php">
                                <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                            </a>
                            <a target="../Descobrir/descobrir.php" href="../Feed/descobrir.php">
                                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                            </a>
                            <a href="../perfil.php">
                                <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                            </a>
                        </ul>
                    </div>
                    <div class="nova-pub">
                        <button id="nova-pub" class="btn btn-primary btn-nova-pub" data-bs-toggle="modal" data-bs-target="#modalCriarPub" type="button">Nova
                            publicação</button>
                    </div>

                    <div class="sair">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                            <img src="assets/img/sair.png">Sair
                        </a>
                    </div>
                </div>
            </div>
            <div class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
            </div>

        </div>
        <div class="main">
            <div class="publicacao">
                <img class="img-pub" src="../assets/img/seuJorge.jpeg" alt="">
                <div class="conteudo-publicacao">
                    <div class="comentario-body">
                        <div class="header-publicacao">
                            <div class="usuario">
                                <img class="img-perfil" src="../assets/img/seuJorge.jpeg" alt="">

                                <img class="icon-config" src="assets/img/icon-configuracao-publicacao-btn.svg" alt="">
                            </div>
                            <div class="legenda">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Tempore accusantium illo facilis,
                                    consectetur nemo tempora, nulla
                                    incidunt laudantium nobis repellendus
                                    quidem suscipit vero sed obcaecati
                                    sapiente vitae ut ipsum odio?</p>
                            </div>
                            <div class="linha">
                                <hr>
                            </div>
                            <div class="titulo">
                                <h4>
                                    Comentários

                                </h4>
                                <i id="comentariosToggle" class="fa-solid fa-caret-up"></i>
                            </div>

                        </div>
                        <div id="boxComentarios" class="box-comentarios">
                            <div class="comentario">
                                <div class="comentario-informacoes">
                                    <img src="../assets/img/seuJorge.jpeg" alt="">

                                    <p>@gabb</p>
                                </div>
                                <div class="comentario-texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque praesentium beatae quibusdam aspernatur ipsum commodi
                                        natus esse libero similique, quo alias corporis quasi deserunt
                                        modi molestias ad! Voluptate, eum illo.</p>
                                </div>
                            </div>

                            <div class="comentario">
                                <div class="comentario-informacoes">
                                    <img src="../assets/img/seuJorge.jpeg" alt="">

                                    <p>@gabb</p>
                                </div>
                                <div class="comentario-texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque praesentium beatae quibusdam aspernatur ipsum commodi
                                        natus esse libero similique, quo alias corporis quasi deserunt
                                        modi molestias ad! Voluptate, eum illo.</p>
                                </div>
                            </div>

                            <div class="comentario">
                                <div class="comentario-informacoes">
                                    <img src="../assets/img/seuJorge.jpeg" alt="">

                                    <p>@gabb</p>
                                </div>
                                <div class="comentario-texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque praesentium beatae quibusdam aspernatur ipsum commodi
                                        natus esse libero similique, quo alias corporis quasi deserunt
                                        modi molestias ad! Voluptate, eum illo.</p>
                                </div>
                            </div>

                            <div class="comentario">
                                <div class="comentario-informacoes">
                                    <img src="../assets/img/seuJorge.jpeg" alt="">

                                    <p>@gabb</p>
                                </div>
                                <div class="comentario-texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque praesentium beatae quibusdam aspernatur ipsum commodi
                                        natus esse libero similique, quo alias corporis quasi deserunt
                                        modi molestias ad! Voluptate, eum illo.</p>
                                </div>
                            </div>

                            <div class="comentario">
                                <div class="comentario-informacoes">
                                    <img src="../assets/img/seuJorge.jpeg" alt="">

                                    <p>@gabb</p>
                                </div>
                                <div class="comentario-texto">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Atque praesentium beatae quibusdam aspernatur ipsum commodi
                                        natus esse libero similique, quo alias corporis quasi deserunt
                                        modi molestias ad! Voluptate, eum illo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comentario-footer">
                        <div class="input-comentario">
                            <textarea placeholder="Escreva seu comentário..." type="text"></textarea>
                        </div>

                        <div class="acoes-publicacao">
                            <div class="opcoes">
                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                
                                
                            </div>

                            

                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>


    <nav class="mobile-nav">
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="../Feed/descobrir.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="../../PerfilArtista/Evento/eventoArtista.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-calendario.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-notificacao.svg" alt="">
        </a>
        <a href="../perfil.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-amigos.svg" alt="">
        </a>
        <a href="../Configuracoes/configuracoes.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>

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
                    <form name="formExclui" action="../../../Controller/Logout.php" method="POST">
                        <button type="submit" class="btn btn-secondary">Sair</button>
                    </form>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ----------------------------- MODAL CRIAR PUBLICAÇÃO ------------------------------- -->





    <div class="div-logo-marca">
        <div class="logo-marca">
            <img src="assets/img/logomarca.png" alt="">
        </div>

        <div class="notificacoes">
            <i style="font-size: 26px;" class="fa-solid fa-bell"></i>
        </div>
    </div>





    <!-- <script>
        const comentariosToggle = document.getElementById('comentariosToggle');
        const boxComentarios = document.getElementById('boxComentarios');


        comentariosToggle.addEventListener('click', function() {
            if (boxComentarios.style.display === 'none') {

                boxComentarios.style.display = 'block'; // Altere para o valor desejado quando a div deve ser exibida novamente
            } else {


                boxComentarios.style.display = 'none'; // Altere para o valor desejado quando a div deve ser ocultada
            }
        });
    </script> -->



    <script src="../../../jquery.js"></script>


    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->





</body>

</html>