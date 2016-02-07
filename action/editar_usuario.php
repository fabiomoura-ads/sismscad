<?php

include_once("../dao/Conexao.class.php");
include_once("../model/Usuario.class.php");
include_once("../dao/UsuarioDAO.php");

$usuario = new Usuario();
$dao = new UsuarioDAO();

$usuario->setId($_POST['id']);
$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);

$gravou = $dao->alterar($usuario);

echo $gravou;

if ( $gravou ) {
	echo "true";
}
 
?>
