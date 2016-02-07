<?php

include_once("../dao/Conexao.class.php");
include_once("../model/Cargo.class.php");
include_once("../dao/CargoDAO.php");

$cargo = new Cargo();

$cargo->setNome($_POST['nome']);

$gravou = $cargo->grava();

if ( $gravou ) {
	echo "true";
} 
 
?>
