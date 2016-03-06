<?php
	$id = $_GET["edtUsuario"];
	$dao = new UsuarioDAO();
	$usuario = $dao->getPorId($id);
?>

<div class="row" id="titleForm">
	<div style="font-size: 20px;" class="col-md-12 fontTitleForm" >
		:: Edição de Usuário
	</div>		
</div>

<form class="form-horizontal" id="formEditarUsuario" method="post" method="post" enctype="multipart/form-data" role="form">

	<div class="row" id="formCadastro" >
		<div class="col-md-4">
							
			<!-- LOGIN -->		
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Login </label>
				<input class="form-control" required value="<?php echo $usuario->getLogin(); ?>" type="text" name="login" id="login" />
				<input value="<?php echo $usuario->getId(); ?>" type="hidden" name="id" id="id" />
			</div>	

			<!-- SENHA-->
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Senha </label>		
				<input class="form-control" type="password" name="senha" id="senha" required/>
			</div>	
			
			<!-- REPETIR SENHA-->
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Confirma&atilde;o de Senha </label>		
				<input class="form-control" value="<?php echo $usuario->getSenha(); ?>" type="password" required name="senha" id="senha" />
			</div>				
			
			<div class="col-md-12">
				<label class="control-label fontLabelForm">&nbsp; </label>		
			</div>	
			
			<!-- GRAVA -->					
			<div class="col-md-12">
				<input type="submit" class="btn btn-success btnCustom" value="Salvar"/>
			</div>								
		</div>
	</div>
</form>	
