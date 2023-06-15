<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logomarca.png" type="image/png">
    <title>Cadastre-se!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/registroArtista.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>

    <style>
        .preview-img {
            margin-top: 0.5%;
            width: 100%;
        }

        #picture__input {
            display: none !important;
        }

        .picture {
            min-width: 288px !important;
            width: 24% !important;
            aspect-ratio: 16/9 !important;
            background: #ddd !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #aaa !important;
            border: 2px dashed currentcolor !important;
            font-family: sans-serif !important;
            transition: color 300ms ease-in-out, background 300ms ease-in-out !important;
            outline: none !important;
            overflow: hidden !important;
            border-radius: 20px !important;
        }

        .picture:hover {
            color: #664187 !important;
            background: #ccc !important;
        }

        .picture:active {
            border-color: #664187 !important;
            color: #664187 !important;
            background: #eee !important;
        }

        .picture:focus {
            color: #777 !important;
            background: #ccc !important;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3) !important;
        }

        .picture__img {
            max-width: 100% !important;
        }

        .btn-artista {
            color: white !important;
            background-color: #664187 !important;
        }

        .btn-artista:hover {

            background-color: #4e1e79 !important;

        }
    </style>
    <div class="container">
        <div class="div-form">
            <!-- BOOTSTRAP CLASS = A DIV QUE POSSUI ESSA CLASSE TEM UMA PRÉ DEFINICAO
                DO BOOTSTRAP DE QUANTAS COLUNAS O  DEVE OCUPAR -->
            <div>
                <div class="registro-login">
                    <a href="#">
                        <h1 class="cadastro">Cadastre-se</h1>
                    </a>
                    <a href="Login/login.php">
                        <h1 class="entrar">Entre</h1>
                    </a>
                </div>

                <div class="card border-0 shadow rounded-3 my-5 form-container">
                    <div class="card-body p-4 p-sm-5 form-box">
                        <form id="formArtista" name="formArtista" enctype="multipart/form-data" action="Controller/Usuario.php" method="POST" onsubmit="event.preventDefault();">
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <div class="header-form">
                                    <div class="logo-marca-container">
                                        <img class="img-fluid logo-marca" src="assets/img/logomarca.png" alt="">
                                    </div>
                                    <h1>Getto</h1>
                                    <h5 class="text-center mb-5 fw-light fs-5 header-legenda">Faça seu cadastro e comece a usar!</h5>
                                    <div class="selecao-tipo-conta">
                                        <div class="artista-convidado-btns">
                                            <div class="div-artista-btn">
                                                <a href="registroArtista.php"><button class="btn btn-primary btn-artista text-uppercase fw-bold btn-entrar" id="btn-artista" type="button">Artista</button>
                                            </div></a>
                                            <div class="div-visitante-btn">
                                                <a href="registroVisitante.php"><button class="btn btn-primary btn-visitante text-uppercase fw-bold btn-entrar" id="btn-visitante" type="button">Visitante</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3" style="display: flex;
                  flex-direction: column;">
                                    <span class="span-input">Nome</span>
                                    <input type="text" class="input-nome" name="nomeVisitante" id="floatingInput" placeholder="Digite seu nome...">
                                </div>
                                <div class="form-floating mb-3" style="display: flex;
                  flex-direction: column;">
                                    <span class="span-input">Nome de usuário</span>
                                    <input type="text" class="input-nickname" name="nicknameVisitante" id="floatingPassword" oninput="handleEmail(event)" placeholder="Digite seu nickname...">
                                </div>
                                <div class="form-floating mb-3 " style="display: flex;
                  flex-direction: column;">
                                    <span class="span-input">Endereço de e-mail</span>
                                    <input type="email" class="input-email" name="emailVisitante" id="email" placeholder="Digite seu email...">
                                </div>
                            </div>
                            <div class="tab">

                                <div class="form-floating mb-3 " style="display: flex;
                                flex-direction: column;">
                                    <span class="span-input">Número de telefone</span>
                                    <input type="text" class="input-numero" name="foneVisitante" id="numeroArtista" oninput="handleTelefone(event)" placeholder="Digite seu número...">
                                </div>


                                <div class="form-floating mb-3" style="display: flex;
                                          flex-direction: column;">
                                    <span class="span-input">Estado</span>
                                    <select id="estado" name="estadoVisitante" class="select-estado">
                                        <option value="AC">Selecionar</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <span class="span-input">Cidade</span>
                                    <input type="text" class="input-cidade" name="cidadeVisitante" id="email" placeholder="Digite sua cidade...">
                                </div>

                                <div class="form-floating mb-3" style="display: flex;
                  flex-direction: column;">
                                    <span class="span-input">Gênero</span>
                                    <select id="genero" name="generoArtista" class="select-estado">
                                        <option value="#">Selecionar</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Prefiro não informar">Prefiro não informar</option>

                                    </select>
                                </div>

                            </div>
                            <div class="tab">
                                <div class="form-floating mb-3 " style="display: flex; flex-direction: column;">
                                    <div class="preview-img">
                                        <label class="picture" for="picture__input" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>
                                        <input type="file" name="imagemEvento" id="picture__input">
                                    </div>
                                </div>

                                <div class="form-floating mb-3 " style="display: flex;
                                    flex-direction: column;">
                                    <span class="span-input">Anexe um link para seu portfólio! </span>
                                    <input name="portfolio" class="input-portfolio" type="text" id="input-portfolio">



                                </div>
                                <div class="informacao">
                                    <p>Por que precisamos dessas informações? <a><b onclick="openModal()">Clique aqui
                                                para saber.</b></a></p>
                                </div>
                            </div>

                            <div class="tab">
                                <div>
                                    <div class="form-floating mb-3" style="display: flex; flex-direction: column;">
                                        <span class="span-input">Sua senha</span>
                                        <div style="position: relative;">
                                            <input style="position: relative;" type="password" class="input-senha" name="senhaVisitante" id="password" placeholder="Digite sua senha...">
                                            <i style="position: absolute; right: 10px; top: 36%;" class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password')"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3" style="display: flex; flex-direction: column;">
                                        <span class="span-input">Confirme a senha</span>
                                        <div style="position: relative;">
                                            <input style="position: relative;" type="password" class="input-confirmarSenha" name="confirmarSenhaVisitante" id="confirmPassword" placeholder="Digite sua senha...">
                                            <i style="position: absolute; right: 10px; top: 36%;" class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('confirmPassword')"></i>
                                        </div>
                                        <span id="senhaIncompativel" style="color: red; display: none;">As senhas não são compatíveis.</span>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>

                                    <button data-bs-toggle="modal" data-bs-target="#envio-concluido" style="display: none;" type="submit" id="enviarBtn" onclick="nextPrev(1)">Enviar</button>


                                </div>
                            </div>

                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>

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
            <img src="assets/img/punhoCerrado.png" alt="">
        </div>
    </div>

    <div class="modal-overlay" id="overlay">
        <div class="modal" id="modal">
            <div class="modal-header">
                <p>Por que preciso enviar minha foto?</p>
            </div>
            <div class="modal-content">
                Para garantir a segurança e confiabilidade do nosso serviço, precisamos que você nos envie essas
                informações.
                Entendemos que pode ser desconfortável compartilhar informações pessoais, mas queremos garantir que
                todos os usuários que se cadastram em nossa plataforma sejam a quem destinamos esta plataforma.

                A foto que você enviar será vista somente pelos administradores do site assim como seu portfólio, que
                estão comprometidos em
                manter suas informações confidenciais e seguras. O objetivo é garantir que as pessoas que se cadastrem
                sejam realmente o nosso público e que todos que estejam
                usando nossa plataforma possam trabalhar em um ambiente seguro e confiável.

                Entendemos que sua privacidade é importante, e por isso, garantimos que todas as informações fornecidas
                serão mantidas em sigilo e não serão compartilhadas com terceiros.

                Agradecemos sua compreensão e colaboração em nos ajudar a manter a segurança e confiabilidade de nossa
                plataforma.

                Atenciosamente,
                Equipe do <b>Getto</b>

            </div>

        </div>
    </div>

    <div class="modal fade" id="envio-concluido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="assets/img/aceito.svg" alt=""></h1>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById("formArtista").addEventListener("submit", function(event) {
            event.preventDefault(); // Impede o envio automático do formulário
            // Define um atraso de 3 segundos antes de enviar o formulário
            setTimeout(function() {
                document.getElementById("formArtista").submit();
            }, 2500);
        });
    </script>

    <script>
        const handleEmail = (event) => {
            let input = event.target
            input.value = addAtSymbol(input.value)
        }

        const addAtSymbol = (value) => {
            if (!value) return ""
            value = value.replace(/@/g, '') // Remove todos os "@" existentes
            value = "@" + value
            return value
        }
    </script>

    <script>
        const handleTelefone = (event) => {
            let input = event.target
            let value = event.value
            input.value = formatTelefone(input.value)
        }

        const formatTelefone = (value) => {
            if (!value) return ""

            // Remove todos os caracteres não numéricos
            value = value.replace(/\D/g, '')

            // Limita o valor a 14 caracteres
            value = value.substring(0, 11)
            // Aplica a formatação do telefone
            if (value.length >= 2) {
                value = "(" + value.substring(0, 2) + ")" + value.substring(2)
            }
            if (value.length >= 9) {
                value = value.substring(0, 9) + "-" + value.substring(9)
            }

            return value
        }
    </script>

    <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = passwordInput.nextElementSibling;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        }

        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirmPassword");
        const senhaIncompativelMsg = document.getElementById("senhaIncompativel");

        confirmPasswordInput.addEventListener("input", checkPasswordEquality);

        function checkPasswordEquality() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                senhaIncompativelMsg.style.display = "block";
            } else {
                senhaIncompativelMsg.style.display = "none";
            }
        }
    </script>


    <script>
        const inputFiles = document.querySelector("#picture__input");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "Envie uma foto!";
        pictureImage.innerHTML = pictureImageTxt;

        inputFiles.addEventListener("change", function(e) {
            const inputTarget = e.target;
            const file = inputTarget.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function(e) {
                    const readerTarget = e.target;

                    const img = document.createElement("img");
                    img.src = readerTarget.result;
                    img.classList.add("picture__img");

                    pictureImage.innerHTML = "";
                    pictureImage.appendChild(img);
                });

                reader.readAsDataURL(file);
            } else {
                pictureImage.innerHTML = pictureImageTxt;
            }
        });
    </script>
    <script type="text/javascript" src="./teste2.js"></script>
    <script type="text/javascript" src="./assets/js/registro.js"></script>
</body>

</html>