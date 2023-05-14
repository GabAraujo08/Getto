<?php include('../../../Controller/VerificaLogado.php');
require_once '../../../Dao/publicacaoDao.php';
require_once '../../../Dao/Conexao.php';
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
    <link rel="stylesheet" href="assets/css/feedMobile.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">


    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Título da sua página">
    <meta property="twitter:description" content="Descrição da sua página">
    <meta property="twitter:image" content="https://exemplo.com/imagem.png">

    <!-- Adicione a seguinte linha ao cabeçalho do seu documento HTML -->


</head>

<body>

    <div class="d-flex">
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
                            <a href="">
                                <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list" type="button">Amigos</button></li>
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
                            <a target="_blank" href="../Feed/descobrir.php">
                                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                            </a>
                            <a href="../perfil.php">
                                <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                            </a>
                        </ul>
                    </div>
                    <div class="nova-pub">
                        <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova
                            publicação</button>
                    </div>

                    <div class="sair">
                        <a href="../../../Controller/Logout.php"><img src="assets/img/sair.png">Sair</a>
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
        <div class="box-container">
            <div class="container-fluid">
                <div class="header-feed">
                    <div class="div-logos">
                        <div class="logo-marca">
                            <img src="assets/img/logomarca.png" alt="">
                        </div>
                        <div class="logo-tipo">
                            <h1>Getto</h1>
                        </div>
                    </div>
                    <div class="feed-perfil">
                        <div class="box-img-perfil-feed">
                            <img src="assets/img/img-perfil.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="box-area-perfil">
                    <div class="area-perfil">
                        <hr>
                        <div class="box-momentos">
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                            <div class="momento">
                                <div class="img-momento">
                                    <img src="assets/img/img-perfil.svg" alt="">
                                </div>
                                <div class="nick-momento">
                                    <h1>@Melis</h1>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="box-publicacoes">
                            <div class="titulo-box-publicacao">
                                <h1>Publicações</h1>
                            </div>
                            <?PHP
                            $pub = PublicacaoDao::ListaPublicacao();
                            foreach ($pub as $p) {
                                $texto_compartilhamento = $p['descPublicacao'];
                            ?>
                                <div class="publicacao">
                                    <div class="header-publicacao">
                                        <div class="informacoes-perfil-publicacao">
                                            <div class="img-perfil-publicacao">
                                                <img src="../assets/img/FotoPerfil/<?PHP echo $p['fotoPerfilUsuario']; ?>" alt="">
                                            </div>
                                            <div class="nick-e-bio-perfil-publicacao">
                                                <div class="nick">
                                                    <h1><?PHP echo $p['nicknameUsuario']; ?></h1>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="box-btn-configuracao-publicacao">
                                            <div class="btn-group dropend">
                                                <button class="btn-configuracao-publicacao" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-bars"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    Denunciar
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="box-img-publicacao">
                                        <img src="../assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                    </div>
                                    <div class="legenda-publicacao">
                                        <p>
                                            <?PHP echo $p['descPublicacao']; ?>!
                                        </p>
                                    </div>
                                    <div class="acoes-publicacao">
                                        <div class="box-btn-acoes">
                                            <button class="btn-acao">
                                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#comentarioModal" style="position: relative;" id="btnComentario" class="btn-acao">
                                                <p style="position: absolute; top: -10px; right: -1px; color: red; font-family: 'InterBold';">1</p>
                                                <img src="assets/img/icon-comentario-btn.svg" alt="">
                                            </button>
                                            <button class="btn-acao">
                                                <img src="assets/img/icon-salvar-btn.svg" alt="">
                                            </button>
                                            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode("Confira essa publicação em Getto: " . $p['descPublicacao'] . " - " . $p['arquivoMidia'] . " Para saber mais acesse: Getto.com"); ?>&media=<?php echo urlencode($media_url); ?>">
                                                <button class="btn-acao">
                                                    <img src="assets/img/icon-compartilhar-btn.svg" alt="">
                                                </button>
                                            </a>


                                        </div>
                                        <div class="tempo-publicacao">
                                            <p><?PHP
                                                if ($p['minutosPublicacao'] == 0) {
                                                    echo 'Agora mesmo';
                                                } else if ($p['minutosPublicacao'] > 59) {
                                                    $m = intval($p['minutosPublicacao'] / 60);
                                                    echo 'há ' . $m . ' h';
                                                } else {
                                                    echo 'há ' . $p['minutosPublicacao'] . ' min';
                                                }
                                                ?></p>
                                        </div>
                                    </div>
                                    <!-- <div id="divComentario" class="comentario slide-in" style="display: none;">

                                        <div class="box-text-area">
                                            <textarea name="comentario" id="" cols="30" rows="10">

                                            </textarea>
                                            <div  class="box-btn-comentario">
                                                <button class="btn btn-primary">
                                                    <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                                                </button>
                                            </div>
                                        </div>



                                    </div> -->
                                </div>
                            <?PHP
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-area-info">
            <div class="area-info">
                <div class="titulo-box-tags">
                    <h2>Tags</h2>
                </div>
                <div class="box-tags">
                    <div class="titulo-tags">
                        <h1>Mais populares</h1>
                    </div>
                    <div class="tags">
                        <div class="column-tags">
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>1#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Musica</button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>2#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Teatro</button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>3#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Dança</button>
                            </div>
                        </div>
                        <div class="column-tags">
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>4#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Desenho</button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>5#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Classicos</button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>6#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">Realismo</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="area-sugestao"></div>
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
    <div class="modal fade" id="comentarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
                        </div>
                    </div>

                    <div class="box-comentario">
                        <img src="assets/img/img-perfil.svg" alt="">
                        <div class="conteudo-comentario">
                            <h1>@gabbs</h1>
                            <p>Bom dia,</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div id="divComentario" class="comentario slide-in">

                        <div class="box-text-area">
                            <textarea name="comentario" id="" cols="30" rows="10">

                            </textarea>
                            <div class="box-btn-comentario">
                                <button class="btn btn-primary">
                                    <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                                </button>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script> -->
    <!-- 
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
    </script>

    <script>
        const btnMostrarComentario = document.getElementById('btnComentario');

        const divComentario = document.getElementById('divComentario');


btnMostrarComentario.addEventListener('click', function() {
  divComentario.style.display = 'block';
});

    </script> -->
</body>

</html>