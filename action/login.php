<?php

include("../dao/Conexao.class.php");
include("../dao/UsuarioDAO.php");
include("../model/Usuario.class.php");

$usuario = new Usuario();

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);

$usuario = $usuario->autenticar();

if ( $usuario ) {
	echo "home.php";
} 

?>
