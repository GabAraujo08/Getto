<!DOCTYPE html>
<html lang="en">
<head>
    teste
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta em verificação</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
teste
<style>
    .container-fluid {
        display: flex;
        height: 100vh;
    }
    .texto{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
    }
    .img {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img img{
       width: 100%;
    }

    a {
        color: #664187;
        cursor: pointer;
        text-decoration: none!important;
        font-weight: 600;
        transition: 0.3s;
    }

    a:hover{
        color: #4f2e6d;
        
    }


    @media (max-width: 450px){
        .container-fluid {
            flex-direction: column;
            justify-content: center;
    align-items: center;
        }
        .texto{
            width: 100%;
        }
        .img{
            width: 100%;
        }
    }


</style>


    <div class="container-fluid">
        <div class="img">
            <img src="assets/img/img-emProcesso.svg" alt="">
        </div>

        <div class="texto">
            <h1>Sua conta está em processo de análise, <a href="Login/login.php">voltar para tela de login.</a></h1>
        </div>
    </div>


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