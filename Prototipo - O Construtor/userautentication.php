<?php

$host = "localhost";
$user = "Construtor";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
msql_select_db($banco) or die (mysql_error());
?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Autenticando usuario</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='pag_pos_cadastro.html'",5000)
		}

		function loginfailed(){
			setTimeout("window.location='index.php'", 5000);
		}
	</script>
</head>
<body>-->




<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM usuarios WHERE email = '{$email}' and senha = '{$email}'") or die (mysql_error());
$row = mysql_num_rows($sql);

if ($row>0) {
	session_start();
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "Você foi autenticado com sucesso! Aguarde um instante.";
	header("Location: pag_pos_cadastro.html");
	}else{
		echo "<center>Nome de usuário ou senha invalidos! Aguarde um instante para tentar novamente.</center>";
		header("Location: index.html");
	
	}
?>
</body>
</html>