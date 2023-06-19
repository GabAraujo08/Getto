<?php include('../../Controller/VerificaLogado.php');
require_once 'GlobalPerfil.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../PerfilArtista/assets/css/perfilArtistaMobile.css">
    <link rel="stylesheet" href="assets/css/preview-criar-evento.css" />
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/modal-criarPub.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
</head>

<body>

    <style>
        #modalMostrarEvento .modal-body .informacoes-mostrar-evento {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 10px;
        }

        #modalMostrarEvento .modal-body .informacoes-mostrar-evento .titulo-mostrar-evento h1 {
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .informacoes-mostrar-evento .descricao-mostrar-evento p {
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .img-mostrar-evento img {
            height: 100%;
            width: 100%;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .perfil-usuario-mostrar-evento .img-perfil-mostrar-evento img {
            width: 65px;
            height: 65px;
            border-radius: 50%;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .perfil-usuario-mostrar-evento {
            display: flex;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .perfil-usuario-mostrar-evento .nickname-perfil h1 {
            font-family: "InterRegular";
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 23px;
            color: #000000;
            display: flex;
            align-items: center;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .perfil-usuario-mostrar-evento .nickname-perfil {
            display: flex;
            align-items: center;
            margin-left: 5px;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .endereco-mostrar-evento p {
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento {
            display: flex;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .titulo-mostrar-evento h1 {
            font-family: "InterRegular";
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 23px;
            color: #000000;
            margin-top: 5px;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .horario-evento span {
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 19px;
            color: #000000;
            margin-right: 5px;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .horario-evento p {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;
            color: #000000;
            margin-right: 5px;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .data-mostrar-evento {
            display: flex;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .data-mostrar-evento .data p {
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            color: #000000;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .data-mostrar-evento .data span {
            margin-left: 5px;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .data-mostrar-evento .mes p {
            margin-left: 5px;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .footer-mostrar-evento {
            display: flex;
            flex-direction: column-reverse;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .footer-mostrar-evento .link-evento span {
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            color: #000000;
            word-break: break-all;
        }

        #modalMostrarEvento .modal-body .conteudo-mostrar-evento .informacoes-mostrar-evento .footer-mostrar-evento .link-evento p {
            color: blue;
            word-break: break-all;
        }


        .btn-mudarExibicao button {
            width: unset !important;
        }

        .btn-mudarExibicao {
            justify-content: flex-end;
        }
    </style>

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
                            <a href="../PerfilVisitante/Feed/feed.php">
                                <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                            </a>

                            <a href="../PerfilVisitante/Evento/eventoVisitante.php">
                                <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                            </a>

                            <a href="Configuracoes/configuracoes.php">
                                <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                            </a>
                            <a href="Feed/descobrir.php">
                                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                            </a>
                            <a href="perfil-visitante.php">
                                <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                            </a>
                        </ul>
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

                <div class="area-perfil">
                    <div class="box-perfil">
                        <div class="informacao-perfil">
                            <div class="papel-parede-img-perfil">
                                <?PHP
                                if ($_SESSION['nivel'] == 2) {
                                ?>
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="../PerfilArtista/assets/img/FotoCapa/<?PHP echo $_SESSION['papel']; ?>" alt="">
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" class="img perfil-img" src="../PerfilArtista/assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoP']; ?>" alt="">
                                <?PHP
                                } else {
                                ?>
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="assets/img/FotoCapa/<?PHP echo $_SESSION['papel']; ?>" alt="">
                                    <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoP']; ?>" alt="">
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

                                <div style="margin-left: 6.5rem;" class="desc-perfil">
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

                                                    <button data-bs-toggle="modal" data-bs-target="#adicionarPix" type="button" style="position: relative;" class="btn btn-primary btn-doacao">
                                                        <img src="../PerfilArtista/assets/img/dollar.png" id="icone" alt="" srcset="">

                                                        <?php require_once '../../Dao/ContaPixArtistaDao.php';

                                                        $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idA']);
                                                        foreach ($pix as $cpa) :
                                                        ?>



                                                        <?php endforeach; ?>
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

                                                    <button data-bs-toggle="modal" data-bs-target="#adicionarPix" type="button" style="position: relative;" class="btn btn-primary btn-doacao">
                                                        <img src="../PerfilArtista/assets/img/dollar.png" id="icone" alt="" srcset="">

                                                        <?php require_once '../../Dao/ContaPixArtistaDao.php';

                                                        $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idA']);
                                                        foreach ($pix as $cpa) :
                                                        ?>


                                                        <?php endforeach; ?>
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
                        </div>


                        <div class="btn-mudarExibicao">
                            <button id="btn-exibirPublicacoes" class="btn btn-primary">
                                <img src="../PerfilArtista/assets/img/publicacao-preto.svg" alt="">
                            </button>

                            <button id="btn-exibirEventos" class="btn btn-primary btnExibirEvento">
                                <img src="../PerfilArtista/assets/img/calendario-preto.svg" alt="">
                            </button>
                        </div>

                        <div class="atividade">

                            <div id="publicacoes-web" class="publicacoes publicacoes-web" style="justify-content: center;">


                                <div id="publicacoes-web" class="col-8 publicacoes">
                                    <?php
                                    if ($_SESSION['nivel'] == 2) {
                                        require_once  '../../Dao/publicacaoDao.php';
                                        $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idA']);
                                        foreach ($mp as $p) {
                                            if ($p['idTipoMidia'] == 3) { ?>
                                                <img src="../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>" alt="">
                                            <?php
                                            } elseif ($p['idTipoMidia'] == 2) { ?>
                                                <video id="player-video" controls>
                                                    <source src="../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>">
                                                </video>
                                            <?PHP
                                            } else { ?>
                                                <div class="audio-player">
                                                    <div class="info-player">
                                                        <div class="cover">
                                                            <img class="cover-img" src=".../../../../teste/teste.jpg">
                                                        </div>
                                                        <!-- <div class="desc-musica">
                                                    <div class="autor">
                                                        <p>Kanye West</p>
                                                    </div>
                                                    <div class="nome-musica">
                                                        <p>Esqueci</p>
                                                    </div>
                                                </div> -->
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
                                                    <audio class="audio-element" id="audio" src="../PerfilArtista/assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>">></audio>
                                                </div>
                                            <?PHP
                                            }
                                        }
                                    } else {

                                        $pc = PublicacaoDao::ListaPublicacaoCurti($_SESSION['idU']);
                                        foreach ($pc as $pcc) {
                                            if ($pcc['idTipoMidia'] == 3) { ?>

                                                <img src="../PerfilArtista/assets/img/Pubs/<?php echo $pcc['arquivoMidia']; ?>" alt="">

                                            <?php
                                            } else if ($pcc['idTipoMidia'] == 2) {
                                            ?>
                                                <video id="player-video" controls>
                                                    <source src="../PerfilArtista/assets/img/Pubs/<?PHP echo $pcc['arquivoMidia']; ?>">
                                                </video>
                                            <?PHP
                                            } else {
                                            ?>
                                                <div class="audio-player">
                                                    <div class="info-player">
                                                        <div class="cover">
                                                            <img class="cover-img" src="../../teste/teste.jpg">
                                                        </div>
                                                        <!-- <div class="desc-musica">
                                                            <div class="autor">
                                                                <p>Kanye West</p>
                                                            </div>
                                                            <div class="nome-musica">
                                                                <p>Esqueci</p>
                                                            </div>
                                                        </div> -->
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
                                                    <audio class="audio-element" id="audio" src="../PerfilArtista/assets/img/Pubs/<?php echo $pcc['arquivoMidia']; ?>"></audio>
                                                </div>
                                    <?PHP
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>



                            <div id="eventos-web" class="eventos eventos-web" style="justify-content: center;">
                                <?php
                                if ($_SESSION['nivel'] == 2) {
                                    require_once '../../Dao/EventoDao.php';
                                    if (isset($_SESSION['idU'])) {
                                        $eventos = EventoDao::ListaMeusEventos($_SESSION['idU']);
                                        foreach ($eventos as $evento) : ?>
                                            <div class="img-evento">
                                                <img src="../PerfilArtista/Evento/assets/img/<?php echo $evento['imagemEvento']; ?>" alt="">
                                                <h1><?PHP echo $evento['tituloEvento']; ?></h1>
                                            </div>
                                        <?PHP
                                        endforeach;
                                    }
                                } else {
                                    require_once '../../Dao/EventoDao.php';
                                    $eventos = EventoDao::ListaConfirmaEvento($_SESSION['idU']);
                                    foreach ($eventos as $evento) : ?>
                                        <div class="img-evento">
                                            <img data-bs-toggle="modal" data-bs-target="#modalMostrarEvento"  src="../PerfilArtista/Evento/assets/img/<?php echo $evento['imagemEvento']; ?>" alt="">
                                            <h1><?PHP echo $evento['tituloEvento']; ?></h1>
                                        </div>
                                    <?php endforeach; ?>
                                <?PHP
                                }
                                ?>

                            </div>



                            <div id="eventos-web" class="col-4 eventos">



                                <div class="img-evento">

                                    <?php
                                    require_once '../../Dao/EventoDao.php';

                                    if (isset($_SESSION['idA'])) {
                                        $eventos = EventoDao::ListaMeusEventos($_SESSION['idA']);
                                        foreach ($eventos as $evento) : ?>

                                            <img data-bs-toggle="modal" data-bs-target="#modalMostrarEvento" src="../PerfilArtista/Evento/assets/img/<?php echo $evento['imagemEvento']; ?>" alt="">

                                            <h1>
                                                <?PHP echo $evento['tituloEvento']; ?>
                                            </h1>

                                    <?php endforeach;
                                    } ?>

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





            <!-- --------------------------- MODAL EDITAR PERFIL ----------------------------------- -->

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form name="formInfo" action="UpdateUsuario.php" method="POST">
                                <label>Nome:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="nomeUsuario" value="<?PHP echo $_SESSION['nome']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>
                                <label>Nickname:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="nicknameUsuario" value="<?PHP echo $_SESSION['nick']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>

                                <label>Bio:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="bioArtista" value="<?PHP echo $_SESSION['bioArtista']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>
                                <!--<label>Genero:</label>
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" aria-label="Sizing example input" name="generoArtista"  value="<?PHP echo $_SESSION['generoArtista']; ?>"
                            aria-describedby="inputGroup-sizing-default">

                    </div>-->
                                <label>Telefone:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="foneUsuario" value="<?PHP echo $_SESSION['foneUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>
                                <label>Estado:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="estadoUsuario" value="<?PHP echo $_SESSION['estadoUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>
                                <label>Cidade:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" aria-label="Sizing example input" name="cidadeUsuario" value="<?PHP echo $_SESSION['cidadeUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                                </div>
                            </form>


                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------------- MODAL MOSTRAR EVENTO ----------------------- -->

            <div class="modal fade" id="modalMostrarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="conteudo-mostrar-evento">
                                <div class="img-mostrar-evento" style="width: 50%;">
                                    <img src="Evento/assets/img/<?PHP echo $evento['imagemEvento']; ?>" alt="">
                                </div>
                                <div class="informacoes-mostrar-evento" style="width: 50%;">
                                    <div class="perfil-usuario-mostrar-evento">
                                        <div class="img-perfil-mostrar-evento">
                                            <img class="perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                                        </div>
                                        <div class="nickname-perfil">
                                            <h1> <?PHP echo $_SESSION['nicknameUsuario']; ?></h1>
                                        </div>
                                    </div>
                                    <div class="titulo-mostrar-evento">
                                        <h1>
                                            <?PHP echo $evento['tituloEvento']; ?>
                                        </h1>
                                    </div>
                                    <div class="descricao-mostrar-evento">
                                        <p><?php echo $evento['descEvento']; ?></p>
                                    </div>
                                    <div class="endereco-mostrar-evento">
                                        <p><?php echo $evento['logradouroEvento']; ?> <?php echo $evento['numLogEvento']; ?></p>
                                    </div>
                                    <div class="horario-evento">
                                        <span>Horário de início:</span><?php echo $evento['horarioInicioEvento']; ?>
                                    </div>
                                    <div class="horario-evento">
                                        <span>Horário de término:</span><?php echo $evento['horarioFinalEvento']; ?>
                                    </div>
                                    <div class="data-mostrar-evento">
                                        <div class="data" style="display:flex;">
                                            <p class="data">Data:</p><span class="date"><?php $dia = date('d', strtotime($evento['dataEvento']));
                                                                                        echo $dia; ?></span>
                                        </div>
                                        <div class="mes">
                                            <p class="mes"><?php $mes = strtolower(date('M', strtotime($evento['dataEvento'])));
                                                            echo $mes; ?></p>
                                        </div>
                                    </div>
                                    <div class="footer-mostrar-evento">
                                        <div class="confirmados-mostrar-evento">
                                            <p><?php
                                                $prec = PresencaDao::consultar($evento['idEvento']);
                                                echo $prec . ' Presenças confirmadas'; ?></p>
                                        </div>
                                        <div class="link-evento">
                                            <p><span>link do ingresso:</span><a target="_blank" href="<?php echo $evento['linkIng']; ?>"><?php echo $evento['linkIng']; ?></a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
                                <?php
                                if ($_SESSION['nivel'] == 2) {
                                ?>
                                    <img class="img-capa" src="../PerfilArtista/assets/img/FotoCapa/<?PHP echo $_SESSION['papel']; ?>" alt="">
                                <?php
                                } else {
                                ?>
                                    <img class="img-capa" src="assets/img/FotoCapa/<?PHP echo $_SESSION['papel']; ?>" alt="">
                                <?php
                                }
                                ?>
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
                                <?php
                                if ($_SESSION['nivel'] == 2) {
                                ?>
                                    <img class="img-usuario" src="../PerfilArtista/assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoP']; ?>" alt="">
                                <?php
                                } else {
                                ?>
                                    <img class="img-usuario" src="assets/img/FotoPerfil/<?php echo $_SESSION['fotoP']; ?>" alt="">
                                <?php
                                }
                                ?>
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


            <!-- ------------------------------ MODAL CRIAR EVENTO ------------------------------------- -->

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="modalCriarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Criar novo evento</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="container">
                                    <div class="lado-esquerdo">
                                        <label>Inserir título: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="título">
                                        </div>
                                        <div class="hora">
                                            <div class="inicio">
                                                <label for="horario">Horário de início: </label>
                                                <div class="input-group mb-3">
                                                    <input type="time" id="horario" name="horario" class="form-control" placeholder="início">
                                                </div>
                                            </div>
                                            <div class="termino">
                                                <label>Horário de término: </label>
                                                <div class="input-group mb-3">
                                                    <input type="time" id="horario" name="horario" class="form-control" placeholder="término">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <label for="data">Selecione uma data:</label>
                                            <div class="input-group mb-3">
                                                <input type="date" id="data">
                                            </div>
                                            <label>Número de endereço: </label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="número de endereço">
                                            </div>
                                        </div>
                                        <label>Endereço: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="endereço">
                                        </div>
                                        <label>Bairro: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="bairro">
                                        </div>
                                        <label>CEP: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="cep">
                                        </div>
                                        <label>Cidade: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="cidade">
                                        </div>
                                        <label>Estado: </label>
                                        <div class="input-group mb-3">
                                            <select id="estado-evento" name="estado-evento" class="select-estado">
                                                <option value="AC">Selecionar</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                                <option value="EX">Estrangeiro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="lado-direito">
                                        <div class="input-group mb-3">
                                            <div class="preview-img">
                                                <label class="picture" for="picture__input" tabIndex="0">
                                                    <span class="picture__image"></span>
                                                </label>
                                                <input type="file" name="picture__input" id="picture__input">
                                            </div>
                                        </div>
                                        <label>Descrição do evento</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="desc-evento" placeholder="descrição">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button type="submit" class="btn">Concluir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- --------------------------- MODAL CRIAR PUBLICACAO ----------------------- -->


            <!-- Modal -->
            <div class="modal fade" id="modalCriarPub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Criar publicação</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="cabecalho-pub">
                                <div class="img-perfil">
                                    <img src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                                </div>
                                <div class="info-pub">
                                    <div class="nick">
                                        <h1><?PHP echo $_SESSION['nicknameUsuario']; ?></h1>
                                    </div>
                                    <div class="privacidade">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="1">Público</option>
                                            <option value="2">Privado</option>
                                            <option value="3">Rascunho</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="area-form">
                                <form id="regForm" action="">


                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab">
                                        <textarea placeholder="No que você está pensando?" name="" id="" cols="40" rows="10"></textarea>
                                        <h1 class="title-form">Selecione o tipo de mídia</h1>
                                        <div class="wrapper">
                                            <input type="radio" name="select" id="option-1" checked>
                                            <input type="radio" name="select" id="option-2">
                                            <input type="radio" name="select" id="option-3">
                                            <label for="option-1" class="option option-1">
                                                <div class="dot"></div>
                                                <span>Imagem</span>
                                            </label>
                                            <label for="option-2" class="option option-2">
                                                <div class="dot"></div>
                                                <span>Vídeo</span>
                                            </label>
                                            <label for="option-3" class="option option-3">
                                                <div class="dot"></div>
                                                <span>Música</span>
                                            </label>

                                        </div>
                                        <input type="file" id="inputFile" style="display:none;">

                                        <div id="previewContainer"></div>
                                        <div id="previewCover"></div>



                                        <!-- <div id="capaMusica" style="display: none;" class="box">
                                    <input style="display: none;" type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                    <label for="file-5">
                                        <figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                            </svg></figure> <span>Escolha a capa&hellip;</span>
                                    </label>
                                </div> -->



                                    </div>

                                    <div class="tab">
                                        <h1 class="title-form">Qual o tipo da sua publicação?</h1>
                                        <select style="margin-bottom: 10px;" class="form-select" aria-label="Default select example">
                                            <option value="1">Música</option>
                                            <option value="2">Pintura</option>
                                            <option value="3">Desenho</option>
                                            <option value="4">Atuação</option>
                                            <option value="5">Outros</option>
                                        </select>
                                    </div>

                                    <!-- <div class="tab">Birthday:
                                <p><input placeholder="dd" oninput="this.className = ''"></p>
                                <p><input placeholder="mm" oninput="this.className = ''"></p>
                                <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                            </div> -->

                                    <!-- <div class="tab">Login Info:
                                <p><input placeholder="Username..." oninput="this.className = ''"></p>
                                <p><input placeholder="Password..." oninput="this.className = ''"></p>
                            </div> -->

                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button class="btn-prev btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
                                            <button class="btn-next btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
                                            <button style="display: none;" id="btn-enviarPub" type="submit" onclick="nextPrev(1)" class="btn-enviar btn-primary">Enviar</button>
                                        </div>
                                    </div>

                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;">
                                        <span class="step"></span>
                                        <span class="step"></span>


                                    </div>

                                </form>
                            </div>



                        </div>
                        <div class="modal-footer">


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

            <?php $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idA']);
            foreach ($pix as $cpa) :
            ?>
                <div class="modal fade" id="adicionarPix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Doação</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h1>Informações do artista para doação!</h1>
                                <div class="input-group mb-3">
                                    <input placeholder="<?php echo $cpa['nomeContaPixArtista'] ?>" name="nomeContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>

                                <div class="input-group mb-3">
                                    <input placeholder="<?php echo $cpa['tipoContaPixArtista'] ?>" name="tipoContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>

                                <div class="input-group mb-3">
                                    <input placeholder="<?php echo $cpa['chaveContaPixArtista'] ?>" name="chaveContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>


                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
            </script>

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

            <script>
                const btnPublicacoes = document.getElementById('btn-exibirPublicacoes');
                const btnEventos = document.getElementById('btn-exibirEventos');

                const divPublicacoesWeb = document.getElementById('publicacoes-web');
                const divEventosWeb = document.getElementById('eventos-web');

                divPublicacoesWeb.style.display = 'block';

                // Define os manipuladores de evento para os botões
                btnPublicacoes.addEventListener('click', function() {
                    // Exibe a seção de publicações
                    divPublicacoesWeb.style.display = 'block';
                    // Oculta a seção de eventos
                    divEventosWeb.style.display = 'none';
                });

                btnEventos.addEventListener('click', function() {
                    // Exibe a seção de eventos
                    divEventosWeb.style.display = 'flex';
                    // Oculta a seção de publicações
                    divPublicacoesWeb.style.display = 'none';
                });
            </script>
            <script src="assets/js/jquery-3.6.4.min.js"></script>

</body>

</html>