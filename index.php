<?php include("developedBy.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1;">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/signin.css" rel="stylesheet">
    <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>	
	<link href="css/estiloNovo.css" rel="stylesheet"> 		
</head>
<body id="index">

<div id="box">
	<div id="container">
		<form class="form-vertical" id="formLogin" method="post" action="">			
			<label id="label-login" class="control-label fontSecondary">Nome de usu&aacute;rio</label>
			<div class="input-group">
				<div class="input-group-addon boxIcon">
					<span class="glyphicon glyphicon-user iconColor"></span>
				</div>
				<input type="text" class="form-control" id="login" name="login" autofocus >	  
			</div>
			<div class="input-group">
				&nbsp;
			</div>	
			<label class="control-label fontSecondary">Senha</label>
			<div class="input-group">
				<div class="input-group-addon boxIcon">
					<span class="glyphicon glyphicon-lock iconColor"></span>
				</div>
				<input type="password" class="form-control" id="senha" name="senha" >	  
			</div>
			
			<div id="botaoEntrar">
				<button type="submit" class="btn btn-success btnCustom">Entrar</button>
			</div>	
		</form>
	</div>
	
	<div id="respostaLogin">
		<div class="alert alert-danger" role="alert">Usu&aacute;rio ou senha inv&aacute;lido
			<button type="button" class="close" data-dismiss="modal"><span id="fechar" name="fechar" aria-hidden="true">&times;</span></button>
		</div>	
	</div>
	
	<script src="js/jquery-1.11.3.min.js" ></script>
	<script type="text/javascript" src="js/javascript.js" ></script> 	

</body>
</html>