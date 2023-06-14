<?php include('../../../Controller/VerificaLogado.php');
require_once '../../../Dao/publicacaoDao.php';
require_once '../../../Dao/ArtistaDao.php';
require_once '../../../Dao/Conexao.php';
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getto</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/descobrir.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">




    <!-- Adicione a seguinte linha ao cabeçalho do seu documento HTML -->


</head>

<body>



    <div class="d-flex">
        <!-- FAZ COM QUE A SIDEBAR NA WEB FIQUE CORRETA -->
        <div class="area-sidebar">
            <div class="sidebar">
                <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                    <div class="d-flex justify-center align-items-center logos">
                        <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                        <h1 class="logo-tipo">Getto</h1>
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                        <ul class="list-group">
                            <a href="../Feed/feed.php">
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

                    <!-- ---------------------------- BOTAO PERFIL E SAIR ---------------------------- -->

                    <!-- <div class="dropup-center dropup">
                        <div class="btn-perfil-sair" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-perfil-btn">
                                <a href="../perfil.php"><img src="../assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt=""></a>
                            </div>
                            <div class="desc-btn">
                                <div class="btn-perfilNomes">
                                    <div class="nome-usuario">
                                        <h1><?PHP echo $_SESSION['nomeUsuario']; ?></h1>
                                    </div>
                                    <div class="nickname">
                                        <h3><?PHP echo $_SESSION['nicknameUsuario']; ?></h3>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="button">
                                    <img src="../assets/img/btn-dropdown.svg" alt="">
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="../perfil.php">
                                            <div class="d-flex flex-row align-items-center btn-sair">
                                                <i class="fas fa-user"></i>
                                                <h1>Perfil</h1>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex flex-row  align-items-center btn-sair">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <h1>Sair</h1>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
            </div>

        </div>
        <div style="position: relative;" class="box-container">
            <div style="z-index: 101;" class="area-buscar">
                <form name="FormBusca" id="FormBusca" method="Post" action="../../../Controller/busca.php">
                    <input type="search" id="search" name="busca" placeholder="Pesquisar...">
                    <button class="btn-descobrir" type="submit"><img src="assets/img/search.png"></i></button>

                </form>




                <?php
                if ($_SESSION['go'] == true && isset($_SESSION['quantLinhas'])) {
                    $html = '';
                    for ($i = 0; $i < $_SESSION['quantLinhas']; $i++) {
                        $html .= '<form action="../perfilMostrar.php?$_SESSION" method="POST">';
                        $html .= '<li>';
                        if ($_SESSION['nivel'] == 2) {
                            $html .= '<img src="../assets/img/FotoPerfil/' . $_SESSION['fotoP'] . '" alt="Imagem de perfil">';
                        } else {
                            $html .= '<img src="../../PerfilVisitante/assets/img/FotoPerfil/' . $_SESSION['fotoP'] . '" alt="Imagem de perfil">';
                        }

                        $html .= '<button type="submit">' . $_SESSION['nick'] . '</button>';
                        $html .= '</li>';
                        $html .= '</form>';
                    }
                    echo '<ul id="results">' . $html . '</ul>';
                } else {
                    echo '<ul id="results"><li>Nenhum resultado encontrado</li></ul>';
                }
                ?>

            </div>
            <div class="container-fluid">
                <div class="main-publicacao">
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                      
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                      
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                      
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                      
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                      
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
                    </div>

                    
                    <div class="publicacao">
                        <img src="../assets/img/seuJorge.jpeg" alt="">
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

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comentarioModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->

    <div class="modal-comentario">


        <div class="modal fade" id="comentarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Publicação de @gabbs</h1>



                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="box-input-search">
                        <input class="busca-comentario" type="search" placeholder="Busque um comentário">

                    </div>
                    <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass icon-search"></i></button> -->

                        <div class="box-comentario">
                            <img src="assets/img/img-perfil.svg" alt="">
                            <div class="conteudo-comentario">
                                <h1>@gabbs</h1>
                                <p>uctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non tellus auctor, consequat mi eu, pulvinar ipsum. Quisque vel ipsum eros. Nam consequat vestibulum ligula, sed iaculis quam. Sed nec ante velit. Nullam eget massa sit amet erat pharetra euismod sed id elit. Praesent a fringilla mauris. Fusce ut odio et elit laoreet fermentum. Nulla vel est ligula. Nam eget enim euismod, semper leo ac, congue justo. Maecenas nec nibh a arcu efficitur facilisis a ac lectus.</p>
                                <div class="box-btn-denuncia">
                                    <button data-bs-toggle="modal" data-bs-target="#denunciaModal" id="myBtn" type="button"><i class="fa-solid fa-flag" style="color: #ef220b;"></i></button>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <div id="divComentario" class="comentario slide-in">

                            <div class="box-text-area">
                                <form action="#">
                                    <textarea placeholder="Deixe seu comentário" name="comentario" id="" cols="30" rows="10">

                            </textarea>
                                    <div class="box-btn-comentario">
                                        <button class="btn btn-primary">
                                            <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>





                        </div>
                        <!-- <div id="divDenuncia" style="display: none;" class="comentario slide-in">
                        <div class="box-text-area">
                            <form action="#">
                                <textarea placeholder="Qual motivo da sua denúncia?" name="" id="" cols="30" rows="10">

                            </textarea>
                                <div class="box-btn-comentario">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-paper-plane fa-lg" style="color: #ef220b;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> -->


                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="denunciaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Você está denunciando @gabbs</h1>



                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-bottom: 5px;">
                        Este é o comentário que você quer denunciar?
                    </h1>
                    <div class="box-comentario ">
                        <img src="assets/img/img-perfil.svg" alt="">
                        <div class="conteudo-comentario">
                            <h1>@gabbs</h1>
                            <p>uctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non tellus auctor, consequat mi eu, pulvinar ipsum. Quisque vel ipsum eros. Nam consequat vestibulum ligula, sed iaculis quam. Sed nec ante velit. Nullam eget massa sit amet erat pharetra euismod sed id elit. Praesent a fringilla mauris. Fusce ut odio et elit laoreet fermentum. Nulla vel est ligula. Nam eget enim euismod, semper leo ac, congue justo. Maecenas nec nibh a arcu efficitur facilisis a ac lectus.</p>

                        </div>
                    </div>

                    <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-bottom: 5px;">
                        Selecione o que mais se assemelha com sua denúncia!
                    </h1>

                    <select name="tipoDenuncia" id="">
                        <option value="#">Violência</option>
                        <option value="#">Assédio</option>
                        <option value="#">Preconceito</option>
                        <option value="#">Discurso de ódio</option>
                        <option value="#">Mensagem falsa</option>

                    </select>

                    <h1 style="font-family: 'InterBold';
                        font-size: 18px;
                        margin-top: 5px;">
                        Abaixo faça uma breve descrição sobre sua denúncia!
                    </h1>





                </div>
                <div class="modal-footer">
                    <div id="divComentario" class="comentario slide-in">

                        <div class="box-text-area">
                            <form action="#">
                                <textarea placeholder="Escreva sua denúncia" name="comentario" id="" cols="30" rows="10">

                            </textarea>
                                <div class="box-btn-comentario">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>





                    </div>
                    <!-- <div id="divDenuncia" style="display: none;" class="comentario slide-in">
                        <div class="box-text-area">
                            <form action="#">
                                <textarea placeholder="Qual motivo da sua denúncia?" name="" id="" cols="30" rows="10">

                            </textarea>
                                <div class="box-btn-comentario">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-paper-plane fa-lg" style="color: #ef220b;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
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
                    <form name="formExclui" action="../../../Controller/Logout.php" method="POST">
                        <button type="submit" class="btn btn-secondary">Sair</button>
                    </form>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ----------------------------- MODAL CRIAR PUBLICAÇÃO ------------------------------- -->





    <div style="display:none;" class="div-logo-marca">
        <div class="logo-marca">
            <img src="assets/img/logomarca.png" alt="">
        </div>
    </div>




    <script>
        $(document).ready(function() {
            $('#search').keyup(function() {
                var query = $(this).val();
                if (query != '') {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#results').html(data);
                        }
                    });
                } else {
                    $('#results').html('');
                }
            });
        });
    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>





</body>

</html>