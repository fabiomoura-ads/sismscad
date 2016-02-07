<?php

include_once("../dao/Conexao.class.php");
include_once("../dao/CargoDAO.php");

$dao = new CargoDAO();

$gravou = $dao->excluir($_POST["excCargo"]);

echo $gravou;

if ( $gravou ) {
	echo "true";
}

 
?>
