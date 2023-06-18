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
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/perfil-visitante.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
</head>

<body>




    <div class="d-flex">
        <div class="area-sidebar">
            <div class="sidebar">
                <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                    <div class="d-flex justify-center align-items-center logos">
                        <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                        <!-- <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca"> -->
                        <h1 class="logo-tipo">Getto</h1>
                    </div>
                    <div style="margin-top: 30px;" class="d-flex justify-content-center align-items-center flex-column list-group-box">
                        <ul class="list-group">
                            <a href="Feed/feed.php">
                                <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                            </a>
                            <a href="Evento/eventoVisitante.php">
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
                    </div>
                    <a class="link-sair" data-bs-toggle="modal" data-bs-target="#modalSairConta" href="#">
                        <div class="d-flex flex-row justify-content-center align-items-center btn-sair">
                            <img src="assets/img/icon-logout.svg" alt="Sair">
                            <h1>Sair</h1>
                        </div>
                    </a>
                </div>
            </div>

            <a href="">
                <div class="d-flex flex-row justify-content-center align-items-center btn-sair">
                    <img src="assets/img/icon-logout.svg" alt="Sair">
                    <h1>Sair</h1>
                </div>
            </a>
        </div>





        <div class="box-container">
            <div class="container-fluid">
                <div class="div-logo-marca">
                    <div class="logo-marca">
                    </div>
                </div>
                <div class="area-perfil">
                    <div class="box-perfil">
                        <div class="informacao-perfil">
                            <div class="papel-parede-img-perfil">
                                <img data-bs-toggle="modal" data-bs-target="#modalEditarPapelParede" class="img papel-parede-img" src="assets/img/FotoCapa/<?PHP echo $_SESSION['papelParedeUsuario']; ?>" alt="">
                                <img data-bs-toggle="modal" data-bs-target="#modalEditarFotoPerfil" id="perfil-img" class="img perfil-img" src="assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                            </div>
                            <div class="area-bio">
                                <div class="usuario-bio">
                                    <div class="area-nick-nome">
                                        <div class="nick">
                                            <h1> <?PHP echo $_SESSION['nicknameUsuario']; ?> </h1>
                                        </div>
                                        <div class="nome">
                                            <h1>( <?PHP echo $_SESSION['nomeUsuario']; ?> )</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc-perfil">
                                    <div class="seguindo-seguidores">
                                        <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#seguindoModal" class="seguindo">
                                            <?PHP
                                            $seguindo = SeguidoresDao::consultarSeguindo($_SESSION['idUsuario']);
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
                                    </div>
                                </div>

                                <div class="div-btn-editar-perfil">
                                    <button class="btn btn-primary btn-editar-perfil" value="" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil">
                                        Editar perfil
                                    </button>
                                </div>
                            </div>



                        </div>

                        <div class="atividade-btn">
                            <h1 style="font-family: 'InterBold';font-size: 22px;margin-top: 10px;margin-bottom: 15px;">
                                Suas interações
                            </h1>
                            <div class="btn-mudarExibicao">
                                <button id="btn-exibirPublicacoes" class="btn btn-primary">
                                    <img src="../PerfilArtista/assets/img/publicacao-preto.svg" alt="">
                                </button>

                                <button id="btn-exibirEventos" class="btn btn-primary">
                                    <img src="../PerfilArtista/assets/img/calendario-preto.svg" alt="">
                                </button>
                            </div>
                        </div>

                        <div class="atividade">

                            <div id="publicacoes-web" class="publicacoes publicacoes-web">

                                <?php
                                $pc = PublicacaoDao::ListaPublicacaoCurti($_SESSION['idUsuario']);
                                foreach ($pc as $pcc) {
                                    if ($pcc['idTipoMidia'] == 3) {
                                ?>
                                        <img src="../PerfilArtista/assets/img/Pubs/<?php echo $pcc['arquivoMidia']; ?>" alt="">

                                    <?php
                                    } else if ($pcc['idTipoMidia'] == 2) {
                                    ?>
<<<<<<< HEAD
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
                                ?>

                            </div>
                            <div id="eventos-web" class="eventos eventos-web">

                                <?php require_once '../../Dao/EventoDao.php';

                                $eventos = EventoDao::ListaConfirmaEvento($_SESSION['idUsuario']);
                                foreach ($eventos as $evento) : ?>
                                    <div class="img-evento">
                                        <img src="../PerfilArtista/Evento/assets/img/<?php echo $evento['imagemEvento']; ?>" alt="">

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



    <nav class="mobile-nav">
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
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





    <!-- --------------------------- MODAL EDITAR PERFIL ----------------------------------- -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form name="formInfo" enctype="multipart/form-data" action="UpdateUsuario.php" method="POST">
                        <label>Nome:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" name="nomeUsuario" value="<?PHP echo $_SESSION['nomeUsuario']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        </div>
                        <label>Nickname:</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="nicknameUsuario" value="<?PHP echo $_SESSION['nicknameUsuario']; ?>" aria-describedby="inputGroup-sizing-default">

                        </div>


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



                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- ------------------------------ MODAL EDITAR PAPEL DE PAREDE ------------------------------------- -->


    <div class="modal fade" id="modalEditarPapelParede" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
        <div class="modal-dialog modal-lg">
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
                                <img src="../PerfilArtista/assets/img/FotoPerfil/<?php echo $ess['fotoPerfilUsuario'] ?>" alt="">

                                <div class="conteudo-comentario">
                                    <h1><?PHP echo $ess['nomeUsuario'] ?></h1>
                                    <p><?PHP echo $ess['nicknameUsuario'] ?></p>




                                </div>
                            </div>

                            <div class="opcoes">
                                <button id="btn-bloquearSeguindo">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                                <button id="btn-excluirSeguindo">
                                    <i class="fa-solid fa-trash"></i>
                                </button>


                            </div>

                            <div id="confirmacao-excluirSeguindo" style="display: none;" class="confirmacao-excluir">
                                <p>Tem certeza que quer <b>excluir</b><?PHP echo $ess['nicknameUsuario'] ?></p>
                                <div class="btn-confirmacao-excluir">
                                    <button>
                                        <i class="fa-solid fa-heart-crack"></i>
                                        <p>Sim</p>
                                    </button>

                                    <button id="btn-confirmar-excluir">
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
                        <button style="background: rgb(214, 37, 37)!important;" type="submit" class="btn btn-secondary">Sair</button>
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

    <script src="assets/js/perfil.js"></script>
    <script src="../PerfilArtista/assets/js/exibicaoPerfil.js"></script>


</body>

</html>