<!DOCTYPE html>
<html lang="en">
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
>>>>>>> hotfix-temp
=======
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="{{ asset('css/logcad-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/messageAPICep.css') }}" rel="stylesheet">

    <!--CSS-BOOTSTRAP ICONES-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

    <title>Cadastro</title>

</head>

<body>

<div id="page1" class="w3-container city">
    <div class="containerLR" style="background-image: url({{ asset('img/capa-fundo-login-register.png') }});">
        <div class="subcontainerLR">
            <span class="titleLR">Olá! Crie sua conta</span>
            <div class="imgR">
                <img src="{{ asset('img/capa-register.png') }}" alt="IMG">
            </div>


        <div class="form">
            <form class="formLR">
                <div class="inputcontainer">
                    <input class="input100" type="text" name="text" placeholder="Primeiro nome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="text" name="text" placeholder="Sobrenome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="date" name="date" placeholder="Data de Nascimento">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-calendar"></i></span>
                </div>

                <div class="inputcontainer" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Confirmar Senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
                </div>
            </form>
                <button class="btnLR" onclick="openCity('page2')">PROXIMO</button>

                <div class="text-center p-t-136">
                    <a class="login" href="{{ route('login.page') }}">Fazer login</a>
                </div>
             </div>
        </div>
    </div>
</div>

<div id="page2" class="w3-container city" style="display:none">
    <div class="containerLR" style="background-image: url({{ asset('img/capa-fundo-login-register.png') }});">
        <div class="subcontainerLR">

            <div id="fade" class="hide">
                <div id="loader" class="spinner-border text-info hide" role="status">
                    <span class="visually-hidden">Loading....</span>
                </div>
                <div id="message" class="hide">
                    <div class="alert alert-light" role="alert">
                        <h4>Mensagem:</h4>
                        <p></p>
                        <button id="close-message" type="button" class="btn btn-secondary">
                            Fechar
                        </button>
                    </div>
                </div>
            </div>

            <span class="titleLR"></span>
            <div class="imgR">
                <img src="img/capa-register.png" alt="IMG">
            </div>

        <div class="form">
            <form class="formLR">
                <div class="inputcontainer">
                    <input class="input100" data-input name="cep" id="cep" placeholder="CEP" maxlength="8" minlength="8" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="text" name="address" id="address" placeholder="Rua" required data-input>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" name="number" id="number" placeholder="Número" required data-input>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="text" name="neighborhood" id="neighborhood" placeholder="Bairro" required data-input>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="text" id="complement" name="complement" placeholder="Complemento" required data-input>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" type="text" id="city" name="city" placeholder="Cidade" required data-input>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>

                <div class="inputcontainer">
                    <input class="input100" list="region" id="region" placeholder="Estados" data-input />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <datalist id="region">
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
                    </datalist>
                </div>
                </form>
                <div class="checkbox">
                    <input type="checkbox" id="click">
                    <label for="click" class="text"></label>
                </div>

                <div>
							<div>
								<button class="btnLR2 floatLeft" onclick="openCity('page1')">VOLTAR</button>
							<div>
								<button class="btnLR2 floatLeft" onclick="openCity('')">CADASTRAR</button>
						</div>
        </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/logcad.js') }}"></script>
{{-- A API ainda precisa de ajustes --}}
<script src="{{-- asset('js/apiFetchViaCep.js') --}}"></script>
</body>
</html>
