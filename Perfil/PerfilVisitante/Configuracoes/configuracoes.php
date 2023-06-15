<?php include('../../../Controller/VerificaLogado.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="assets/css/configuracoes.css">
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

   


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
                    <a href="../../../Evento/evento.php">
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
                    <a href="../perfil-visitante.php">
                        <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                    </a>
                </ul>
            </div>
            <div style="display: none;" class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
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
                <a href="conta-config/conta-config.php"><li class="item-config"><h2>Conta</h2> <img src="assets/img/icon-seta.svg" alt=""></li></a>
                <li class="item-config"><h2>Privacidade</h2>  <img src="assets/img/icon-seta.svg" alt=""></li>
                <li class="item-config"><h2>Segurança</h2>  <img src="assets/img/icon-seta.svg" alt=""></li>
                <li class="item-config"><h2>Acessibilidade</h2>  <img src="assets/img/icon-seta.svg" alt=""></li>
                <li class="item-config"><h2>Recursos Adicionais</h2>  <img src="assets/img/icon-seta.svg" alt=""></li>
            </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
        </script>
</body>
</html>