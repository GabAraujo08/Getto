<?php
include('../../../Controller/VerificaLogado.php');
require_once '../../../Dao/publicacaoDao.php';
require_once '../../../Dao/Conexao.php';
require_once '../../../Dao/CurtidaDao.php';
require_once '../../../Dao/ComentarioDao.php';
require_once '../../../Dao/SeguidoresDao.php';
require_once '../../../Dao/ArtistaDao.php';

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
    <link rel="stylesheet" href="../../PerfilArtista/Feed/assets/css/feedMobile.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">
</head>

<body>




    <div style="overflow-x: hidden;" class="d-flex"> <!-- FAZ COM QUE A SIDEBAR NA WEB FIQUE CORRETA -->
        <div class="box-area-info">

            <div class="area-info">
                <div class="div-logo-marca">

                    <div class="icone-perfil">
                        <a href="../perfil-visitante.php">
                            <img class="img perfil-img" src="../assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                        </a>
                    </div>

                </div>


                <div class="box-tags">

                    <div class="titulo-tags">
                        <h1>Mais populares</h1>
                    </div>
                    <div class="tags">
                        <div class="column-tags">
                            <?php
                            $topCat = PublicacaoDao::buscaTopCategorias();
                            ?>

                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>1#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[0]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?></button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>2#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[1]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?>
                                </button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>3#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[2]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?>
                                </button>
                            </div>
                        </div>
                        <div class="column-tags">
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>4#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[3]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?>
                                </button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>5#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[4]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?>
                                </button>
                            </div>
                            <div class="tag">
                                <div class="rank-tag">
                                    <h2>6#</h2>
                                </div>
                                <button id="top-tag" class="btn btn-primary btn-top-tag" type="button">
                                    <?php
                                    echo $topCat[5]['nomeTipoArte'] ?? 'Desenvolvimento';
                                    ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $sugestoes = ArtistaDao::buscaArtistasAtivos();
                if ($_SESSION['nivelContaUsuario'] == 2) {
                ?>

                    <div class="area-sugestao">
                        <div class="titulo-sugestao">
                            <h1>Sugestões para seguir</h1>
                        </div>

                        <div class="box-sugestoes">
                            <div class="sugestao-perfil">
                                <div class="img-perfil-sugestao">
                                    <img style='border-radius: 50%;' src="../../PerfilArtista/assets/img/FotoPerfil/<?php echo $sugestoes[0]['fotoPerfilUsuario']; ?>" alt="">
                                </div>

                                <div class="informacoes-sugestao">
                                    <h1>
                                        <?php
                                        echo $sugestoes[0]['nicknameUsuario'];
                                        ?>
                                    </h1>
                                    <p>
                                        <?php
                                        echo $sugestoes[0]['bioArtista'];
                                        ?>
                                    </p>
                                </div>
                                <div class="btn-seguir btn-seguir-sugestao">
                                    <?php
                                    $conexao = Conexao::conectar();
                                    $consulta = $conexao->prepare('SELECT idSeguidores FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                    $consulta->bindValue(2, $sugestoes[0]['idArtista']);
                                    $consulta->execute();
                                    $resultado = $consulta->fetch();

                                    if ($resultado == false) {
                                    ?>
                                        <form action="../../../Controller/Seguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[0]['idArtista']; ?>">
                                            <button>Seguir</button>
                                        </form>
                                    <?php
                                    } else {
                                    ?>
                                        <form action="../../../Controller/Deseguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[0]['idArtista']; ?>">
                                            <button>Deseguir</button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="sugestao-perfil">
                                <div class="img-perfil-sugestao">
                                    <img style='border-radius: 50%;' src="../../PerfilArtista/assets/img/FotoPerfil/<?php echo $sugestoes[1]['fotoPerfilUsuario']; ?>" alt="">
                                </div>

                                <div class="informacoes-sugestao">
                                    <h1>
                                        <?php
                                        echo $sugestoes[1]['nicknameUsuario'];
                                        ?>
                                    </h1>
                                    <p>
                                        <?php
                                        echo $sugestoes[1]['bioArtista'];
                                        ?>
                                    </p>
                                </div>
                                <div class="btn-seguir btn-seguir-sugestao">
                                    <?php
                                    $conexao = Conexao::conectar();
                                    $consulta = $conexao->prepare('SELECT idSeguidores FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                    $consulta->bindValue(2, $sugestoes[1]['idArtista']);
                                    $consulta->execute();
                                    $resultado = $consulta->fetch();

                                    if ($resultado == false) {
                                    ?>
                                        <form action="../../../Controller/Seguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[1]['idArtista']; ?>">
                                            <button>Seguir</button>
                                        </form>
                                    <?php
                                    } else {
                                    ?>
                                        <form action="../../../Controller/Deseguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[1]['idArtista']; ?>">
                                            <button>Deixar de seguir</button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="sugestao-perfil">
                                <div class="img-perfil-sugestao">
                                    <img style='border-radius: 50%;' src="../../PerfilArtista/assets/img/FotoPerfil/<?php echo $sugestoes[2]['fotoPerfilUsuario']; ?>" alt="">
                                </div>

                                <div class="informacoes-sugestao">
                                    <h1>
                                        <?php
                                        echo $sugestoes[2]['nicknameUsuario'];
                                        ?>
                                    </h1>
                                    <p>
                                        <?php
                                        echo $sugestoes[2]['bioArtista'];
                                        ?>
                                    </p>
                                </div>
                                <div class="btn-seguir btn-seguir-sugestao">
                                    <?php
                                    $conexao = Conexao::conectar();
                                    $consulta = $conexao->prepare('SELECT idSeguidores FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                    $consulta->bindValue(2, $sugestoes[2]['idArtista']);
                                    $consulta->execute();
                                    $resultado = $consulta->fetch();

                                    if ($resultado == false) {
                                    ?>
                                        <form action="../../../Controller/Seguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[2]['idArtista']; ?>">
                                            <button>Seguir</button>
                                        </form>
                                    <?php
                                    } else {
                                    ?>
                                        <form action="../../../Controller/Deseguir.php" method="post">
                                            <input type="hidden" name="idUsuario" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                            <input type="hidden" name="idArtista" value="<?PHP echo $sugestoes[2]['idArtista']; ?>">
                                            <button>Deseguir</button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
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
                            <a href="../Evento/eventoVisitante.php">
                                <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                            </a>
                            <a href="">
                                <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                            </a>
                            <a href="../Configuracoes/configuracoes.php">
                                <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                            </a>
                            <a href="../Feed/descobrir.php">
                                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                            </a>
                            <a href="../perfil-visitante.php">
                                <a href="../perfil-visitante.php">

                                    <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                                </a>
                        </ul>
                    </div>
                    <div style="display: none;" class="nova-pub">
                        <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova
                            publicação</button>
                    </div>

                    <div class="sair">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                            <img src="../../PerfilArtista/Feed/assets/img/sair.png">Sair
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
            <a href="#">
                <div class="d-flex flex-row justify-content-center align-items-center btn-sair">
                    <img src="assets/img/icon-logout.svg" alt="Sair">
                    <h1>Sair</h1>
                </div>
            </a>
        </div>
        <div style="overflow-y: auto;" class="box-container">
            <div class="container-fluid">
                <div class="header-feed">
                    <div class="div-logos">
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

                        <!-- <div class="box-momentos">
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
                        </div> -->

                        <div class="box-publicacoes">
                            <div class="titulo-box-publicacao">
                                <h1>Publicações</h1>
                            </div>



                            <?PHP
                            $seguindo = SeguidoresDao::consultarSeguindo($_SESSION['idUsuario']);
                            if ($seguindo == 0) {
                                $pubs = PublicacaoDao::TipoArteComMaisPublicacoes();
                                foreach ($pubs as $ps) {
                                    $texto_compartilhamento = $ps['descPublicacao'];
                            ?>
                                    <div class="publicacao">
                                        <div class="header-publicacao">
                                            <div class="informacoes-perfil-publicacao">
                                                <div class="img-perfil-publicacao">
                                                    <img src="../../PerfilArtista/assets/img/FotoPerfil/<?php echo $ps['fotoPerfilUsuario']; ?>" alt="">
                                                </div>
                                                <div class="nick-e-bio-perfil-publicacao">
                                                    <div class="nick">
                                                        <h1><?PHP echo $ps['nicknameUsuario']; ?></h1>
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
                                            <?php
                                            if ($ps['idTipoMidia'] == 3) {
                                            ?>
                                                <img src="../../PerfilArtista/assets/img/Pubs/<?php echo $ps['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                            <?PHP
                                            } else if ($ps['idTipoMidia'] == 2) {
                                            ?>
                                                <video id="player-video" controls>
                                                    <source src="../../PerfilArtista/assets/img/Pubs/<?php echo $ps['arquivoMidia']; ?>">
                                                </video>
                                            <?PHP
                                            } else {
                                            ?>



                                                <div class="audio-player">
                                                    <div class="info-player">
                                                        <div class="cover">
                                                            <img class="cover-img" src=".../../../../../teste/teste.jpg">
                                                        </div>
                                                        <div class="desc-musica">
                                                            <div class="autor">
                                                                <p>Kanye West</p>
                                                            </div>
                                                            <div class="nome-musica">
                                                                <p>Esqueci</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="controls">
                                                        <div class="reproducao">
                                                            <button class="skip-button" onclick="skipBackward()"><i class="fas fa-backward"></i></button>
                                                            <button class="play-button" onclick="toggleAudio()"><i class="fas fa-play"></i></button>
                                                            <button class="skip-button" onclick="skipForward()"><i class="fas fa-forward"></i></button>
                                                        </div>
                                                        <div class="volume">
                                                            <button class="volume-button" onclick="toggleMute()"><i class="fas fa-volume-up"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar" onclick="seek(event)">
                                                        <div class="timer">00:00</div>
                                                        <div class="time-bar">
                                                            <div class="time-fill"></div>
                                                        </div>
                                                        <div class="total-time">00:00</div>
                                                    </div>
                                                    <audio class="audio-element" id="audio" src="../../PerfilArtista/assets/img/Pubs/<?php echo $ps['arquivoMidia']; ?>"></audio>
                                                </div>

                                                <!-- <audio id="player-audio" controls>
                                                    <source src="../../PerfilArtista/assets/img/Pubs/<?php echo $ps['arquivoMidia']; ?>">
                                                    </audio> -->
                                            <?PHP
                                            }
                                            ?>
                                        </div>
                                        <div class="legenda-publicacao">
                                            <p>
                                                <?PHP echo $ps['descPublicacao']; ?>!
                                            </p>
                                        </div>
                                        <div class="qnt-likes">
                                            <p>
                                                <!-- 10 curtidas -->
                                                <?php
                                                $ccc = CurtidaDao::consultarCurtida($ps['idPublicacao']);
                                                echo $ccc . ' curtidas';
                                                ?>
                                            </p>
                                        </div>
                                        <div class="acoes-publicacao">
                                            <div class="box-btn-acoes">
                                                <button class="btn-acao">
                                                    <?php
                                                    $conexao = Conexao::conectar();
                                                    $consulta = $conexao->prepare('SELECT idCurtida, idPublicacao FROM tbCurtida WHERE idUsuario = ?');
                                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                                    $consulta->execute();
                                                    $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);


                                                    if ($resultado2 == false) {
                                                    ?>

                                                        <form id="curtida" name="Curtida" action="../../../Controller/Curtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $ps['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                                            </button>
                                                        </form>

                                                    <?php
                                                    } else if (!in_array($ps['idPublicacao'], array_column($resultado2, 'idPublicacao'))) {
                                                    ?>
                                                        <form id="curtida" name="Curtida" action="../../../Controller/Curtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $ps['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                                            </button>
                                                        </form>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <form id="curtida" name="Curtida" action="../../../Controller/Descurtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $ps['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-like-true.svg" alt="">
                                                            </button>
                                                        </form>

                                                    <?php
                                                    }
                                                    ?>

                                                </button>
                                                <button data-bs-toggle="modal" data-bs-target="#comentarioModal<?PHP echo $ps['idPublicacao']; ?>" style="position: relative;" id="btnComentario" class="btn-acao">
                                                    <!-- <p style="position: absolute; top: -10px; right: -1px; color: red; font-family: 'InterBold';">1</p> -->
                                                    <img src="assets/img/icon-comentario-btn.svg" alt="">
                                                </button>
                                                <button class="btn-acao">
                                                    <img src="assets/img/icon-salvar-btn.svg" alt="">
                                                </button>
                                                <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode("Confira essa publicação em Getto: " . $ps['descPublicacao'] . " - " . $ps['arquivoMidia'] . " Para saber mais acesse: Getto.com"); ?>&media=<?php echo urlencode($media_url); ?>">
                                                    <button class="btn-acao">
                                                        <img src="assets/img/icon-compartilhar-btn.svg" alt="">
                                                    </button>
                                                </a>


                                            </div>
                                            <div class="tempo-publicacao">
                                                <p><?php
                                                    $minutoss = $ps['minutosPublicacao'];
                                                    $mesess = intval($minutoss / 43200);
                                                    $minutoss = $minutoss % 43200;

                                                    if ($mesess > 0) {
                                                        echo 'há ' . $mesess . ' m';
                                                    } elseif ($minutoss == 0) {
                                                        echo 'Agora mesmo';
                                                    } elseif ($minutoss > 1440) {
                                                        $ds = intval($minutoss / 1440);
                                                        echo 'há ' . $ds . ' d';
                                                    } elseif ($minutoss > 59) {
                                                        $hs = intval($minutoss / 60);
                                                        echo 'há ' . $hs . ' h';
                                                    } else {
                                                        echo 'há ' . $minutoss . ' min';
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

                                                <?PHP
                                                $tcc = ComentarioDao::consultarQuantComentario($ps['idPublicacao']);
                                                ?>

                                    </div> -->
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal-comentario">


                                        <div class="modal fade" id="comentarioModal<?PHP echo $ps['idPublicacao']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> <?PHP echo $tcc; ?> Comentários </h1>



                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- <div class="box-input-search">
                                                    <input class="busca-comentario" type="search" placeholder="Busque um comentário">

                                                </div>
                                                <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass icon-search"></i></button> -->
                                                        <?php
                                                        $comes = ComentarioDao::listarComentario($ps['idPublicacao']);
                                                        foreach ($comes as $cs) {

                                                        ?>
                                                            <div class="box-comentario">
                                                                <?PHP
                                                                if ($cs['nivelContaUsuario'] == 2) {
                                                                ?>
                                                                    <img src="../../PerfilArtista/assets/img/FotoPerfil/<?PHP echo $cs['fotoPerfilUsuario']; ?>" alt="">
                                                                <?PHP
                                                                } else {
                                                                ?>
                                                                    <img src="../assets/img/FotoPerfil/<?PHP echo $cs['fotoPerfilUsuario']; ?>" alt="">
                                                                <?PHP
                                                                }
                                                                ?>
                                                                <div class="conteudo-comentario">
                                                                    <h1><?PHP echo $cs['nicknameUsuario']; ?></h1>
                                                                    <p><?PHP echo $cs['comentario']; ?></p>
                                                                    <?php
                                                                    $min = $cs['minutosComentario'];
                                                                    $mess = intval($minuto / 43200);
                                                                    $min = $min % 43200;

                                                                    if ($mess > 0) {
                                                                        echo 'há ' . $mess . ' m';
                                                                    } elseif ($min == 0) {
                                                                        echo 'Agora mesmo';
                                                                    } elseif ($min > 1440) {
                                                                        $dss = intval($min / 1440);
                                                                        echo 'há ' . $dss . ' d';
                                                                    } elseif ($min > 59) {
                                                                        $hss = intval($min / 60);
                                                                        echo 'há ' . $hss . ' h';
                                                                    } else {
                                                                        echo 'há ' . $min . ' min';
                                                                    }
                                                                    ?>
                                                                    <div class="box-btn-denuncia">
                                                                    <form action="denunciaComentario.php" method="Post" id="denuncia" name="denuncia">
                                                                            <input type="hidden" name="comentario" value="<?php echo $cs['comentario']; ?>">
                                                                            <input type="hidden" name="nickname" value="<?php echo $cs['nicknameUsuario']; ?>">
                                                                            <input type="hidden" name="fotoPerfil" value="<?php echo $cs['fotoPerfilUsuario']; ?>">
                                                                            <input type="hidden" name="nivelConta" value="<?php echo $cs['nivelContaUsuario']; ?>">
                                                                            <input type="hidden" name="idDenunciado" value="<?php echo $cs['idUsuario']; ?>">
                                                                            <input type="hidden" name="emaildenunciado" value="<?php echo $cs['emailUsuario']; ?>">
                                                                            <input type="hidden" name="emaildenunciador" value="<?php echo $_SESSION['emailUsuario']; ?>">
                                                                            <input type="hidden" name="idDenunciador" value="<?php echo $_SESSION['idUsuario']; ?>">
                                                                            <button type="submit"  id="myBtn" type="button"><i class="fa-solid fa-flag" style="color: #ef220b;"></i></button>
                                                                        </form>                                                                    </div>
                                                                </div>
                                                            </div>




                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div id="divComentario" class="comentario slide-in">

                                                            <div class="box-text-area">
                                                                <form method="POST" action="../../../Controller/Comentario.php">
                                                                    <textarea placeholder="Deixe seu comentário" name="comentario" id="" cols="30" rows="10">

                                                                    </textarea>
                                                                    <input type="hidden" name="idPubli" value="<?PHP echo $ps['idPublicacao']; ?>">
                                                                    <input type="hidden" name="idUsua" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                                                    <div class="box-btn-comentario">
                                                                        <button type="submit" class="btn btn-primary">
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


                                    <?php
                                } else {
                                    $pub = PublicacaoDao::ListaPublicacaoSegui($_SESSION['idUsuario']);
                                    foreach ($pub as $p) {
                                    ?>
                                        <div class="publicacao">
                                            <div class="header-publicacao">
                                                <div class="informacoes-perfil-publicacao">
                                                    <div class="img-perfil-publicacao">
                                                        <img src="../../PerfilArtista/assets/img/FotoPerfil/<?PHP echo $p['fotoPerfilUsuario']; ?>" alt="">
                                                    </div>
                                                    <div class="nick-e-bio-perfil-publicacao">
                                                        <div class="nick">
                                                            <h1><?PHP echo $p['nicknameUsuario']; ?></h1>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="box-btn-configuracao-publicacao">
                                                    <button class="btn-configuracao-publicacao">
                                                        <img src="../assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                                    </button>
                                                </div>
                                            </div>


                                            <div class="box-img-publicacao">
                                                <?php
                                                if ($p['idTipoMidia'] == 3) {
                                                ?>
                                                    <img src="../../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                                <?PHP
                                                } else if ($p['idTipoMidia'] == 2) {
                                                ?>
                                                    <video id="player-video" controls>
                                                        <source src="../../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>">
                                                    </video>
                                                <?PHP
                                                } else {
                                                ?>




                                                    <div class="audio-player">
                                                        <div class="info-player">
                                                            <div class="cover">
                                                                <img class="cover-img" src=".../../../../../teste/teste.jpg">
                                                            </div>
                                                            <div class="desc-musica">
                                                                <div class="autor">
                                                                    <p>Kanye West</p>
                                                                </div>
                                                                <div class="nome-musica">
                                                                    <p>Esqueci</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="controls">
                                                            <div class="reproducao">
                                                                <button class="skip-button" onclick="skipBackward()"><i class="fas fa-backward"></i></button>
                                                                <button class="play-button" onclick="toggleAudio()"><i class="fas fa-play"></i></button>
                                                                <button class="skip-button" onclick="skipForward()"><i class="fas fa-forward"></i></button>
                                                            </div>
                                                            <div class="volume">
                                                                <button class="volume-button" onclick="toggleMute()"><i class="fas fa-volume-up"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="progress-bar" onclick="seek(event)">
                                                            <div class="timer">00:00</div>
                                                            <div class="time-bar">
                                                                <div class="time-fill"></div>
                                                            </div>
                                                            <div class="total-time">00:00</div>
                                                        </div>
                                                        <audio class="audio-element" id="audio" src="../../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>"></audio>
                                                    </div>


                                                   

                                                <?PHP
                                                }
                                                ?>
                                            </div>
                                            <div class="legenda-publicacao">
                                                <p>
                                                    <?PHP echo $p['descPublicacao']; ?>!
                                                </p>
                                            </div>
                                            <div class="qnt-likes">
                                                <p>
                                                    <!-- 10 curtidas -->
                                                    <?php
                                                    $cc = CurtidaDao::consultarCurtida($p['idPublicacao']);
                                                    echo $cc . ' curtidas';
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="acoes-publicacao">
                                                <div class="box-btn-acoes">

                                                    <?php
                                                    $conexao = Conexao::conectar();
                                                    $consulta = $conexao->prepare('SELECT idCurtida, idPublicacao FROM tbCurtida WHERE idUsuario = ?');
                                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                                    $consulta->execute();
                                                    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


                                                    if ($resultado == false) {
                                                    ?>

                                                        <form id="curtida" name="Curtida" action="../../../Controller/Curtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $p['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                                            </button>
                                                        </form>

                                                    <?php
                                                    } else if (!in_array($p['idPublicacao'], array_column($resultado, 'idPublicacao'))) {
                                                    ?>
                                                        <form id="curtida" name="Curtida" action="../../../Controller/Curtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $p['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-estrela-btn.svg" alt="">
                                                            </button>
                                                        </form>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <form id="curtida" name="Curtida" action="../../../Controller/Descurtir.php" method="POST">
                                                            <input type="hidden" name="idPublicacao" value="<?PHP echo $p['idPublicacao']; ?>">
                                                            <button name="cc" type="submit" class="btn-acao">
                                                                <img src="assets/img/icon-like-true.svg" alt="">
                                                            </button>
                                                        </form>

                                                    <?php
                                                    }
                                                    ?>




                                                    <button data-bs-toggle="modal" data-bs-target="#comentarioModal<?PHP echo $p['idPublicacao']; ?>" style="position: relative;" id="btnComentario" class="btn-acao">
                                                        <!--<p style="position: absolute; top: -10px; right: -1px; color: red; font-family: 'InterBold';">1</p>-->
                                                        <img src="assets/img/icon-comentario-btn.svg" alt="">
                                                    </button>
                                                    <button class="btn-acao">
                                                        <img src="assets/img/icon-salvar-btn.svg" alt="">
                                                    </button>
                                                    <button class="btn-acao">
                                                        <img src="assets/img/icon-compartilhar-btn.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="tempo-publicacao">
                                                    <p><?php
                                                        $minutos = $p['minutosPublicacao'];
                                                        $meses = intval($minutos / 43200);
                                                        $minutos = $minutos % 43200;

                                                        if ($meses > 0) {
                                                            echo 'há ' . $meses . ' m';
                                                        } elseif ($minutos == 0) {
                                                            echo 'Agora mesmo';
                                                        } elseif ($minutos > 1440) {
                                                            $d = intval($minutos / 1440);
                                                            echo 'há ' . $d . ' d';
                                                        } elseif ($minutos > 59) {
                                                            $h = intval($minutos / 60);
                                                            echo 'há ' . $h . ' h';
                                                        } else {
                                                            echo 'há ' . $minutos . ' min';
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>
                                            <div id="divComentario" class="comentario slide-in" style="display: none;">

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
                                        <?PHP
                                        $tc = ComentarioDao::consultarQuantComentario($p['idPublicacao']);
                                        ?>
                                        <div class="modal-comentario">


                                            <div class="modal fade" id="comentarioModal<?PHP echo $p['idPublicacao']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?PHP echo $tc; ?> Comentários </h1>



                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- <div class="box-input-search">
                                                                <input class="busca-comentario" type="search" placeholder="Busque um comentário">

                                                            </div>
                                                            <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass icon-search"></i></button> -->
                                                            <?php
                                                            $come = ComentarioDao::listarComentario($p['idPublicacao']);
                                                            foreach ($come as $c) {

                                                            ?>
                                                                <div class="box-comentario">
                                                                    <?PHP
                                                                    if ($c['nivelContaUsuario'] == 2) {
                                                                    ?>
                                                                        <img src="../assets/img/FotoPerfil/<?PHP echo $c['fotoPerfilUsuario']; ?>" alt="">
                                                                    <?PHP
                                                                    } else {
                                                                    ?>
                                                                        <img src="../../PerfilVisitante/assets/img/FotoPerfil/<?PHP echo $c['fotoPerfilUsuario']; ?>" alt="">
                                                                    <?PHP
                                                                    }
                                                                    ?>
                                                                    <div class="conteudo-comentario">
                                                                        <h1><?PHP echo $c['nicknameUsuario']; ?></h1>
                                                                        <p><?PHP echo $c['comentario']; ?></p>
                                                                        <?php
                                                                        $minuto = $c['minutosComentario'];
                                                                        $mes = intval($minuto / 43200);
                                                                        $minuto = $minuto % 43200;

                                                                        if ($mes > 0) {
                                                                            echo 'há ' . $mes . ' m';
                                                                        } elseif ($minuto == 0) {
                                                                            echo 'Agora mesmo';
                                                                        } elseif ($minuto > 1440) {
                                                                            $ds = intval($minuto / 1440);
                                                                            echo 'há ' . $ds . ' d';
                                                                        } elseif ($minuto > 59) {
                                                                            $hs = intval($minuto / 60);
                                                                            echo 'há ' . $hs . ' h';
                                                                        } else {
                                                                            echo 'há ' . $minuto . ' min';
                                                                        }
                                                                        ?>
                                                                        <div class="box-btn-denuncia">
                                                                        <form action="denunciaComentario.php" method="Post" id="denuncia" name="denuncia">
                                                                            <input type="hidden" name="comentario" value="<?php echo $c['comentario']; ?>">
                                                                            <input type="hidden" name="nickname" value="<?php echo $c['nicknameUsuario']; ?>">
                                                                            <input type="hidden" name="fotoPerfil" value="<?php echo $c['fotoPerfilUsuario']; ?>">
                                                                            <input type="hidden" name="nivelConta" value="<?php echo $c['nivelContaUsuario']; ?>">
                                                                            <input type="hidden" name="idDenunciado" value="<?php echo $c['idUsuario']; ?>">
                                                                            <input type="hidden" name="emaildenunciado" value="<?php echo $c['emailUsuario']; ?>">
                                                                            <input type="hidden" name="emaildenunciador" value="<?php echo $_SESSION['emailUsuario']; ?>">
                                                                            <input type="hidden" name="idDenunciador" value="<?php echo $_SESSION['idUsuario']; ?>">
                                                                            <button type="submit"  id="myBtn" type="button"><i class="fa-solid fa-flag" style="color: #ef220b;"></i></button>
                                                                        </form>                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div id="divComentario" class="comentario slide-in">

                                                                <div class="box-text-area">
                                                                    <form method="POST" id="coment" action="../../../Controller/Comentario.php">
                                                                        <textarea placeholder="Deixe seu comentário" name="comentario" id="" cols="30" rows="10">

                                                        </textarea>
                                                                        <input type="hidden" name="idPubli" value="<?PHP echo $p['idPublicacao']; ?>">
                                                                        <input type="hidden" name="idUsua" value="<?PHP echo $_SESSION['idUsuario']; ?>">
                                                                        <div class="box-btn-comentario">
                                                                            <button type="submit" class="btn btn-primary">
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
                                    <?php
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
        <a href="descobrir.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-calendario.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-notificacao.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-amigos.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>

    </div>




     <!--<div class="modal fade" id="denunciaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <img src="../" alt="">
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
                    <div id="divDenuncia" style="display: none;" class="comentario slide-in">
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


    <script>
        var audioPlayers = document.querySelectorAll('.audio-player');
        audioPlayers.forEach(function(player) {
            var audio = player.querySelector('.audio-element');
            var playButton = player.querySelector('.play-button');
            var volumeButton = player.querySelector('.volume-button');
            var timer = player.querySelector('.timer');
            var totalTime = player.querySelector('.total-time');
            var timeFill = player.querySelector('.time-fill');
            var progressBar = player.querySelector('.progress-bar');

            playButton.addEventListener('click', function() {
                toggleAudio(audio, playButton);
            });

            volumeButton.addEventListener('click', function() {
                toggleMute(audio, volumeButton);
            });

            audio.addEventListener('timeupdate', function() {
                var position = audio.currentTime / audio.duration;
                timeFill.style.width = (position * 100) + '%';

                var minutes = Math.floor(audio.currentTime / 60);
                var seconds = Math.floor(audio.currentTime % 60);
                timer.textContent = padTime(minutes) + ':' + padTime(seconds);
            });

            audio.addEventListener('loadedmetadata', function() {
                var minutes = Math.floor(audio.duration / 60);
                var seconds = Math.floor(audio.duration % 60);
                totalTime.textContent = padTime(minutes) + ':' + padTime(seconds);
            });

            function toggleAudio(audio, button) {
                if (audio.paused) {
                    audio.play();
                    button.innerHTML = '<i class="fas fa-pause"></i>';
                } else {
                    audio.pause();
                    button.innerHTML = '<i class="fas fa-play"></i>';
                }
            }

            function toggleMute(audio, button) {
                if (audio.muted) {
                    audio.muted = false;
                    button.innerHTML = '<i class="fas fa-volume-up"></i>';
                } else {
                    audio.muted = true;
                    button.innerHTML = '<i class="fas fa-volume-mute"></i>';
                }
            }

            function padTime(time) {
                return (time < 10 ? '0' : '') + time;
            }

            progressBar.addEventListener('click', function(event) {
                seek(event, audio, progressBar);
            });

            player.querySelector('.skip-button').addEventListener('click', function() {
                skipBackward(audio);
            });

            player.querySelector('.skip-button:nth-child(3)').addEventListener('click', function() {
                skipForward(audio);
            });
        });

        function seek(event, audio, progressBar) {
            var progressWidth = progressBar.clientWidth;
            var clickX = event.clientX - progressBar.getBoundingClientRect().left;
            var positionPercentage = clickX / progressWidth;
            var seekTime = positionPercentage * audio.duration;

            audio.currentTime = seekTime;
        }

        function skipForward(audio) {
            audio.currentTime += 10;
        }

        function skipBackward(audio) {
            audio.currentTime -= 10;
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




</body>

</html>