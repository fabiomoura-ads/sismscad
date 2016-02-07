<?php

include_once("../dao/Conexao.class.php");
include_once("../dao/UsuarioDAO.php");

$dao = new UsuarioDAO();

$gravou = $dao->excluir($_POST["excUsuario"]);

echo $gravou;

if ( $gravou ) {
	echo "true";
}

 
?>
