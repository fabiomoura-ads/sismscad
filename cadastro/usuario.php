<div class="row" id="titleForm">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 20px;" class="col-md-12 fontTitleForm" >
		:: Cadastro de Usu&aacute;rio
	</div>		
</div>

<form class="form-horizontal" id="formCadastroUsuario" method="post" method="post" enctype="multipart/form-data" role="form">

	<div class="row" id="formCadastro" >
		<div class="col-md-4">
							
			<!-- LOGIN -->		
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Login </label>
				<input class="form-control" type="text" name="login" id="login" required/>
			</div>	

			<!-- SENHA-->
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Senha </label>		
				<input class="form-control" type="password" name="senha" id="senha" required/>
			</div>	
			
			<!-- REPETIR SENHA-->
			<div class="col-md-12">
				<label class="control-label fontLabelForm">Confirma&atilde;o de Senha </label>		
				<input class="form-control" type="password" name="senha_confirm" id="senha_confirm" required/>
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