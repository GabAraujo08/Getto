<?php include('../../Controller/VerificaLogado.php');
require_once 'GlobalPerfil.php';
require_once '../../Dao/publicacaoDao.php';
require_once '../../Dao/Conexao.php';
require_once '../../Dao/CurtidaDao.php';
require_once '../../Dao/ComentarioDao.php';
require_once '../../Dao/ArtistaDao.php';
require_once '../../Dao/SeguidoresDao.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/perfilArtistaMobile.css">
    <link rel="stylesheet" href="assets/css/preview-criar-evento.css" />
    <link rel="stylesheet" href="assets/css/modal-criarPub.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
    <link rel="stylesheet" href="../PerfilArtista/Evento/assets/css/eventoArtista.css">


</head>

<body>



    <style>
        #inputCover {
            display: none;
        }

        label[for="inputCover"] {
            font-family: 'InterBold';
            /* Outros estilos aqui */
        }

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
                            <a href="Feed/feed.php">
                                <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                            </a>
                            <a href="../PerfilArtista/Evento/eventoArtista.php">
                                <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                            </a>
                            <a href="">
                                <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                            </a>
                            <a href="Configuracoes/configuracoes.php">
                                <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                            </a>
                            <a href="Feed/descobrir.php">
                                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                            </a>

                            <a href="#">
                                <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                            </a>
                        </ul>

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

                    <!-- ---------------------------    BOTAO SAIR E PERFIL --------------------------- -->

                    <!-- <div class="dropup-center dropup">
                        <div class="btn-perfil-sair" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-perfil-btn">
                                <img src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
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
                                    <img src="assets/img/btn-dropdown.svg" alt="">
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
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
                <div class="div-logo-marca">
                    <div class="logo-marca">
                        <img style="display: none" src="assets/img/logomarca.png" alt="">
                    </div>
                </div>
                <div class="area-perfil">
                    <div class="box-perfil">
                        <div class="informacao-perfil">
                            <div class="papel-parede-img-perfil">
                                <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="assets/img/FotoCapa/<?PHP echo $_SESSION['papelParedeUsuario']; ?>" alt="">
                                <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                            </div>
                            <div class="area-bio">
                                <div class="informacoes-perfil">


                                    <div class="usuario-bio">
                                        <div class="area-nick-nome">
                                            <div class="nick">
                                                <h1> <?PHP echo $_SESSION['nicknameUsuario']; ?></h1>
                                            </div>
                                            <div class="nome">
                                                <h1>(<?PHP echo $_SESSION['nomeUsuario']; ?>)</h1>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p><?PHP echo $_SESSION['bioArtista']; ?></p>
                                        </div>
                                    </div>

                                    <div class="desc-perfil">
                                        <div class="seguindo-seguidores">
                                            <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#seguindoModal" class="seguindo">
                                                <?PHP
                                                $seguimores = SeguidoresDao::consultarSeguidores($_SESSION['idArtista']);
                                                $seguindo = SeguidoresDao::consultarSeguindo($_SESSION['idUsuario']);
                                                ?>
                                                <div class="seguindo-numero">
                                                    <p><?php
                                                        echo $seguindo;
                                                        ?></p>
                                                </div>
                                                <div class="seguindo-text">
                                                    <h1>Seguindo</h1>
                                                </div>
                                            </div>
                                            <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#seguidoresModal" class="seguidores">

                                                <div class="seguidores-numero">
                                                    <p><?PHP
                                                        echo $seguimores;
                                                        ?></p>
                                                </div>
                                                <div class="seguidores-text">
                                                    <h1>Seguidores</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="div-btn-editar-perfil">
                                    <div class="area-doacao">
                                        <?php
                                        $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idArtista']);
                                        if (empty($pix)) {
                                            echo '<p class="alerta-pix">Você ainda não tem chave pix cadastrada.</p>
                                            <button data-bs-toggle="modal" data-bs-target="#adicionarPix" style="position: relative;" class="btn btn-primary btn-doacao">
                <img src="assets/img/moeda.png" id="icone" alt="" srcset="">
                
            </button>';
                                        } else {
                                            foreach ($pix as $cpa) {
                                                echo '
            <button data-bs-toggle="modal" data-bs-target="#adicionarPix" style="position: relative;" class="btn btn-primary btn-doacao">
                <img src="assets/img/moeda.png" id="icone" alt="" srcset="">
                
            </button>';
                                            }
                                        }
                                        ?>

                                        <button class="btn btn-primary btn-editar-perfil" value="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Editar perfil
                                        </button>
                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="atividade-btn">
                            <h1 style="font-family: 'InterBold';font-size: 22px;margin-top: 10px;margin-bottom: 15px;">
                                Suas Publicações
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

                            <div id="publicacoes-web" class="publicacoes publicacoes-web">

                                <?php
                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idArtista']);
                                foreach ($mp as $p) {
                                    if ($p['idTipoMidia'] == 3) {
                                ?>
                                        <img data-bs-toggle="modal" data-bs-target="#modalMostrarPublicacao" src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                    <?php
                                    } elseif ($p['idTipoMidia'] == 2) {
                                    ?>
                                        <video id="player-video" controls>
                                            <source src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>">
                                        </video>
                                    <?PHP
                                    } else {
                                    ?>
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


                                <?php require_once '../../Dao/EventoDao.php';

                                $eventos = EventoDao::ListaMeusEventos($_SESSION['idArtista']);
                                foreach ($eventos as $evento) : ?>
                                    <div class="img-evento">
                                        <img data-bs-toggle="modal" data-bs-target="#modalMostrarEvento" src="Evento/assets/img/<?PHP echo $evento['imagemEvento']; ?>" alt="">






                                        <h1>
                                            <?PHP echo $evento['tituloEvento']; ?>
                                        </h1>


                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div id="publicacoes-mobile" class="col-8 publicacoes">

                                <?php
                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idArtista']);
                                print_r($mp);
                                foreach ($mp as $p) {

                                ?>
                                    <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                    <?PHP

                                    if ($p['idTipoMidia'] == 1) {
                                    ?>
                                        <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                        <audio id="player-audio" controls>
                                            <source src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>">
                                        </audio>
                                    <?PHP
                                    } else if ($p['idTipoMidia'] == 2) {
                                    ?>
                                        <video id="player-video" controls>
                                            <source src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>">
                                        </video>
                                    <?PHP
                                    } else {
                                    ?>

                                        <audio id="player-audio" controls>
                                            <source src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>">
                                        </audio>
                                        <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="" class="img-publicacao">
                                <?PHP
                                    }
                                }

                                ?>

                            </div>



                            <div id="eventos-mobile" style="display: none;" class="col-4 eventos">


                                <?php require_once '../../Dao/EventoDao.php';

                                $eventos = EventoDao::ListaMeusEventos($_SESSION['idArtista']);
                                foreach ($eventos as $evento) : ?>
                                    <div class="img-evento">
                                        <img src="Evento/assets/img/<?PHP echo $evento['imagemEvento']; ?>" alt="">






                                        <h1>
                                            <?PHP echo $evento['tituloEvento']; ?>
                                        </h1>


                                    </div>
                                <?php endforeach; ?>
                            </div>







                        </div>

                    </div>
                </div>






            </div>
        </div>
    </div>
    </div>
    </div>



    <nav class="mobile-nav">
        <a href="Feed/feed.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="Feed/descobrir.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="../PerfilArtista/Evento/eventoArtista.php" class="bloc-icon">
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
        <a href="Configuracoes/configuracoes.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>





    <!-- --------------------------- MODAL EDITAR PERFIL ----------------------------------- -->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form name="formInfo" action="UpdateUsuario.php" method="POST">
                        <label>Nome:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="nomeUsuario" value="<?PHP echo $_SESSION['nomeUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>
                        <label>Nickname:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="nicknameUsuario" value="<?PHP echo $_SESSION['nicknameUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>

                        <label>Bio:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="bioArtista" value="<?PHP echo $_SESSION['bioArtista']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>
                        <label>Genero:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="generoArtista" value="<?PHP echo $_SESSION['generoArtista']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>
                        <label>Telefone:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="foneUsuario" value="<?PHP echo $_SESSION['foneUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>
                        <label>Estado:</label>
                        <div class="form-floating mb-3" style="display: flex;
                                          flex-direction: column;">

                            <select id="estado" name="estadoUsuario" class="select-estado">
                                <option value="<?PHP echo $_SESSION['estadoUsuario']; ?>"><?PHP echo $_SESSION['estadoUsuario']; ?></option>
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
                        <label>Cidade:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="cidadeUsuario" value="<?PHP echo $_SESSION['cidadeUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>



                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <!-- ------------------------------ MODAL EDITAR PAPEL DE PAREDE ------------------------------------- -->


    <div class="modal fade" id="modalEditarPapelParede" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mudar capa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formUpdateCapa" name="formUpdateCapa" enctype="multipart/form-data" action="UpdateFotoCapa.php" method="POST">
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
                    <div class="modal-footer">
                        <button type="button" id="btn-papel-parede-modal">Escolha uma foto</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- ------------------------------ MODAL EDITAR FOTO DE PERFIL ------------------------------------- -->


    <div class="modal fade" id="modalEditarFotoPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mudar foto de perfil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form name="formUpdateFotoPerfil" enctype="multipart/form-data" action="UpdateFotoPerfil.php" method="POST">
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
                    <div class="modal-footer">
                        <button type="button" id="btn-perfil-modal">Escolha uma foto</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- --------------------------- MODAL MOSTRAR PUBLICACAO ----------------------- -->

    <div class="modal fade" id="modalMostrarPublicacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="conteudo-mostrar-publicacao">
                        <div class="img-mostrar-publicacao" style="width: 50%;">
                            <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" id="img-mostrar-pub" alt="">
                        </div>
                        <div class="informacoes-mostrar-publicacao" style="width: 50%;">
                            <div class="perfil-usuario-mostrar-publicacao">
                                <div class="img-perfil-mostrar-publicacao">
                                    <img class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                                </div>
                                <div class="nickname-perfil">
                                    <h1> <?PHP echo $_SESSION['nicknameUsuario']; ?></h1>
                                </div>
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
                                                <img src="../assets/img/FotoPerfil/<?PHP echo $cs['fotoPerfilUsuario']; ?>" alt="" style="width: 65px; height: 65px; border-radius: 50%;">
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


    <!-- --------------------------- MODAL CRIAR PUBLICACAO ----------------------- -->



    <div class="modal fade" id="modalCriarPub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
                        <form id="regForm" method="POST" enctype="multipart/form-data" action="../../Controller/cadastrarPublicacao.php">


                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <textarea placeholder="No que você está pensando?" name="descPub" id="" cols="40" rows="10"></textarea>
                                <h1 class="title-form">Selecione o tipo de mídia</h1>
                                <div class="wrapper">

                                    <input type="radio" name="select" id="option-1" checked>
                                    <input type="radio" name="select" id="option-2">
                                    <input type="radio" name="select" id="option-3">
                                    <label for="option-1" class="option option-1">
                                        <!-- <div class="dot"></div> -->
                                        <span>Envie o arquivo</span>
                                    </label>
                                    <!-- <label for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                        <span>Vídeo</span>
                                    </label>
                                    <label for="option-3" class="option option-3">
                                        <div class="dot"></div>
                                        <span>Música</span>
                                    </label> -->

                                </div>
                                <input type="file" name="arquivo" id="inputFile" style="display:none;">

                                <div class="privacidade">
                                    <select class="form-select" name="idTipoMidia" aria-label="Default select example">
                                        <option value="#">Selecionar...</option>
                                        <?PHP
                                        $mm = TipoMidiaDao::ListaTipoMidia();
                                        foreach ($mm as $m) {
                                        ?>
                                            <option value="<?PHP echo $m['idTipoMidia']; ?>"><?PHP echo $m['nomeTipoMidia']; ?></option>
                                        <?PHP
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div id="previewContainer"></div>
                                <div id="previewCover"></div>

                                <!--<input type="file" style="display: none;" id="inputCapa" name="capaMusica">-->





                            </div>

                            <div class="tab">
                                <h1 class="title-form">Qual o tipo da sua publicação?</h1>
                                <select style="margin-bottom: 10px;" name="idTipoArte" class="form-select" aria-label="Default select example">
                                    <option value="#">Selecionar...</option>
                                    <?php
                                    $t = TipoArteDao::ListaTag();
                                    foreach ($t as $tag) {
                                    ?>
                                        <option value="<?PHP echo $tag['idTipoArte']; ?>"><?PHP echo $tag['nomeTipoArte']; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>


                            <div style="overflow:auto; margin-top: 10px;">
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



    <!-- ---------------------------- MODAL SEGUIDORES ------------------------- -->


    <div class="modal fade" id="seguidoresModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Pessoas que estão seguindo você </h1>
                    <div class="box-btn-fechar">
                        <div class="box-input-search">
                            <form action="">
                                <input class="form-control" placeholder="Busque algúem..." type="search">
                                <button type="submit">
                            </form>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            </button>

                        </div>


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                </div>
                <div class="modal-body">
                    <?PHP
                    $ss = SeguidoresDao::SeusSeguidores($_SESSION['idArtista']);
                    foreach ($ss as $sss) {
                    ?>
                        <div class="box-comentario">
                            <div class="imagem-nick">
                                <?PHP
                                if ($sss['nivelContaUsuario'] == 2) {
                                ?>
                                    <img src="assets/img/FotoPerfil/<?PHP echo $sss['fotoPerfilUsuario']; ?>" alt="">
                                <?PHP
                                } else {
                                ?>
                                    <img src="../PerfilVisitante/assets/img/FotoPerfil/<?PHP echo $sss['fotoPerfilUsuario']; ?>" alt="">
                                <?PHP
                                }
                                ?>


                                <div class="conteudo-comentario">
                                    <h1><?PHP echo $sss['nomeUsuario'] ?></h1>
                                    <p><?PHP echo $sss['nicknameUsuario'] ?></p>




                                </div>
                            </div>

                            <div class="opcoes">

                                <button>
                                    <i class="fa-solid fa-user-plus"></i>
                                </button>

                                <button id="btn-bloquear">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                                <button id="btn-excluir">
                                    <i class="fa-solid fa-trash"></i>
                                </button>


                            </div>

                            <div id="confirmacao-excluir" style="display: none;" class="confirmacao-excluir">
                                <p>Tem certeza que quer <b>excluir</b><?PHP echo $sss['nicknameUsuario'] ?></p>
                                <div class="btn-confirmacao-excluir">
                                    <button>
                                        <i class="fa-solid fa-heart-crack"></i>
                                        <p>Sim</p>
                                    </button>

                                    <button id="btn-confirmar">
                                        <i class="fa-solid fa-face-smile-beam"></i>
                                        <p>Não</p>
                                    </button>
                                </div>

                            </div>

                            <div id="confirmacao-bloqueio" style="display: none;" class="confirmacao-excluir">
                                <p>Tem certeza que quer <b>bloquear</b><?PHP echo $sss['nicknameUsuario'] ?></p>
                                <div class="btn-confirmacao-excluir">
                                    <button>
                                        <i class="fa-solid fa-heart-crack"></i>
                                        <p>Sim</p>
                                    </button>

                                    <button id="btn-confirmarBloqueio">
                                        <i class="fa-solid fa-face-smile-beam"></i>
                                        <p>Não</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?PHP
                    }
                    ?>

                    <!-- <div class="confirmacao-excluir">
                            <p>Tem certeza que quer excluir @guuss</p>
                            <div class="btn-confirmacao-excluir">
                                <button>
                                <i class="fa-solid fa-heart-crack"></i>
                                    <p>Sim</p>
                                </button>

                                <button>
                                <i class="fa-solid fa-face-smile-beam"></i>
                                    <p>Não</p>
                                </button>
                            </div>

                        </div> -->
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
    </div>


    <?PHP   ?>


    <!-- ---------------------------- MODAL SEGUINDO ------------------------- -->

    <div class="modal fade" id="seguindoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Você está seguindo... </h1>
                    <div class="box-btn-fechar">
                        <div class="box-input-search">
                            <form action="">
                                <input class="form-control" placeholder="Busque algúem..." type="search">
                                <button type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>

                        </div>


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                </div>
                <div class="modal-body">

                    <?PHP
                    $es = SeguidoresDao::EstouSeguindo($_SESSION['idUsuario']);
                    foreach ($es as $ess) {
                    ?>
                        <div class="box-comentario">
                            <div class="imagem-nick">
                                <img src="assets/img/FotoPerfil/<?PHP echo $ess['fotoPerfilUsuario'] ?>" alt="">
                                <div class="conteudo-comentario">
                                    <h1><?PHP echo $ess['nomeUsuario'] ?></h1>
                                    <p><?PHP echo $ess['nicknameUsuario'] ?></p>
                                </div>
                            </div>
                            <div class="opcoes">
                                <button id="btn-bloquear">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                                <button id="btn-excluir">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>

                            <div id="confirmacao-excluir" style="display: none;" class="confirmacao-excluir">
                                <p>Tem certeza que quer <b>excluir</b><?PHP echo $ess['nicknameUsuario'] ?></p>
                                <div class="btn-confirmacao-excluir">
                                    <button>
                                        <i class="fa-solid fa-heart-crack"></i>
                                        <p>Sim</p>
                                    </button>

                                    <button id="btn-confirmar">
                                        <i class="fa-solid fa-face-smile-beam"></i>
                                        <p>Não</p>
                                    </button>
                                </div>

                            </div>

                            <div id="confirmacao-bloqueio" style="display: none;" class="confirmacao-excluir">
                                <p>Tem certeza que quer <b>bloquear</b> <?PHP echo $ess['nicknameUsuario'] ?></p>
                                <div class="btn-confirmacao-excluir">
                                    <button>
                                        <i class="fa-solid fa-heart-crack"></i>
                                        <p>Sim</p>
                                    </button>

                                    <button id="btn-confirmarBloqueio">
                                        <i class="fa-solid fa-face-smile-beam"></i>
                                        <p>Não</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                    <?PHP
                    }
                    ?>


                    <!-- <div class="confirmacao-excluir">
                            <p>Tem certeza que quer excluir @guuss</p>
                            <div class="btn-confirmacao-excluir">
                                <button>
                                <i class="fa-solid fa-heart-crack"></i>
                                    <p>Sim</p>
                                </button>

                                <button>
                                <i class="fa-solid fa-face-smile-beam"></i>
                                    <p>Não</p>
                                </button>
                            </div>

                        </div> -->
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
    </div>


    <!-- -------------------------------------- MODAL ADD PIX ---------------------------------------- -->

    <?php
    $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idArtista']);

    $cadastrado = !empty($pix);

    if (!$cadastrado) {
    ?>
        <div class="modal fade" id="adicionarPix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../../Controller/CadastraConta.php" method="Post" name="contapix" id="contapix">
                            <h1>Adicione suas informações para doação!</h1>
                            <div class="input-group mb-3">

                                <input placeholder="Nome da conta" name="nomeContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>

                            <div class="input-group mb-3">

                                <select name="tipoContaPixArtista" id="">
                                    <option value="CPF">CPF</option>
                                    <option value="CNPJ">CNPJ</option>
                                    <option value="TELEFONE">TELEFONE</option>
                                    <option value="EMAIL">EMAIL</option>
                                    <option value="ALEATORIA">ALEATORIA</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">

                                <input placeholder="Chave PIX" name="chaveContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>


                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    <?php }  ?>

    <?php $pix = ContaPixArtistaDao::ListaContaPix($_SESSION['idArtista']); ?>

    <div class="modal fade" id="adicionarPix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="UpdateContaPix.php " method="Post" name="contapix" id="contapix">
                        <h1>Adicione suas informações para doação!</h1>
                        <div class="input-group mb-3">

                            <input value="<?php echo $cpa['nomeContaPixArtista'] ?>" placeholder="Nome da conta" name="nomeContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">

                            <select name="tipoContaPixArtista" id="">
                                <option value="<?php echo $cpa['tipoContaPixArtista']; ?>"><?php echo $cpa['tipoContaPixArtista']; ?></option>
                                <option value="CPF">CPF</option>
                                <option value="CNPJ">CNPJ</option>
                                <option value="TELEFONE">TELEFONE</option>
                                <option value="EMAIL">EMAIL</option>
                                <option value="ALEATORIA">ALEATORIA</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">

                            <input value="<?php echo $cpa['chaveContaPixArtista'] ?>" placeholder="Chave PIX" name="chaveContaPixArtista" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>


                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
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


    <!-- ------------------------- MODAL ADICIONAR CONTA BANCARIA ----------------------------- -->

    <!-- <div class="modal fade" id="modalDoacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8f56ddd91.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script> -->


    <script src="assets/js/perfil.js"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/exibicaoPerfil.js"></script>
    <script src="assets/js/preview.js"></script>


</body>

</html>