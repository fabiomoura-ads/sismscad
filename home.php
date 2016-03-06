<?php include_once("includes.php");	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estiloNovo.css" rel="stylesheet">	
	
	<script src="js/jquery-1.11.3.min.js" ></script>	    	
	<script src="js/jquery.quicksearch.js" ></script>	    	
	<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/javascript.js" ></script> 	
	
	<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			$('input#inputSearch').quicksearch('table#tableRegistros tbody tr');
		});
	</script>
	
</head>
<body id='home'>

<?php
	include("developedBy.php");
?>

<div class="container-fluid" style="margin-top:50px;" >
	<?php	
		include_once("menu.php");
	?>
</div>

<div class="container">

<?php

		if ( isset($_GET["cadMembro"] ) ){
			include("cadastro/membro.php");
		} else if ( isset($_GET["cadCargo"] ) ) {
			include("cadastro/cargo.php");
		} else if ( isset($_GET["cadUsuario"]) ) {
			include("cadastro/usuario.php");			
		} else if ( isset($_GET["carteira"] ) ) {			
			include("consulta/carteira.php");
			
		} else if ( isset($_GET["consMembro"] ) ) {
			include("consulta/membro.php");
		} else if ( isset($_GET["consCargo"] ) ) {
			include("consulta/cargo.php");
		} else if ( isset($_GET["consUsuario"]) ) {
			include("consulta/usuario.php");	
			
		} else if ( isset($_GET["edtCargo"] ) ){
			include("editar/cargo.php");
		} else if ( isset($_GET["edtMembro"] ) ) {
			include("editar/membro.php");
		} else if ( isset($_GET["edtUsuario"] ) ) {
			include("editar/usuario.php");
			
		} else if ( isset($_GET["excCargo"] ) ){
			include("action/excluir_cargo.php");
		} else if ( isset($_GET["excMembro"] ) ) {
			include("action/excluir_cargo.php");
		} else if ( isset($_GET["excUsuario"] ) ) {
			include("action/excluir_cargo.php");
		} else {
			echo "<img id='im' src='img_proj/logo_transparente.png' />";
		}
	?>
		
	<br /><br />
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-5" >
			<div style="text-align:center" id="resposta">
			</div>
		</div>		
	</div>
	
	
</body>
</html>
