<?php
	include_once("../dao/Conexao.class.php");
	include_once("../dao/PessoaDAO.php");
	include_once("../dao/CargoDAO.php");
	include_once("../model/Pessoa.class.php");
	include_once("../model/Cargo.class.php");	
	include_once("../model/Cartao.class.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carteiras Membros</title>
<link rel="stylesheet" type="text/css" href="../css/estilodiv.css">

</head>
<body>

<?php

$registros = explode(',', $_GET["ar"]);

$dao = new PessoaDAO();

$html = "";

for($i=0; $i < count($registros); $i++){
	$pessoa = $dao->getPorId($registros[$i]);	
	$cartao = $pessoa->geraCartao();
}

echo $html;

?>
</body>
</html>
