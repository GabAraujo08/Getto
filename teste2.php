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

    <div class="wrapper">

        <!-- botoes da tab -->

        <div class="tab">
            <button class="tablinks active" onclick="openForm(event, 'Artista')" id="defaultOpen">Artista</button>
            <button class="tablinks" onclick="openForm(event, 'Visitante')">Visitante</button>
        </div>

        <!-- termino dos botoes -->

        <div id="Artista" class="tabcontent">

            <!-- formulario 1 -->

            <div class="form_1 data_info">
                <h2>Artista</h2>
                <form>
                    <div class="form_container">
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
                    </div>
                </form>
            </div>

            <!-- formulario 2 -->

            <div class="form_2 data_info" style="display: none;">
                <h2>Personal Info</h2>
                <form>
                    <div class="form_container">
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
                        <select id="genero" name="generoArtista" class="select-estado">
                            <option value="AC">Selecionar</option>
                            <option value="AC">Masculino</option>
                            <option value="AL">Feminino</option>
                            <option value="AP">Prefiro não informar</option>
                        </select>
                    </div>
                </form>
            </div>

            <!-- formulario 3 -->

            <div class="form_3 data_info" style="display: none;">
                <h2>Professional Info</h2>
                <form>
                    <div class="form_container">
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
                    </div>
                </form>
            </div>
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
                </ul>
            </div>

            <!-- termino barra de progresso -->


            <!-- inicio dos botoes -->

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

            <!-- termino dos botoes -->



            <div class="modal_wrapper">
                <div class="shadow"></div>
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                    <p>Seu perfil já foi mandado para análise, uma mensagem será enviada para seu email ápos a verificação!</p>
                </div>
            </div>
        </div>


        <div id="Visitante" class="tabcontent">

            <!-- formulario 1 -->

            <div class="form_1 data_info">
                <h2>Visitante</h2>
                <form>
                    <div class="form_container">
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
                    </div>
                </form>
            </div>

            <!-- formulario 2 -->

            <div class="form_2 data_info" style="display: none;">
                <h2>Personal Info</h2>
                <form>
                    <div class="form_container">
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
                    </div>
                </form>
            </div>

            <!-- formulario 3 -->

            <div class="form_3 data_info" style="display: none;">
                <h2>Professional Info</h2>
                <form>
                    <div class="form_container">
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneArtista" required>
                            <label for="numero">Digite sua senha</label>
                        </div>
                        <div class="single-input">
                            <input type="text" class="input" id="telefoneArtista" required>
                            <label for="numero">Confirme sua senha</label>
                        </div>
                    </div>
                </form>
            </div>


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
                </ul>
            </div>

            <!-- termino barra de progresso -->


            <!-- inicio dos botoes -->

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

            <!-- termino dos botoes -->



            <div class="modal_wrapper">
                <div class="shadow"></div>
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                    <p>Seu perfil já foi mandado para análise, uma mensagem será enviada para seu email ápos a verificação!</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./teste2.js"></script>

    <!-- tab area -->

<script>
    // código JavaScript

    // função para abrir a guia selecionada e mostrar o conteúdo correspondente
    function openForm(evt, formName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(formName).style.display = "contents";
        evt.currentTarget.classList.add("active");
    }

    // código para selecionar a guia "Artista" e mostrar o conteúdo correspondente ao carregar a página
    document.getElementById("defaultOpen").click();
</script>

</body>

</html>