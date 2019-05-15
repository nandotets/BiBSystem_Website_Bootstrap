<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BibSystem - Criar conta</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
	  
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="../">BibSystem</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../software">Software</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../forum">Fórum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../account">Membro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sobre">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Criar Conta</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
	<form method="post" action="signup.php" autocomplete="on" id="formulario" name="formulario" onSubmit="check_inputs(); return false;">
			<h1>Cadastrar-se</h1>
			<p> Preencha os campos para criar uma conta.</p>
            <p>(*) Campos obrigatórios</p>
			<hr>
			<fieldset>
				<legend>Informações pessoais</legend>
				<br>
				<label for="cpf"><strong>*CPF (digite somente números)</strong></label>
					<input type="text" name="cpf" id="cpf" onkeypress="mascara(this,cpfmask)" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14" title="Digite o CPF no formato: NNN.NNN.NNN-NN" required>
				<strong>Gênero</strong>
					<input type="hidden" id="genderN" name="gender" value="N">
					<input type="radio" id="genderM" name="gender" value="M">
				<label>Masculino</label>
					<input type="radio" id="genderF" name="gender" value="F">
				<label>Feminino</label>
					<input type="radio" id="genderU" name="gender" value="U">
				<label>Prefiro não dizer</label>
				<br><br>
				<label for="datebirth"><strong>Data de nascimento</strong></label>
					<input type="date" name="birth" id="birth">
				<label for="fnome"><strong>*Primeiro nome</strong></label>
					<input type="text" placeholder="Digite o primeiro nome" name="fnome" id="fnome" required>
				<label for="lnome"><strong>Último nome</strong></label>
					<input type="text" placeholder="Digite o último nome" name="lnome" id="lnome">
				<label for="email"><strong>*Email (exemplo@email.xom)</strong></label>
					<input type="email" placeholder="Digite o email" name="email" id="email" required>
				<label for="tel"><strong>Telefone fixo</strong></label>
					<input type="tel" id="tel" name="tel" placeholder="(00)0000-0000" onKeyPress="mascara(this,telefonemask)" maxlength="14">
 				<label for="cel"><strong>Celular</strong></label>
					<input type="tel" id="cel" name="cel" placeholder="(00)00000-0000" onKeyPress="mascara(this,cellphonemask)" maxlength="15">
			</fieldset>
			<br>
			<fieldset>
				<legend>Endereço</legend>
				<br>
				<label for="cep"><strong>CEP (Digite somente números)</strong></label>
					<input type="text" placeholder="00000000" name="cep" id="cep" maxlength="8" onKeyPress="mascara(this,onlyNumbers">
				<label for="logradouro"><strong>Logradouro</strong></label>
					<input type="text" name="logradouro" id="logradouro">
				<label for="numero"><strong>Numero</strong></label>
					<input type="number" class="numero" name="numero" id="numero" min="0" maxlength="6" onKeyPress="mascara(this,onlyNumbers)" placeholder="Digite o número">
				<label for="comp"><strong>Complemento</strong></label>
					<input type="text" name="comp" id="comp" placeholder="Digite o complemento (se necessário)">
				<label for="bairro"><strong>Bairro</strong></label>
					<input type="text" name="bairro" id="bairro" >
				<label for="cidade"><strong>Cidade</strong></label>
					<input type="text" name="cidade" id="cidade" >
				<label for="uf"><strong>UF (Estado)</strong></label>
					<select id="uf" name="uf" class="selects">
            <option value="--" selected>--</option>
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
		</select>
			</fieldset>
			<br>
			<fieldset>
<script> //Preencher campos de endereço automaticamente pelo CEP - Utiliza ViaCEP
	$("#cep").focusout(function(){
			//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
		url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
		dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
		success: function(resposta){
			//Agora basta definir os valores que você deseja preencher
			//automaticamente nos campos acima.
				$("#logradouro").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
			//Vamos incluir para que o Número seja focado automaticamente
			//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	})
</script>
				<legend>Acesso</legend>
				<label for="usuario"><strong>*Usuário (4 a 16 caracteres)</strong></label>
				<input type="text" placeholder="Digite um usuário de 4 a 16 caracteres" name="usuario" id="usuario" maxlength="16" required> 
				<label for="psw"><strong>*Senha (6 caracteres)</strong></label>
				<input type="password" placeholder="Digite uma senha de 6 dígitos" id="psw" name="psw" maxlength="6" required>
				<label for="psw-repeat"><strong>*Repetir senha</strong></label>
				<input type="password" placeholder="Digite a senha novamente" id="psw-repeat" name="psw-repeat" required>
		  </fieldset>
			<label><br>
				<input type="checkbox" name="terms" style="margin-bottom:15px" required>
				Eu aceito os <a href="#" style="color:dodgerblue">Termos de Privacidade</a> ao criar a conta.
			</label>
			<div class="clearfix">
				<button type="button" onClick="cancelBtn()" class="cancelbtn">Cancelar</button>
				<button name="submit" type="submit" class="signupbtn">Registrar-se</button>
			</div>
	  <input type="hidden" name="MM_insert" value="formulario">
	</form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; BibSystem 2018</p>
			  <p class="copyright text-muted"><a href="../sitemap">Mapa do site</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/signup.js"></script>

  </body>

</html>
