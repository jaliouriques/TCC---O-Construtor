<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>O Construtor</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<!-- Custom Fonts -->

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="css/ajuste_index.css" rel="stylesheet">
</head>

   

<body>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="brand-heading">O construtor</h1>
					<p class="intro-text">
						Sua calculadora de materiais
					</p>
					<a href="#about" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Cadastro-->
<section id="about">
	<div class="container content-section text-center">
		<div class="row">
			<div class="col-lg-12">

				<div class="col-lg-4 col-xs-12">
					<br /><br /><br /><br>
					<p>	Já teve dificuldades de calcular o material para sua obra?</p>

					<p>Então este site é pra você! <b>O CONSTRUTOR</b> tem o intuito de facilitar os cálculos com os gastos com materiais de construção. Quer saber mais? <b>Cadastre-se!</b> </p>
				</div>


				<div class="col-lg-7 col-xs-12 col-lg-offset-1" id="cadastro">
					<h2>Cadastro</h2>

					<form style="text-align: left;" action="Usuario.php"> 
						<div class="form-group">
							<label for="email">Usuário:</label>
							<input type="text" class="form-control" id="usernamesignup">
						</div>
						<div class="form-group">
							<label for="email">E-mail:</label>
							<input type="emailsignup" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="pwd">Senha:</label>
							<input type="password" class="form-control" id="pwd">
						</div>
						<div class="form-group">
							<label for="pwd">Confirmar senha:</label>
							<input type="password" class="form-control" id="pwd">
						</div>
						<div class="form-group" id="button-cadastro">
							<button type="submit" class="btn btn-default">Cadastrar</button>
						</div>	
					</form>

				</div>

			</div>
		</div>
	</div>
</section>




<!-- About Section -->
<section id="login" style="background: url('img/img-fundo3.jpg');">
	<div class="container content-section text-center">
		<div class="row">
			<div class="col-lg-12">

				<div class="col-lg-6 col-xs-12" id="login">
					<h2>Login</h2>

					<form style="text-align: left;" method="post" action="userautentication.php"> 
						<div class="form-group">
							<label for="email">Nome de usúario ou email:</label>
							<input type="text" name= "email" class="form-control" id="username">
						</div>
						<div class="form-group">
							<label for="pwd">Senha:</label>
							<input type="password" name= "senha" class="form-control" id="pwd">
						</div>
						<div class="form-group" id="button-login">
							<button type="submit" class="btn btn-default">Entrar</button>
						</div>	
					</form>
				</div>
				
				<div class="col-lg-5 col-xs-12 col-lg-offset-1 texto-login">
				</br></br>
				
				<p>O <b>CONSTRUTOR</b> disponibiliza uma ferramenta onde você poderá calcular a quantidade dos principais tipos de materiais de construção que você preferir, a partir da área em m² que o você fornecer.</p>

				<p> Basta informar os dados necessários e deixar que o site faça o trabalho, de maneira <b>RÁPIDA</b> e <b>SIMPLES!</b></p>
			</div>
		</div>
	</div>
</div>
</section>


<!-- Tabela Section -->
<section id="tabela">
	<div class="container content-section text-center">
		<div class="row">
			<div class="col-lg-12">
				<h2>TABELA DE PREÇOS</h2>
				<br>
				<div class="col-lg-12">
					<div class="blocos col-lg-5">
					<br>
						<h3>Blocos</h3>    
						<table class="table tabela-blocos">
							<thead>
								<tr>
									<th>Tipos de blocos</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Vedação</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Estrutural</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="saibro col-lg-5 col-lg-offset-1">
					<br>
						<h3>Saibro</h3>    
						<table class="table tabela-saibro">
							<thead>
								<tr>
									<th>Tipos de saibro</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Fino</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Médio</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Grosso</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tijolo col-lg-5">
					<br>
						<h3>Tijolos</h3>    
						<table class="table tabela-tijolo">
							<thead>
								<tr>
									<th>Tipos de tijolos</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>6 furos</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>8 furos</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>9 furos</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="areia col-lg-5 col-lg-offset-1">
					<br>
						<h3>Areia</h3>    
						<table class="table tabela-areia">
							<thead>
								<tr>
									<th>Tipos de areia</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Fina</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Média</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Vermelha</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="piso col-lg-5">
					<br>
						<h3>Pisos</h3>    
						<table class="table tabela-piso">
							<thead>
								<tr>
									<th>Tipos de pisos</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Porcelanato</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Cerâmica</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>Granito</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="azulejo col-lg-5 col-lg-offset-1">
					<br>
						<h3>Azulejos</h3>    
						<table class="table tabela-azulejo">
							<thead>
								<tr>
									<th>Tipos de azulejos</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>12,5 x 12,5</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>30 cm ²</td>
									<td>R$0,00</td>
								</tr>
								<tr>
									<td>7,5 x 7,5</td>
									<td>R$0,00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- Contact Section -->
<section id="contact">
	<div class="container content-section text-center">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<h2>Obrigado por nos visitar</h2>
				<p>
					Algum problema? Contate-nos!
				</p>
				<p>
					<i><a href="mailto:oconstrutor.tcc@gmail.com" style="border-bottom:1px dashed #ccc;">oconstrutor.tcc@gmail.com</a></i>
				</p>
				
			</div>
		</div>
	</div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<script src="js/theme.js"></script>

</body>
</html>