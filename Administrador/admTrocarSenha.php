<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/img/logomarca.svg" type="imagem">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/admTrocarSenha.css">
</head>

<body>
<div class="container-fluid">
    <form action="../Controller/TrocaSenhaAdm.php" method="POST">
        <div class="titulo-form">
            <h1>Redefina sua senha</h1>
        </div>

        <div class="input-group mb-3">

            <input name="senha" type="password" class="form-control" aria-label="Sizing example input"
                placeholder="Nova senha" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">

            <input name="ConfirmaSenha" type="password" class="form-control" aria-label="Sizing example input"
                placeholder="Confirmar senha" aria-describedby="inputGroup-sizing-default">
        </div>


        <button type="submit" class="btn btn-primary btn-entrar">Confirmar</button>
    </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</body>

</html>