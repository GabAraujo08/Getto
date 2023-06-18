<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login-adm.css">
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <title>Login Administrador</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5">
        <div class="card border-0 shadow rounded-3 my-5 form-container">
          <div class="card-body p-4 p-sm-5 form-box">
            <div class="logo-marca-container">
              <img class="img-fluid logo-marca" src="./assets/img/logomarca.png" alt="">
            </div>
            <div class="texts">
              <h1>Getto</h1>
            </div>

            <form action="../Controller/LoginAdm.php" method="POST">
              <div class="form-floating mb-3 formulario" style="display: flex; flex-direction: column;">
                <span class="email-label">Nome de usuário</span>
                <input type="text" class="input-email" name="login" id="floatingInput" placeholder="Usuário...">

              </div>
              <div class="form-floating mb-3" style="display: flex;flex-direction: column;">
                <span class="senha-label">Sua senha</span>
                <input type="password" class="input-senha" id="floatingPassword" name="senha" placeholder="Digite sua senha...">

              </div>

              <div class="form-check mb-3 check-box">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Lembrar de mim
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold btn-entrar"
                  type="submit">Avançar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>