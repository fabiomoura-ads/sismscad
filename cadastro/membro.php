<div class="row" id="titleForm">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 20px;" class="col-md-12 fontTitleForm" >
		:: Cadastro de Membros
	</div>		
</div>

<?php 
include("action/listar_cargos.php");	
include("action/cadastrar_membro.php");
 ?>	

<form class="form-horizontal" id="formCadastroMembros" method="post" enctype="multipart/form-data" role="form">						

	<div class="row" id="formCadastro">
			
		<div class="col-md-10">
			
			<!-- NOME -->				
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Nome </label>				
				<input class="form-control" type="text" name="nome" id="nome" />
			</div>	
							
			<!-- CARGO -->
			<div class="col-md-5">
			<label class="control-label fontLabelForm">Cargo </label>				
				<select class="form-control" name="cargo" id="cargo">
					<?php for ( $i = 0; $i < count($listaCargos); $i++ ) { ?>
						<option value="<?php echo $listaCargos[$i]["id"]; ?>"><?php echo $listaCargos[$i]["nome"]; ?></option>
					<?php } ?>	
				</select>
			</div>	
							
			<!-- PAI -->				
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Pai </label>
				<input class="form-control" type="text" name="pai" id="pai" />
			</div>	
						
			<!-- MAE -->
			<div class="col-md-6">
				<label class="control-label fontLabelForm">M&atilde;e </label>					
				<input class="form-control" type="text" name="mae" id="mae" />
			</div>						

			<!-- RG -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">RG</label>
				<input class="form-control" type="text" name="rg" id="rg" />
			</div>	
					
			<!-- CPF -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">CPF</label>				
				<input class="form-control" type="text" name="cpf" id="cpf" />
			</div>		
			
			<!-- ESTADO CIVIL -->		
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Estado Civil</label>
				<select class="form-control" name="estado_civil" id="estado_civil">
					<option>-</option>
					<option>Casado</option>
					<option>Solteiro</option>
					<option>Vi&uacute;vo</option>
				</select>						
			</div>			
			
			<!-- DATA DE NASCIMENTO -->
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Nascimento </label>		
				<input class="form-control" type="date" name="data_nascimento" id="data_nascimento" />
			</div>			
									
			<!-- GRUPO SANGUINEO -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Grupo Sanguineo </label>				
				<select class="form-control" name="grupo_sanguineo" id="grupo_sanguineo">
					<option>--</option>						
					<option>A +</option>
					<option>A -</option>
					<option>B +</option>
					<option>B -</option>
					<option>AB +</option>
					<option>AB -</option>
					<option>O +</option>
					<option>O -</option>
				</select>
			</div>							

			<!-- DATA ADMISSAO -->		
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Admiss&atilde;o </label>
				<input class="form-control" type="date" name="data_admissao" id="data_admissao" />
			</div>						
			
			<!-- DATA BATISMO -->
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Batismo </label>
				<input class="form-control" type="date" name="data_batismo" id="data_batismo" />
			</div>								
				
			<!-- DOADOR DE ORGÃO -->
			<div class="col-md-3">
				<label class="control-label col-md-11 fontLabelForm">Doador de Org&atilde;o</label>				
				<input type="checkbox" name="doador_orgao" id="doador_orgao" class="form-control" />					
			</div>
						
			
			<!-- FOTO -->
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Foto </label>		
				<input class="form-control" type="file" name="foto" id="foto" />
			</div>												
			
			<div class="col-md-6">
				<label class="control-label fontLabelForm">&nbsp; </label>		
			</div>
			
			<!-- SALVAR -->				
			<div class="col-md-6">
				<input type="submit" class="btn btn-success btnCustom" value="Salvar"/>
			</div>
		</div>
	</div>
</form>