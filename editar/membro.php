<?php 
include_once("action/listar_cargos.php");	
include_once("action/editar_membro.php");

$id = $_GET["edtMembro"];
$dao = new PessoaDAO();
$pessoa = $dao->getPorId($id);

?>	
 
<div class="row" id="titleForm">
	<div style="font-size: 20px;" class="col-md-12 fontTitleForm" >
		:: Edi&ccedil;&atilde;o de Membros
	</div>		
</div>

<form class="form-horizontal" id="formEditarMembro" method="post" enctype="multipart/form-data" role="form">
		
	<div class="row" id="formCadastro">
			
		<div class="col-md-10">
			
			<!-- NOME -->				
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Nome </label>				
				<input class="form-control" value="<?php echo $pessoa->getNome(); ?>" type="text" name="nome" id="nome" />
				<input class="form-control" value="<?php echo $pessoa->getId(); ?>" type="hidden" name="id" id="id" />
			</div>	
							
			<!-- CARGO -->
			<div class="col-md-5">
			<label class="control-label fontLabelForm">Cargo </label>		
				<select class="form-control" name="cargo" id="cargo">
					<?php for ( $i = 0; $i < count($listaCargos); $i++ ) { ?>
						<option value="<?php echo $listaCargos[$i]["id"]; ?>" <?php if($listaCargos[$i]["id"] == $pessoa->getCargo()->getId() ){ echo("selected");}?> ><?php echo $listaCargos[$i]["nome"]; ?></option>
					<?php } ?>	
				</select>
			</div>		
							
			<!-- PAI -->				
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Pai </label>
				<input class="form-control" value="<?php echo $pessoa->getPai();?>" type="text" name="pai" id="pai" />
			</div>	
						
			<!-- MAE -->
			<div class="col-md-6">
				<label class="control-label fontLabelForm">Mãe </label>					
				<input class="form-control" value="<?php echo $pessoa->getMae();?>" type="text" name="mae" id="mae" />
			</div>						

			<!-- RG -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">RG</label>
				<input class="form-control" value="<?php echo $pessoa->getRg();?>" type="text" name="rg" id="rg" />
			</div>	
					
			<!-- CPF -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">CPF</label>				
				<input class="form-control" value="<?php echo $pessoa->getCpf();?>" type="text" name="cpf" id="cpf" />
			</div>		
			
			<!-- ESTADO CIVIL -->		
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Estado Civil</label>
				<select class="form-control" value="<?php echo $pessoa->getEstado_civil();?>" name="estado_civil" id="estado_civil">
					<option>-</option>
					<option <?php if ( $pessoa->getEstado_civil() == "Casado") {echo "selected"; }; ?> >Casado</option>
					<option <?php if ( $pessoa->getEstado_civil() == "Solteiro") {echo "selected"; }; ?> >Solteiro</option>
					<option <?php if ( $pessoa->getEstado_civil() == "Viuvo") {echo "selected"; }; ?> >Vi&uacute;vo</option>
				</select>						
			</div>			
			
			<!-- DATA DE NASCIMENTO -->
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Nascimento </label>		
				<input class="form-control" value="<?php echo $pessoa->getData_nascimento();?>" type="date" name="data_nascimento" id="data_nascimento" />
			</div>			
									
			<!-- GRUPO SANGUINEO -->				
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Grupo Sanguineo </label>	
				<select class="form-control" value="<?php echo $pessoa->getGrupo_sanguineo();?>" name="grupo_sanguineo" id="grupo_sanguineo">
					<option>-</option>						
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "A +") {echo "selected"; }; ?> >A +</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "A -") {echo "selected"; }; ?> >A -</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "B +") {echo "selected"; }; ?> >B +</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "B -") {echo "selected"; }; ?> >B -</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "AB +") {echo "selected"; }; ?> >AB +</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "AB -") {echo "selected"; }; ?> >AB -</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "O +") {echo "selected"; }; ?> >O +</option>
					<option <?php if ( $pessoa->getGrupo_sanguineo() == "O -") {echo "selected"; }; ?> >O -</option>
		
				</select>
			</div>									

			<!-- DATA ADMISSAO -->		
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Admissão </label>
				<input class="form-control" value="<?php echo $pessoa->getData_admissao();?>" type="date" name="data_admissao" id="data_admissao" />
			</div>						
			
			<!-- DATA BATISMO -->
			<div class="col-md-3">
				<label class="control-label fontLabelForm">Batismo </label>
				<input class="form-control" value="<?php echo $pessoa->getData_batismo();?>"type="date" name="data_batismo" id="data_batismo" />
			</div>								
				
			<!-- DOADOR DE ORGÃO -->
			<div class="col-md-3">
				<label class="control-label col-md-11 fontLabelForm">Doador de Org&atilde;o</label>				
				<input type="checkbox" <?php if($pessoa->getDoador_orgao() == "T" ){ echo("checked"); }?> name="doador_orgao" id="doador_orgao" class="form-control" />
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
