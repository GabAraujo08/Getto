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
    <link rel="stylesheet" href="assets/css/perfilArtistaMobile.css">
    <link rel="stylesheet" href="assets/css/preview-criar-evento.css" />
    <link rel="stylesheet" href="assets/css/modal-criarPub.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../assets/img/logomarca.png" />
    <link rel="stylesheet" href="../PerfilArtista/Evento/assets/css/eventoArtista.css">


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


                                <div class="div-btn-editar-perfil">
                                    <div class="area-doacao">
                                        <p class="alerta-pix">Você ainda não tem chave pix cadastrada.</p>

                                        <button style="position: relative;" class="btn btn-primary btn-doacao">
                                            <img src="assets/img/dollar.png" id="icone" alt="" srcset="">
                                            <p class="slide-in" id="pix-info" style="color: #000;
                          position: absolute;
                          top: 30%;
                          left: -250px;
                          font-family: 'InterBold';
                          display: none;
                          ">Sua chave pix é <strong>827.374.873-90</strong></p>
                                        </button>
                                        <button class="btn btn-primary btn-editar-perfil" value="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Editar perfil
                                        </button>
                                    </div>



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

                                <?php
                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idArtista']);
                                foreach ($mp as $p) {
                                ?>
                                    <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="">
                                <?PHP
                                }
                                ?>

                            </div>



                            <div id="eventos-web" class="col-4 eventos">


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

                            <div id="publicacoes-mobile" class="col-8 publicacoes">

                                <?php
                                $mp = PublicacaoDao::ListaMinhasPublicacao($_SESSION['idArtista']);
                                foreach ($mp as $p) {
                                    if ($p['idTipoMidia'] == 3) {
                                    ?>
                                        <img src="assets/img/Pubs/<?PHP echo $p['arquivoMidia']; ?>" alt="" class="img-publicacao">
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
                        <label>Chave PIX</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Sizing example input" name="chavePix" value="#" aria-describedby="inputGroup-sizing-default">

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
                    <form action="../../Controller/CriaEvento.php" name="criaEvento" id="criaEvento" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="lado-esquerdo">
                                <label>Inserir título: </label>
                                <div class="input-group mb-3">
                                    <input type="text" name="tituloEvento" class="form-control" placeholder="título">
                                </div>
                                <div class="hora">
                                    <div class="inicio">
                                        <label for="horario">Horário de início: </label>
                                        <div class="input-group mb-3">
                                            <input type="time" id="horario" name="horarioInicio" class="form-control" placeholder="início">
                                        </div>
                                    </div>
                                    <div class="termino">
                                        <label>Horário de término: </label>
                                        <div class="input-group mb-3">
                                            <input type="time" id="horario" name="horarioFim" class="form-control" placeholder="término">
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <label for="data">Selecione uma data:</label>
                                    <div class="input-group mb-3">
                                        <input type="date" name="dataEvento" id="data">
                                    </div>
                                    <label>Número de endereço: </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="numLog" placeholder="número de endereço">
                                    </div>
                                </div>
                                <label>Endereço: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="logradouro" placeholder="endereço">
                                </div>
                                <label>Bairro: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="bairroEvento" placeholder="bairro">
                                </div>
                                <label>CEP: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cepEvento" placeholder="cep">
                                </div>
                                <label>Cidade: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cidEvento" placeholder="cidade">
                                </div>
                                <label>Estado: </label>
                                <div class="input-group mb-3">
                                    <select id="estado-evento" name="estadoEvento" class="select-estado">
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
                                        <input type="file" name="imagemEvento" id="picture__input">
                                    </div>
                                </div>
                                <label>Descrição do evento</label>
                                <div class="input-group mb-3">
                                    <input type="textarea" class="form-control" name="descEvento" id="desc-evento" placeholder="descrição">
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