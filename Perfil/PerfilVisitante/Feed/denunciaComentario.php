<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denúncia</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/denunciaComentario.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container-fluid main">
        <div class="container">


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
            <form action="#">
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

                <div id="divComentario" class="comentario slide-in">

                    <div class="box-text-area">

                        <textarea placeholder="Escreva sua denúncia" name="comentario" id="" cols="30" rows="10">

                        </textarea>
                        <div class="box-btn-comentario">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-paper-plane fa-lg" style="color: #000000;"></i>
                            </button>
                        </div>

                    </div>





                </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>