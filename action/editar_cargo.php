<?php

include_once("../dao/Conexao.class.php");
include_once("../model/Cargo.class.php");
include_once("../dao/CargoDAO.php");

$cargo = new Cargo();
$dao = new CargoDAO();

$cargo->setId($_POST['id']);
$cargo->setNome($_POST['nome']);

$gravou = $dao->alterar($cargo);

echo $gravou;

if ( $gravou ) {
	echo "true";
}
 
?>
