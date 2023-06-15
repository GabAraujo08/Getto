<?php
if (isset($_GET['error']) && $_GET['error'] == 'incorrect') {
  echo '<div class="alert">
  <span class="ms erro"><i class="icon icon-hand-paper-o"></i><p> Senha incorreta! Por favor tente novamente.</p> </span>
  </div>';
}
?>


<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/logomarca.png" type="image/png">
  <title>Entre agora!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

<body>


  <div class="container">
    <div class="div-form">
      <div>
        <div class="registro-login">
          <a href="../registroVisitante.php">
            <h1 class="cadastro">Cadastre-se</h1>
          </a>
          <a href="login.php">
            <h1 class="entrar">Entre</h1>
          </a>
        </div>

        <div class="card border-0 shadow rounded-3 my-5 form-container">
          <div class="card-body p-4 p-sm-5 form-box">
            <div class="logo-marca-container">
              <img class="img-fluid logo-marca" src="assets/img/logomarca.png" alt="">
            </div>
            <div class="texts">
              <h1>Getto</h1>
              <h5 class="card-title text-center mb-5 fw-light fs-5">Faça seu login e comece a usar!</h5>
            </div>

            <form id="formlogin" name="formlogin" action="../Controller/Login.php" method="POST">
              <div class="form-floating mb-3 formulario" style="display: flex;
                  flex-direction: column;">
                <span class="email-label">Endereço de e-mail</span>
                <input type="email" class="input-email" id="floatingInput" name="email" placeholder="Digite seu email...">

              </div>
              <!-- <div class="form-floating mb-3" style="display: flex;
                  flex-direction: column;">
                <span class="senha-label">Sua senha</span>
                <input type="password" class="input-senha" id="floatingPassword" name="senha" placeholder="Digite sua senha...">

              </div> -->

              <div class="form-floating mb-3" style="display: flex; flex-direction: column;">
                <span class="senha-label">Sua senha</span>
                <div style="position: relative;" class="senha-input-wrapper">
                  <input type="password" class="input-senha" id="floatingPassword" name="senha" placeholder="Digite sua senha...">
                  <span style="position: absolute;
    right: 10px;
    top: 30%; cursor: pointer;" class="toggle-senha" onclick="toggleSenhaVisibility()"><i class="fa-regular fa-eye-slash"></i></span>
                </div>
              </div>


              <div class="form-check mb-3 check-box">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Lembrar de mim
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold btn-entrar" type="submit">Avançar</button>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold btn-esqueceu-senha" type="submit"><a href="./esqueceuSenha.php">Esqueceu sua senha?</a></button>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="background">
      <div class="titulo-background">
        <p>Conheça</p><span>Getto</span>
      </div>
      <div class="conteudo-background">
        <p>celebre a diversidade criativa na nossa rede social de artistas negros!</p>
      </div>
      <img src="assets/img/blackpower.svg" alt="">
    </div>
  </div>




  <div class="modal fade" id="envio-concluido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="../assets/img/aceito.svg" alt=""></h1>

                </div>
                <div class="modal-body">
                    <div class="textos">
                        <h1>Obrigado por concluir seu cadastro!</h1>
                        <p>Sua conta está sendo analisada, fique de olho no seu email.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>

                </div>
            </div>
        </div>
    </div>
    <script src="../jquery.js"></script>

  <script>
    $(document).ready(function() {
      // Verificar se o parâmetro 'registro_concluido' está presente na URL
      const urlParams = new URLSearchParams(window.location.search);
      const registroConcluido = urlParams.get('registro_concluido');

      // Se o parâmetro estiver presente, abrir o modal
      if (registroConcluido === 'true') {
        $('#envio-concluido').modal('show');
      }
    });
  </script>


  <script>
    function toggleSenhaVisibility() {
      var senhaInput = document.getElementById('floatingPassword');
      var toggleButton = document.querySelector('.toggle-senha');

      if (senhaInput.type === 'password') {
        senhaInput.type = 'text';
        toggleButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
      } else {
        senhaInput.type = 'password';
        toggleButton.innerHTML = '<i class="fa fa-eye"></i>';
      }
    }
  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
  </script>
</body>

</html>