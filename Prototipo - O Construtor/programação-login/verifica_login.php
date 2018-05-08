<?php

$usuario = $_POST['login'];
$senha = $_POST['senha'];

if ($usuario == "jaly" AND $senha == "ceci1234"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha']   = $senha;
    header('Location:index.php');
}

else {header('Location: index.php');}