<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logomarca.svg" type="imagem">
    <title>Conheça o Getto</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/gettostyle.css">



</head>

<body>
    <div class="container-fluid main">
        <nav class="navbar navbar-expand-lg bg-body-transparent">
            <div class="container-fluid">
                <a target="_blank" class="navbar-brand" href="Administrador/login-adm.php"><img class="img-fluid" src="assets/img/logomarca.svg"></a>
                <header class="header">
                    <div class="header_in">
                        <button type="button" class="toggle" id="toggle">
                            <span></span>
                        </button>
                    </div>
                </header>


                <div class="sidebar" id='sidebar'>

                    <div class="d-flex justify-content-center logomarca-sidebar">
                        <a href="Administrador/login-adm.php"><img class="img-fluid" src="assets/img/logomarca.svg"></a>
                    </div>

                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#O-que-e">O que é?</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#por-que-usar">Por que usar?</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#area-artista">Área do artista</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#negros-arte">Negros na arte</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#torne-se-parceiro">Torne-se
                                parceiro</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Empresa/index.php">Site da Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registroVisitante.php">Cadastre-se</a>
                        </li>


                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="listinha">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#O-que-e">O que é?</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#por-que-usar">Por que usar?</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#area-artista">Área do artista</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#negros-arte">Negros na arte</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#torne-se-parceiro">Torne-se
                                parceiro</a>
                        </li>



                    </ul>

                </div>

                <div class="buttons-nav">
                    <a target="_blank" href="registroVisitante.php" class="btn-cadastro">
                        Cadastre-se
                    </a>
                    <a href="" class="site-empresa">
                        Site da empresa
                    </a>
                </div>
            </div>
        </nav>

        <div class="primeira-parte">
            <div class="conteudo-primeira-parte">
                <div class="logotipo">
                    <h1>Getto</h1>
                </div>
                <div class="btn-primeira-parte">
                    <button>Conhecer</button>
                </div>
            </div>
            <div class="img-pintora">
                <img src="assets/img/pintora.svg" alt="" id="pintora">
            </div>
        </div>


        <div class="d-flex funcionalidades">
            <div class="d-flex item-funcionalidade">
                <div class="img-icon">
                    <img class="icons" src="assets/img/icon-design.svg">
                </div>
                <div class="text">
                    <p>Design elegante</p>
                </div>
            </div>

            <div class="d-flex item-funcionalidade">
                <div class="img-icon">
                    <img class="icons" src="assets/img/icon-megafone.svg">
                </div>
                <div class="text">
                    <p>Divulgação artística</p>
                </div>
            </div>

            <div class="d-flex item-funcionalidade">
                <div class="img-icon">
                    <img class="icons" src="assets/img/icon-coracao.svg">
                </div>
                <div class="text">
                    <p>Ambiente inclusivo</p>
                </div>
            </div>

            <div class="d-flex item-funcionalidade">
                <div class="img-icon">
                    <img class="icons" src="assets/img/icon-monitor.svg">
                </div>
                <div class="text">
                    <p>Website dinâmico</p>
                </div>
            </div>

            <div class="d-flex item-funcionalidade">
                <div class="img-icon">
                    <img class="icons" src="assets/img/celular.svg">
                </div>
                <div class="text">
                    <p>Dispositivos mobile</p>
                </div>
            </div>
        </div>





        <section id="O-que-e">
            <div class="segunda-parte">
                <div class="img-altofalante">
                    <img src="assets/img/altofalante.svg" id="altofalante">
                </div>
                <div class="h1-oque-e">
                    <h1>O que é?</h1>
                    <p>O Getto é uma rede social desenvolvida entre os anos de 2022 e 2023. O projeto nasceu da
                        necessidade
                        que seus criadores tinham de combater as discriminações algorítmicas nas plataformas de mídias e
                        tem
                        como principal proposta criar um ambiente confiável e seguro para a divulgação de conteúdos
                        artísticos de diversos tipos de segmentos produzidos por artistas pretos. </p>
                </div>
            </div>
        </section>


        <section>
            <div class="terceira-parte" id="por-que-usar">
                <div class="retangulo">
                    <div class="por-que-usar">
                        <h1>Por que Usá-lo?</h1>
                        <ul>
                            <li>Incentiva a diversidade na arte</li>
                            <li>Sistema de doações para artistas</li>
                            <li>Software de requisitos acessíveis</li>
                            <li>Focado na divulgação artística preta.</li>
                        </ul>
                    </div>
                </div>
                <div class="imagem-seguidor">
                    <img src="assets/img/seguidor.svg">
                </div>
            </div>
        </section>


        <section>
            <div class="quarta-parte">
                <div class="area-artista-img">
                    <img src="assets/img/areadoartista.png" id="area-artista">
                </div>
                <div class="area-artista-text">
                    <h1>Área do Artista</h1>
                    <p class="text-artist">
                        O Getto é uma plataforma completa e
                        atenciosa que busca estar sempre em
                        sintonia com seus artistas. Caso você ainda não saiba como, ou queira se
                        aprofundar, ao clicar no botão abaixo você ficará por dentro da forma como
                        funciona a divulgação dos trabalhos artísticos em nossa rede, e das
                        funcionalidades desta, como por
                        exemplo nossas funções de gerenciamento de eventos e sistema de doações.
                    </p>
                    <div class="btn-verifica-artista">
                        <button type="button" class="btn btn-verificar" data-toggle="modal" data-target="#modal-artista">
                            Verificar
                        </button>
                    </div>
                </div>




                <div id="modal-artista" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content" style="background-color: #53035B;">
                            <div class="modal-header" style="border-bottom: none;">

                            </div>
                            <div class="modal-body">
                                <div class="card-artista">


                                    <div class="card-a">
                                        <div class="card-body">
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="img-card">
                                            <img src="assets/img/perfil.png" class="card-img-top" alt="..." style="width: 18%;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Perfil do Artista</h5>
                                            <p class="card-text">
                                                Para abir uma conta de artista no Getto é
                                                necessário uma avaliação.
                                                Tudo o que você terá que fornecer
                                                para nossa equipe são dados
                                                padrão e uma foto sua sem edições.
                                                Uma vez que nosso Adm aprove sua
                                                conta, você está livre para povoar
                                                seu perfil.
                                            </p>
                                        </div>
                                    </div>


                                    <div class="card-a">
                                        <div class="card-body">
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="img-card">
                                            <img src="assets/img/divulgação.png" class="card-img-top" alt="..." style="width: 18%;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Divulgações</h5>
                                            <p class="card-text">
                                                Uma vez que seu perfil de artista
                                                tenha sido aprovado, você só
                                                precisa upar seu conteúdo através de
                                                um post, ou através dos momentos.
                                                Ah! Não se esqueça de usar as
                                                tags em suas publicações para
                                                ajudar seu conteudo a alcançar
                                                mais pessoas!
                                            </p>
                                        </div>
                                    </div>


                                    <div class="card-a">
                                        <div class="card-body">
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="img-card">
                                            <img src="assets/img/doações.png" class="card-img-top" alt="..." style="width: 18%;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">área de Doações</h5>
                                            <p class="card-text">
                                                Para incentivar nossos criadores de conteúdo, existe
                                                em nosso sistema uma aba de
                                                doações.
                                                Nela é possível exibir sua
                                                chave-pix ou o número de uma
                                                conta e receber doações de
                                                seus seguidores.
                                                Lembre-se que você, artista, também pode doar.
                                            </p>
                                        </div>
                                    </div>


                                    <div class="card-a">
                                        <div class="card-body">
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="img-card">
                                            <img src="assets/img/evento.png" class="card-img-top" alt="..." style="width: 18%;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Área de Eventos</h5>
                                            <p class="card-text">
                                                A área de eventos existe
                                                para ser uma grande aliada dos artistas.
                                                Nela poderão publicar, editar
                                                e excluir eventos que estejam
                                                organizando ou nos quais estarão
                                                presentes para que seus seguidores
                                                acompanhem suas agendas e
                                                prestigiem seus trabalhos.
                                            </p>
                                        </div>
                                    </div>


                                    <div class="card-a">
                                        <div class="card-body">
                                        </div>
                                    </div>

                                </div>
                                <!--fecha a div card-artista -->
                            </div>
                            <div class="modal-footer" style="border-top: none;">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- fecha a div quarta-parte -->
        </section>

        <section>
            <div class="quinta-parte">
                <div class="quinta-parte-img" id="negros-arte">
                    <img src="assets/img/group-band.svg" id="quinta-parte-img">
                </div>
                <div class="quinta-parte-text">
                    <h1>Negros na Arte</h1>
                    <p class="text-negros-arte">
                        Você já deve ter notado que nossa equipe
                        é uma grande incentivadora da diversidade, certo?
                        Queremos não apenas incentivar você a
                        ser alguém que apoia a causa, mas também a se
                        tornar consciente quanto a relevância que os
                        negros tiveram para com a arte no decorrer da
                        história.<br>
                        Ao clicar no botão abaixo você será levado para
                        um pequeno vídeo que nossa equipe preparou
                        para ajudá-lo a ficar por dentro da importância
                        crucial dos negros na arte.
                    </p>
                    <button class="botao-negros-arte">
                        Verificar
                    </button>
                </div>
            </div>
        </section>

        <section>
            <div class="sexta-parte">
                <div class="sexta-parte-img">
                    <img src="assets/img/last-image.png" id="parceiro">
                </div>
                <div class="sexta-parte-text">
                    <h1>Torne-se Parceiro</h1>
                    <p class="sexta-parte-texto">
                        Chegamos ao final e nossa equipe se mantém
                        positiva quanto a possibilidade de que após
                        ver tudo isso sobre nosso projeto você já
                        esteja favorável a ideia de se juntar a nós!
                        Todavia, se você, parceiro em potencial ainda
                        não se sente 100% convencido, nós vamos listar
                        três motivos pelos quais acreditamos que você
                        incontestavelmente deveria se filiar a nós.
                        Caso nós consigamos convencê-lo, clique no
                        botão abaixo. Ele te levará até nossa empresa,
                        onde estaremos te esperando.
                    </p>
                    <button class="btn-sexta-parte"> Verificar</button>
                </div>
            </div>
        </section>

        <!--  
        <div class="cards-sexta-parte">

            <div class="card-b" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>

            <div class="card-b" style="width: 18rem; " >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

            <div class="card-b" style="width: 18rem; height: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

        </div>
-->

        <div onclick="voltarAoTopo()" class="btn-topo">
            <img src="assets/img/topo.png" alt="">
        </div>



        <footer class="text-center text-white" id="foot" style="background-color: #C9B8D8">
            <!-- Grid container -->
            <div class="container p-4 pb-0">



                <!-- Section: Social media -->
                <section class="mb-4">
                    <div>
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>


                </section>
                <!-- Section: Social media -->
            </div>

            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">



                © 2023 Copyright:
                <a class="text-white" href="#">Getto </a>
            </div>
            <!-- Copyright -->
        </footer>

    </div> <!--div que fecha o container  -->



<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script> -->

   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script src="assets/JS/index.js"></script>
</body>

</html>