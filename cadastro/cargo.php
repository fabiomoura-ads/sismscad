<div class="row" id="titleForm">
	<div style="font-size: 20px;" class="col-md-12 fontTitleForm" >
		:: Cadastro de Cargos
	</div>		
</div>

<form class="form-horizontal" id="formCadastroCargo" method="post" method="post" enctype="multipart/form-data" role="form">
	<div class="row" id="formCadastro">
		<div class="col-md-9" >
			<!-- CARGO -->		
			<div class="col-md-5">
				<label class="control-label fontLabelForm">Cargo </label>
				<input class="form-control" type="text" name="nome" id="nome" required />
			</div>	
			
			<!-- DOADOR DE ORGÃO -->
			<div class="col-md-2">
				<label class="control-label fontLabelForm">Constitucional</label>				
				<input type="checkbox" name="constitucional" id="constitucional" class="form-control" />					
			</div>
			
			<div class="col-md-4">
				<label class="control-label fontLabelForm">&nbsp; </label>		
			</div>				
			<!-- SALVAR -->					
			<div class="col-md-2">
				<input type="submit" class="btn btn-success btnCustom" value="Salvar"/>
			</div>	
		</div>	
	</div>
</form>		
