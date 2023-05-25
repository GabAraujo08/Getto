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
                            <a href="../../PerfilArtista/Amigos/amigos.php">
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
                            $pub = PublicacaoDao::ListaPublicacaoSegui($_SESSION['idUsuario']);
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
                                    <div class="qnt-likes">
                                        <p>
                                            <!-- 10 curtidas -->
                                            <?PHP echo $p['quantidadeCurtidas']; ?>!
                                        </p>
                                    </div>
                                    <div class="acoes-publicacao">
                                        <div class="box-btn-acoes">
                                            <button class="btn-acao">
                                                <?php
                                                if ($_SESSION['curtiu'] === false) {
                                                    echo '<img src="assets/img/icon-estrela-btn.svg" alt="">';
                                                } else {
                                                    echo '<img src="assets/img/icon-like-true.svg" alt="">';
                                                }
                                                ?>
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#comentarioModal" style="position: relative;" id="btnComentario" class="btn-acao">
                                                <!-- <p style="position: absolute; top: -10px; right: -1px; color: red; font-family: 'InterBold';">1</p> -->
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
                                                    $h = intval($p['minutosPublicacao'] / 60);
                                                    echo 'há ' . $h . ' h';
                                                } else if ($p['minutosPublicacao'] > 1440) {
                                                    $d = intval($p['minutosPublicacao'] / 1440);
                                                    echo 'há ' . $d . ' d';
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





                            <?PHP
                            $pb = PublicacaoDao::ListaPublicacao();
                            foreach ($pb as $pp) {
                                $texto_compartilhamento = $p['descPublicacao'];
                            ?>
                                <div class="publicacao">
                                    <div class="header-publicacao">
                                        <div class="informacoes-perfil-publicacao">
                                            <div class="img-perfil-publicacao">
                                                <img src="../assets/img/FotoPerfil/<?PHP echo $pp['fotoPerfilUsuario']; ?>" alt="">
                                            </div>
                                            <div class="nick-e-bio-perfil-publicacao">
                                                <div class="nick">
                                                    <h1><?PHP echo $pp['nicknameUsuario']; ?></h1>
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
                                        <img src="../assets/img/Pubs/<?PHP echo $pp['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                    </div>
                                    <div class="legenda-publicacao">
                                        <p>
                                            <?PHP echo $pp['descPublicacao']; ?>!
                                        </p>
                                    </div>
                                    <div class="acoes-publicacao">
                                        <div class="box-btn-acoes">
                                            <form id="curtida" name="Curtida" action="../../../Controller/CurtirArtista.php" method="POST">
                                                <input type="hidden" name="idPublicacao" value="<?PHP echo $p['idPublicacao']; ?>">
                                                <button name="cc" type="submit" class="btn-acao">
                                                    <img src="assets/img/icon-estrela-btn.svg" alt="">
                                                </button>
                                            </form>
                                            <button data-bs-toggle="modal" data-bs-target="#comentarioModal" style="position: relative;" id="btnComentario" class="btn-acao">
                                                <p style="position: absolute; top: -10px; right: -1px; color: red; font-family: 'InterBold';">1</p>
                                                <img src="assets/img/icon-comentario-btn.svg" alt="">
                                            </button>

                                            <button class="btn-acao">
                                                <img src="assets/img/icon-salvar-btn.svg" alt="">
                                            </button>
                                            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode("Confira essa publicação em Getto: " . $pp['descPublicacao'] . " - " . $pp['arquivoMidia'] . " Para saber mais acesse: Getto.com"); ?>&media=<?php echo urlencode($media_url); ?>">
                                                <button class="btn-acao">
                                                    <img src="assets/img/icon-compartilhar-btn.svg" alt="">
                                                </button>
                                            </a>


                                        </div>
                                        <div class="tempo-publicacao">
                                            <p><?PHP
                                                if ($pp['minutosPublicacao'] == 0) {
                                                    echo 'Agora mesmo';
                                                } else if ($pp['minutosPublicacao'] > 59) {
                                                    $h = intval($pp['minutosPublicacao'] / 60);
                                                    echo 'há ' . $h . ' h';
                                                } else if ($pp['minutosPublicacao'] > 1440) {
                                                    $d = intval($pp['minutosPublicacao'] / 1440);
                                                    echo 'há ' . $d . ' d';
                                                } else {
                                                    echo 'há ' . $pp['minutosPublicacao'] . ' min';
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
                                <!-- Modal -->
                                <div class="modal fade" id="comentarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Publicação de <?PHP echo $p['nicknameUsuario']; ?> </h1>



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


                <div class="area-sugestao">

                    <div class="titulo-sugestao">
                        <h1>Sugestões para seguir</h1>
                    </div>

                    <div class="box-sugestoes">
                        <div class="sugestao-perfil">
                            <div class="img-perfil-sugestao">
                                <img src="assets/img/img-perfil.svg" alt="">
                            </div>

                            <div class="informacoes-sugestao">
                                <h1>@gabb</h1>
                                <p>Cantor e compositor</p>
                            </div>
                            <div class="btn-seguir">
                                <button>Seguir</button>
                            </div>
                        </div>

                   

                  

                        <div class="sugestao-perfil">
                            <div class="img-perfil-sugestao">
                                <img src="assets/img/img-perfil.svg" alt="">
                            </div>

                            <div class="informacoes-sugestao">
                                <h1>@gabb</h1>
                                <p>Cantor e compositor</p>
                            </div>
                            <div class="btn-seguir">
                                <button>Seguir</button>
                            </div>
                        </div>

                        <div class="sugestao-perfil">
                            <div class="img-perfil-sugestao">
                                <img src="assets/img/img-perfil.svg" alt="">
                            </div>

                            <div class="informacoes-sugestao">
                                <h1>@gabb</h1>
                                <p>Cantor e compositor</p>
                            </div>
                            <div class="btn-seguir">
                                <button>Seguir</button>
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

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comentarioModal">
        Launch demo modal
    </button> -->




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





    <div class="div-logo-marca">
        <div class="logo-marca">
            <img src="assets/img/logomarca.png" alt="">
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>





</body>

</html>