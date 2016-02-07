<?php

include_once("../dao/Conexao.class.php");
include_once("../model/Usuario.class.php");
include_once("../dao/UsuarioDAO.php");

$usuario = new Usuario();

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);

$gravou = $usuario->grava();

if ( $gravou ) {
	echo "true";
} 
 
?>
