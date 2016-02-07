<?php
	$id = $_GET["edtUsuario"];
	$dao = new UsuarioDAO();
	$usuario = $dao->getPorId($id);
?>

<div class="row">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 25px;"class="col-md-11 labelcustom" >
		Edi&ccedil;&atilde;o de Usu&aacute;rio
	</div>		
</div>

<div class="row" >
	<div id="form-cadastro"class="col-md-12 form-cadastro">
		<form class="form-horizontal" id="formEditarUsuario" method="post" method="post" enctype="multipart/form-data" role="form">
			<div class="row">							
				<div class="form-group col-md-12" >
					<!-- LOGIN -->
					<label class="control-label col-md-2 labelcustom">Login </label>
					<div class="col-md-4">
						<input class="form-control" value="<?php echo $usuario->getLogin(); ?>" type="text" name="login" id="login" />
						<input value="<?php echo $usuario->getId(); ?>" type="hidden" name="id" id="id" />
					</div>	
				</div>			
			</div>		
			
			<div class="row">							
				<div class="form-group col-md-12" >
					<!-- LOGIN -->
					<label class="control-label col-md-2 labelcustom">Senha </label>
					<div class="col-md-4">
						<input class="form-control" value="<?php echo $usuario->getSenha(); ?>" type="password" name="senha" id="senha" />
					</div>	
					<!-- GRAVA -->					
					<div class="col-md-2">
						<input type="submit" class="btn btn-success" value="Salvar"/>
					</div>								
				</div>
			</div>
		</form>			
	</div>
</div>
