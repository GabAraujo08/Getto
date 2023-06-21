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
    <link rel="stylesheet" href="assets/css/perfilArtistaMobile.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/preview-criar-evento.css" />
    <link rel="stylesheet" href="assets/css/modal-criarPub.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
</head>

<body>

<style>
    /*------------------------------------- MODAL MOSTRAR EVENTO ----------------------------*/


    .rotate {
            animation: rotation 2.5s infinite linear;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

#modalMostrarEvento .modal-body .informacoes-mostrar-evento {
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-left: 10px;
}

#modalMostrarEvento .modal-body .informacoes-mostrar-evento .titulo-mostrar-evento h1{
	word-break: break-all;
}

#modalMostrarEvento .modal-body .informacoes-mostrar-evento .descricao-mostrar-evento p{
	word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .img-mostrar-evento
  img {
  height: 100%;
  width: 100%;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .perfil-usuario-mostrar-evento
  .img-perfil-mostrar-evento
  img {
  width: 65px;
  height: 65px;
  border-radius: 50%;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .perfil-usuario-mostrar-evento {
  display: flex;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .perfil-usuario-mostrar-evento
  .nickname-perfil
  h1 {
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

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .perfil-usuario-mostrar-evento
  .nickname-perfil {
  display: flex;
  align-items: center;
  margin-left: 5px;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .endereco-mostrar-evento p{
	word-break: break-all;
  }

#modalMostrarEvento .modal-body .conteudo-mostrar-evento {
  display: flex;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .titulo-mostrar-evento
  h1 {
  font-family: "InterRegular";
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
  margin-top: 5px;
  word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .horario-evento
  span {
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  line-height: 19px;
  color: #000000;
  margin-right: 5px;
  word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .horario-evento
  p {
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #000000;
  margin-right: 5px;
  word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .data-mostrar-evento {
  display: flex;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .data-mostrar-evento
  .data
  p {
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  color: #000000;
  word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .data-mostrar-evento
  .data
  span {
  margin-left: 5px;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .data-mostrar-evento
  .mes
  p {
  margin-left: 5px;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .footer-mostrar-evento {
    display: flex;
    flex-direction: column-reverse;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .footer-mostrar-evento
  .link-evento
  span {
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  color: #000000;
  word-break: break-all;
}

#modalMostrarEvento
  .modal-body
  .conteudo-mostrar-evento
  .informacoes-mostrar-evento
  .footer-mostrar-evento
  .link-evento
  p {
  color: blue;
  word-break: break-all;
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
                            <li class="list-group-item"><a href="Feed/feed.php"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></a></li>

                            <li class="list-group-item"><a href="Evento/eventoArtista.php"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></a></li>
                            <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                            <li class="list-group-item"><a href="Configuracoes/configuracoes.php"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></a></li>
                            <li class="list-group-item"><a href="Feed/descobrir.php"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></a></li>
                            <li class="list-group-item"><a href="perfil.php"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></a></li>
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
                                <div class="informacoes-perfil">
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


                        <div class="atividade-btn">
                            <h1 style="font-family: 'InterBold';font-size: 22px;margin-top: 10px;margin-bottom: 15px;">
                                Sua atividade
                            </h1>
                            <div class="btn-mudarExibicao">
                                <button id="btn-exibirPublicacoes" class="btn btn-primary">
                                    <img src="assets/img/publicacao-preto.svg" alt="">
                                </button>

                                <button id="btn-exibirEventos" class="btn btn-primary">
                                    <img src="assets/img/calendario-preto.svg" alt="">
                                </button>
                            </div>
                        </div>

                        <div class="atividade">

                            <div id="publicacoes-web" class="publicacoes publicacoes-web" >


                                <?php
                                require_once  '../../Dao/publicacaoDao.php';
                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idA']);
                                foreach ($mp as $p) {
                                    if ($p['idTipoMidia'] == 3) { ?>
                                        <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                    <?php
                                    } elseif ($p['idTipoMidia'] == 2) { ?>
                                        <video id="player-video" controls>
                                            <source src="assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>">
                                        </video>
                                    <?PHP
                                    } else { ?>



                                        <div class="audio-player">
                                            <div class="info-player">
                                                <div class="cover">
                                                    <img class="cover-img" src=".../../../../teste/teste.png">
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
                                            <audio class="audio-element" id="audio" src="assets/img/Pubs/<?php echo $p['arquivoMidia']; ?>"></audio>
                                        </div>



                                <?PHP
                                    }
                                }
                                ?>


                            </div>



                            <div id="eventos-web" class="eventos eventos-web" style="justify-content: center;">
                                <?php
                                require_once '../../Dao/EventoDao.php';

                                if (isset($_SESSION['idA'])) {
                                    $eventos = EventoDao::ListaMeusEventos($_SESSION['idA']);
                                    foreach ($eventos as $evento) : ?>
                                        <div class="img-evento">
                                            <img data-bs-toggle="modal" data-bs-target="#modalMostrarEvento" src="Evento/assets/img/<?PHP echo $evento['imagemEvento']; ?>" alt="">

                                            <h1>
                                                <?PHP echo $evento['tituloEvento']; ?>
                                            </h1>
                                        </div>
                                <?php endforeach;
                                } ?>
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


<!-- --------------------------- MODAL MOSTRAR PUBLICACAO ----------------------- -->

<div class="modal fade" id="modalMostrarPublicacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="img-mostrar-publicacao">
                        <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" id="img-mostrar-pub" alt="">
                    </div>
                    <div class="conteudo-mostrar-publicacao">
                        <div class="perfil-usuario">
                            <div class="img-perfil-mostrar-publicacao">
                                <img class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                            </div>
                            <div class="nickname-perfil">
                                <h1> <?PHP echo $_SESSION['nicknameUsuario']; ?></h1>
                            </div>
                            <div class="legenda-mostrar-publicacao">
                                <p>
                                    <?PHP echo $p['descPublicacao']; ?>!
                                </p>
                            </div>
                            <div class="titulo-comentarios">
                                <p>Comentários</p>
                            </div>
                            <div class="comentarios-mostrar-publicacao">
                                <?php
                                $comes = ComentarioDao::listarComentario($p['idPublicacao']);
                                if (!$comes) {
                                    echo ('Sem comentários');
                                } else {;
                                    foreach ($comes as $cs) {
                                ?>
                                        <div class="box-comentario">
                                            <?PHP
                                            if ($cs['nivelContaUsuario'] == 2) {
                                            ?>
                                                <img src="../assets/img/FotoPerfil/<?PHP echo $cs['fotoPerfilUsuario']; ?>" alt="">
                                            <?PHP
                                            } else {
                                            ?>
                                                <img src="../../PerfilVisitante/assets/img/FotoPerfil/<?PHP echo $cs['fotoPerfilUsuario']; ?>" alt="">
                                            <?PHP
                                            }
                                            ?>
                                            <div class="conteudo-comentario">
                                                <h1><?PHP echo $cs['nicknameUsuario']; ?></h1>
                                                <p><?PHP echo $cs['comentario']; ?></p>
                                                <?php
                                                $min = $cs['minutosComentario'];
                                                $mess = intval($min / 43200);
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
                                                    <button data-bs-toggle="modal" data-bs-target="#denunciaModal" id="myBtn" type="button"><i class="fa-solid fa-flag" style="color: #ef220b;"></i></button>
                                                </div>
                                            </div>
                                        </div>




                                <?php
                                    }
                                }
                                ?>
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

    <?php $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idA']);
    foreach ($pix as $cpa) :
    ?>

        <div class="modal fade" id="adicionarPix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>informações do artista para doação!</h1>
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
            var coverImg = player.querySelector('.cover-img');

            playButton.addEventListener('click', function() {
                toggleAudio(audio, playButton);
                toggleImageRotation(playButton, coverImg);
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

            function toggleImageRotation(button, image) {
                if (audio.paused) {
                    image.classList.remove('rotate');
                } else {
                    image.classList.add('rotate');
                }
            }
        });
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
    <!-- <script>
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
    </script> -->

    <script src="assets/js/exibicaoPerfil.js"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>

</body>

</html>