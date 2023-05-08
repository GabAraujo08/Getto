<?php include('../../../Controller/VerificaLogado.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="stylesheet" href="../assets/css/conta-configuracoes.css">
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
                    <li class="list-group-item"><button id="inicio" type="button"
                            class="btn btn-primary custom-btn-item">Início</button></li>
                    <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list"
                            type="button">Amigos</button></li>
                    <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list"
                            type="button">Eventos</button></li>
                    <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list"
                            type="button">Notificações</button></li>
                    <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list"
                            type="button">Configurações</button></li>
                    <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list"
                            type="button">Descobrir</button></li>
                </ul>
            </div>
            <div class="nova-pub">
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
    
    <nav class="mobile-nav">
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-calendario.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-notificacao.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-amigos.svg" alt="">
        </a>
        <a href="../configuracoes.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>
    
</body>

</html>