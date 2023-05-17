<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./teste2.css">
    <title>Entre e cadastre-se!</title>
</head>

<body>
    <!-- <div class="tab-form">
        <div class="tab-header">
            <div class="logo-marca-container">
                <img class="img-fluid logo-marca" src="./assets/img/logomarca.svg" alt="">
            </div>
            <h1>Getto</h1>
            <h5 class="text-center mb-5 fw-light fs-5 header-legenda">Faça seu cadastro e comece a usar!</h5>
            <div class="tab-titulo">
                <div class="ativo">Artista</div>
                <div>Visitante</div>
            </div>
        </div>
        <div class="tab-body">
            <div class="artista-ativo">
                <h2>Crie uma conta como artista!</h2>
                <div class="form-input">
                    <form action="">
                        <div class="form-section current">
                            <div class="single-input">
                                <input type="text" class="input" id="nomeArtista" required>
                                <label for="nome">Nome</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="nicknameArtista" required>
                                <label for="nome">Nome de usuário</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="emailArtista" required>
                                <label for="nome">Endereço de email</label>
                            </div>
                            <input type="button" value="Avançar" onclick="nextSection(1)">
                        </div>

                        <div class="form-section">
                            <div class="select-estado">
                                <select id="estado" name="estadoArtista" class="select-estado">
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
                            <div class="single-input">
                                <input type="text" class="input" id="cidadeArtista" required>
                                <label for="nome">Cidade</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="telefoneArtista" required>
                                <label for="numero">Número de telefone</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="telefoneArtista" required>
                                <label for="numero">Gênero</label>
                            </div>

                            <input type="button" value="Voltar" onclick="prevSection(1)">
                            <input type="button" value="Avançar" onclick="nextSection(2)">
                        </div>

                        <div class="form-section">
                            <label class="picture" for="picture__input" tabIndex="0">
                                <span class="picture__image"></span>
                                <input type="file" name="picture__input" id="picture__input">
                            </label>
                            <div class="single-input">
                                <input type="text" class="input" id="telefoneArtista" required>
                                <label for="numero">Anexe um link do seu portfólio!</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="telefoneArtista" required>
                                <label for="numero">Digite sua senha</label>
                            </div>
                            <div class="single-input">
                                <input type="text" class="input" id="telefoneArtista" required>
                                <label for="numero">Confirme sua senha</label>
                            </div>
                            <input type="button" value="Voltar" onclick="prevSection(2)">
                            <input type="button" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="visitante">
                <h2>Crie uma conta como visitante!</h2>
                <div class="form-input">
                    <div class="form-section current">
                        <div class="single-input">
                            <input type="text" class="input" id="nomeVisitante" required>
                            <label for="nome">Nome</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="nicknameVisitante" required>
                            <label for="nome">Nome de usuário</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="emailVisitante" required>
                            <label for="nome">Endereço de email</label>
                        </div>
                        <input type="button" value="Avançar" onclick="nextSection(1)">
                    </div>

                    <div class="form-section">
                        <div class="select-estado">
                            <select id="estado" name="estadoArtista" class="select-estado">
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
                        <div class="single-input">
                            <input type="text" class="input" id="cidadeVisitante" required>
                            <label for="nome">Cidade</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneVisitante" required>
                            <label for="numero">Número de telefone</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneVisitante" required>
                            <label for="numero">Número de telefone</label>
                        </div>

                        <input type="button" value="Voltar" onclick="prevSection(1)">
                        <input type="button" value="Avançar" onclick="nextSection(2)">
                    </div>

                    <div class="form-section">
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneVisitante" required>
                            <label for="numero">Digite sua senha</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneVisitante" required>
                            <label for="numero">Confirme sua senha</label>
                        </div>
                        <input type="button" value="Voltar" onclick="prevSection(1)">
                        <input type="button" value="Enviar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./teste2.js"></script>

    <script>
        var currentSection = 1;
        showSection(currentSection);

        function nextSection(n) {
            showSection(currentSection += n);
        }

        function prevSection(n) {
            showSection(currentSection -= n);
        }

        function showSection(n) {
            var sections = document.getElementsByClassName("form-section");

            if (n > sections.length) {
                currentSection = sections.length;
            }

            if (n < 1) {
                currentSection = 1;
            }

            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove("current");
            }

            sections[currentSection - 1].classList.add("current");
        }
    </script> -->

    <div class="wrapper">

<!-- barra de progresso -->

	<div class="header">
		<ul>
			<li class="active form_1_progessbar">
				<div>
					<p>1</p>
				</div>
			</li>
			<li class="form_2_progessbar">
				<div>
					<p>2</p>
				</div>
			</li>
			<li class="form_3_progessbar">
				<div>
					<p>3</p>
				</div>
			</li>
            <li class="form_4_progessbar">
				<div>
					<p>4</p>
				</div>
			</li>
		</ul>
	</div>

<!-- termino barra de progresso -->

	<div class="form_wrap">

            <!-- formulario 1 -->

		<div class="form_1 data_info">
			<h2>Signup Info</h2>
			<form>
				<div class="form_container">
					<div class="input_wrap">
						<label for="email">Email Address</label>
						<input type="text" name="Email Address" class="input" id="email">
					</div>
					<div class="input_wrap">
						<label for="password">Password</label>
						<input type="password" name="password" class="input" id="password">
					</div>
					<div class="input_wrap">
						<label for="confirm_password">Confirm Password</label>
						<input type="password" name="confirm password" class="input" id="confirm_password">
					</div>
				</div>
			</form>
		</div>

            <!-- formulario 2 -->

		<div class="form_2 data_info" style="display: none;">
			<h2>Personal Info</h2>
			<form>
				<div class="form_container">
					<div class="input_wrap">
						<label for="user_name">User Name</label>
						<input type="text" name="User Name" class="input" id="user_name">
					</div>
					<div class="input_wrap">
						<label for="first_name">First Name</label>
						<input type="text" name="First Name" class="input" id="first_name">
					</div>
					<div class="input_wrap">
						<label for="last_name">Last Name</label>
						<input type="text" name="Last Name" class="input" id="last_name">
					</div>
				</div>
			</form>
		</div>

            <!-- formulario 3 -->

		<div class="form_3 data_info" style="display: none;">
			<h2>Professional Info</h2>
			<form>
				<div class="form_container">
					<div class="input_wrap">
						<label for="company">Current Company</label>
						<input type="text" name="Current Company" class="input" id="company">
					</div>
					<div class="input_wrap">
						<label for="experience">Total Experience</label>
						<input type="text" name="Total Experience" class="input" id="experience">
					</div>
					<div class="input_wrap">
						<label for="designation">Designation</label>
						<input type="text" name="Designation" class="input" id="designation">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="btns_wrap">
		<div class="common_btns form_1_btns">
			<button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
		</div>
		<div class="common_btns form_2_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
			<button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
		</div>
		<div class="common_btns form_3_btns" style="display: none;">
			<button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
			<button type="button" class="btn_done">Done</button>
		</div>
	</div>
</div>

<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<p>You have successfully completed the process.</p>
	</div>
</div>
<script type="text/javascript" src="./teste2.js"></script>
</body>

</html>