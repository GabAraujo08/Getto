<?php include('../../../Controller/VerificaLogado.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/configuracoes.css">
    <link rel="stylesheet" href="../Evento/assets/css/eventoArtista.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="sidebar">
        <div class="d-flex justify-center align-items-center flex-column sidebar-box">
            <div class="d-flex justify-center align-items-center logos">
                <h1 class="logo-tipo">Getto</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                <ul class="list-group">
                    <a href="../Feed/feed.php">
                        <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                    </a>
                   
                    <a href="../../../Perfil/PerfilArtista/Evento/eventoArtista.php">
                        <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                    </a>
                    <a href="">
                        <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                    </a>
                    <a href="configuracoes.php">
                        <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                    </a>
                    <a href="../Feed/descobrir.php">
                        <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                    </a>
                    <a href="../perfil.php">
                        <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                    </a>
                </ul>
            </div>
            <div class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
            </div>

            <div class="sair">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                    <img src="assets/img/sair.png">Sair
                </a>
            </div>

            <!-- <div class="container">
                <div class="d-flex justify-content-center align-items-center flex-column sugestao-seguidores">
                    <h1>Sugestão de seguidores!</h1>
                    <div class="d-flex justify-content-center align-items-center flex-column sugestao-box">
                        <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                            <div class="imagem-perfil-sugestao">
                                <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                            </div>
                            <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                                <div class="seguir-nickname">
                                    <div class="nickname"><h1>@Melis</h1></div>
                                    <div class="btn-seguir-sugestao">
                                        <button class="btn btn-primary" type="submit" value="Seguir">
                                    </div>
                                </div>
                                <div class="bio">
                                    <p>Cantor e compositor na zona leste.</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                            <div class="imagem-perfil-sugestao">
                                <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                            </div>
                            <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                                <div class="seguir-nickname">
                                    <div class="nickname"><h1>@Melis</h1></div>
                                    <div class="btn-seguir-sugestao">
                                        <button class="btn btn-primary" type="submit" value="Seguir">
                                    </div>
                                </div>
                                <div class="bio">
                                    <p>Cantor e compositor na zona leste.</p>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                            <div class="imagem-perfil-sugestao">
                                <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                            </div>
                            <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                                <div class="seguir-nickname">
                                    <div class="nickname"><h1>@Melis</h1></div>
                                    <div class="btn-seguir-sugestao">
                                        <button class="btn btn-primary" type="submit" value="Seguir">
                                    </div>
                                </div>
                                <div class="bio">
                                    <p>Cantor e compositor na zona leste.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                            <div class="imagem-perfil-sugestao">
                                <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                            </div>
                            <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                                <div class="seguir-nickname">
                                    <div class="nickname"><h1>@Melis</h1></div>
                                    <div class="btn-seguir-sugestao">
                                        <button class="btn btn-primary" type="submit" value="Seguir">
                                    </div>
                                </div>
                                <div class="bio">
                                    <p>Cantor e compositor na zona leste.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
    <div class="box">
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

        <div class="titulo-config">
            <h1>Configurações</h1>
        </div>
        <div class="lista-itens-config">
            <ul class="lista-config">
                <a href="conta-config/conta-config.php">
                    <li class="item-config">
                        <h2>Conta</h2> <img src="assets/img/icon-seta.svg" alt="">
                    </li>
                </a>
                <li class="item-config">
                    <h2>Privacidade</h2> <img src="assets/img/icon-seta.svg" alt="">
                </li>
                <li class="item-config">
                    <h2>Segurança</h2> <img src="assets/img/icon-seta.svg" alt="">
                </li>
                <li class="item-config">
                    <h2>Acessibilidade</h2> <img src="assets/img/icon-seta.svg" alt="">
                </li>
                <li class="item-config">
                    <h2>Recursos Adicionais</h2> <img src="assets/img/icon-seta.svg" alt="">
                </li>
            </ul>
        </div>
    </div>

    <!-- --------------------------- MODAL CRIAR PUBLICACAO ----------------------- -->


    <!-- Modal -->
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

     <!-- Modal -->
     <div class="modal fade" id="modalSairConta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sair da conta</h1>
                    <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Você deseja sair da sua conta?</p> 
                </div>
                <div class="modal-footer">
                    <form name="formExclui" action="../../../Controller/Logout.php" method="POST">
                        <button type="submit" class="btn btn-secondary">Sair da conta</button>
                    </form>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                </div>
            </div>
        </div>
    </div>


    <nav class="mobile-nav">
        <a href="../Feed/feed.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="../Feed/descobrir.php" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="../../../Perfil/PerfilArtista/Evento/eventoArtista.php" class="bloc-icon">
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
        <a href="#" class="bloc-icon">
            <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>