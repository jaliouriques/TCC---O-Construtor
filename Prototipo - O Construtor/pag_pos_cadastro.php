<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>O Construtor</title>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<!-- Custom Fonts -->

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="css/ajuste_calculo.css" rel="stylesheet">
    </head>

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
					<h1 class="brand-heading">O Construtor</h1>
					<p class="intro-text">
						Vamos começar?
					</p>
					<a href="#single-project" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Project Details Section -->
<section id="single-project">
	<div class="container content-section text-center">
		<div class="row">
			<div class="col-lg-4">

				<h2>Selecione o que você deseja:</h2>
				<form class="form-horizontal form-calcular-precos-materiais"> 
					<!-- action="index.html"-->

					<!-- conjunto blocos -->
					<div class="seletor-materiais" id="bloco">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Blocos
						</label>

						<select class="nao-selecionado seletor form-control">
							<option>vedação</option>
							<option>estrutural</option>
						</select>
					</div>

					<!-- conjunto saibro -->
					<div class="seletor-materiais" id="saibro">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Saibro
						</label>

						<select class="nao-selecionado seletor form-control">
							<option>fino</option>
							<option>médio</option>
							<option>grosso</option>
						</select>
					</div>

					<!-- conjunto tijolos -->
					<div class="seletor-materiais" id="tijolos">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Tijolos
						</label>

						<select class="nao-selecionado seletor form-control">
							<option>6 furos</option>
							<option>8 furos</option>
							<option>9 furos</option>
						</select>
					</div>

					<!-- conjunto areia -->
					<div class="seletor-materiais" id="areia">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Areia
						</label>

						<select class="nao-selecionado seletor form-control" id="areia">
							<option>fina</option>
							<option>média</option>
							<option>vermelha</option>
						</select>
					</div>

					<!-- conjunto pisos -->
					<div class="seletor-materiais" id="pisos">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Pisos
						</label>

						<select class="nao-selecionado seletor form-control">
							<option>porcelanato</option>
							<option>cerâmica</option>
							<option>granito</option>
						</select>
					</div>

					<!-- conjunto azulejos -->
					<div class="seletor-materiais" id="azulejos">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Azulejos
						</label>

						<select class="nao-selecionado seletor form-control">
							<option>12,5 x 12,5</option>
							<option>30 cm ²</option>
							<option>7,5 x 7,5</option>
						</select>
					</div>

					<!-- conjunto cal -->
					<div class="seletor-materiais" id="cal">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Cal
						</label>

						</select>
					</div>

					<!--conjunto cimento-->
					<div class="seletor-materiais" id="cimento">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1"> Cimento
						</label>

						</select>
					</div>

				</div>

				<div class="col-lg-4 col-lg-offset-2">
					<div class="receptor-metragem" id="metragem">


						<h2>Nos informe a metragem da área que deseja:</h2>
						<input type="number" step="0.1" class="form-control" id="metros">

					</div>



					<div class="calcular">
						<!-- <div class="col-sm-offset-2 col-sm-10"> -->
						<br>
						<button type="submit" class="btn btn-default">Calcular</button>
						<!-- </div> -->
					</div>

				</div>
			</div>
		</div>
		

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<script src="js/theme.js"></script>

<script>
	$('.material').click(function(){
		var seletor = $(this).parent().parent();
		seletor.find('.seletor').toggleClass( "nao-selecionado");
	});
</script>

</body>
</html>