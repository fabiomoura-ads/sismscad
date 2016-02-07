<?php

include_once("../dao/Conexao.class.php");
include_once("../dao/PessoaDAO.php");

$dao = new PessoaDAO();

$gravou = $dao->excluir($_POST["excMembro"]);

echo $gravou;

if ( $gravou ) {
	echo "true";
}

 
?>
