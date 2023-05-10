<?php include('../../../../Controller/VerificaLogado.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="shortcut icon" href="../assets/img/logomarca.png" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/conta-configuracoes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: #ECEBF3;
    }

    .voltar-dashboard {
        display: flex;
    }

    .voltar-dashboard p {
        margin: 0;
        margin-left: 5%;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
    }

    .box {
        background-color: white;
        border-radius: 20px;
        margin: 0;
        margin-top: 2%;
        margin-left: 22%;
        margin-right: 2%;
    }

    .explicacao-dashboard {
        background-color: #ECEBF3;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        display: flex;
        width: 100%;
        margin-top: 2%;
    }

    .explicacao-textos {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 5%;
    }

    .explicacao-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
    }

    .explicacao-descricao p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 30px;
        color: #656565;
    }

    .explicacao-img img {
        padding: 10%;
        margin-bottom: 5%;
        margin-top: 5%;
    }

    .cards-engajamentos {
        display: flex;
        width: 100%;
        margin-top: 2%;
    }

    .card-visitas {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 2%;
    }

    .visitas-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .visitas-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-curtidas {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 1%;
    }

    .curtidas-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .curtidas-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-compartilhamentos {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 1%;
    }

    .compartilhamentos-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .compartilhamentos-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-publicacoes {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 2%;
    }

    .publicacoes-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .publicacoes-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }
</style>

<body>




    <div class="sidebar">
        <div class="d-flex justify-center align-items-center flex-column sidebar-box">
            <div class="d-flex justify-center align-items-center logos">
                <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                <h1 class="logo-tipo">Getto</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                <ul class="list-group">
                    <a href="../../Feed/feed.php">
                        <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                    </a>
                    <a href="">
                        <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list" type="button">Amigos</button></li>
                    </a>
                    <a href="../../../../Evento/evento.php">
                        <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                    </a>
                    <a href="">
                        <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                    </a>
                    <a href="../configuracoes.php">
                        <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                    </a>
                    <a href="../../Feed/descobrir.php">
                        <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                    </a>
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
    <div class="box">
        <div class="voltar-dashboard">
            <img src="../assets/img/seta-esquerda.svg" alt="">
            <p>Dashboard</p>
        </div>
        <div class="explicacao-dashboard">
            <div class="explicacao-textos">
                <div class="explicacao-titulo">
                    <p>Aqui você poderá ver o seu engajamento!</p>
                </div>
                <div class="explicacao-descricao">
                    <p>Fique de olho e veja quando estiver abaixo que o esperado!</p>
                </div>
            </div>
            <div class="explicacao-img">
                <img src="../assets/img/img-dash.svg" alt="">
            </div>
        </div>

        <div class="cards-engajamentos">
            <div class="card-visitas">
                <div class="visitas-img">
                    <img src="../assets/img/olho-vermelho (2).png" alt="">
                </div>
                <div class="visitas-titulo">
                    <p>Visitas totais ao perfil</p>
                </div>
                <div class="visitas-quantidade">
                    <p>1000</p>
                </div>
            </div>
            <div class="card-curtidas">
                <div class="curtidas-img">
                    <img src="../assets/img/estrela-getto.png" alt="">
                </div>
                <div class="curtidas-titulo">
                    <p>Curtidas totais</p>
                </div>
                <div class="curtidas-quantidade">
                    <p>1000</p>
                </div>
            </div>
            <div class="card-compartilhamentos">
                <div class="compartilhamentos-img">
                    <img src="../assets/img/compartilhar.png" alt="">
                </div>
                <div class="compartilhamentos-titulo">
                    <p>Compartilhamentos totais</p>
                </div>
                <div class="compartilhamentos-quantidade">
                    <p>1000</p>
                </div>
            </div>
            <div class="card-publicacoes">
                <div class="publicacoes-img">
                    <img src="../assets/img/pincel.png" alt="">
                </div>
                <div class="publicacoes-titulo">
                    <p>Publicações totais</p>
                </div>
                <div class="publicacoes-quantidade">
                    <p>1000</p>
                </div>
            </div>
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