<?php 
include_once("action/listar_cargos.php");	
include_once("action/editar_membro.php");

$id = $_GET["edtMembro"];
$dao = new PessoaDAO();
$pessoa = $dao->getPorId($id);

?>	
 
<div class="row">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 25px;"class="col-md-11 labelcustom" >
		Edi&ccedil;&atilde;o de Membros
	</div>		
</div>

<div class="row" >
	<div id="form-cadastro"class="col-md-12 form-cadastro">
		<form class="form-horizontal" id="formEditarMembro" method="post" enctype="multipart/form-data" role="form">
			<div class="row">							
				<div class="form-group col-md-12" >
					<!-- NOME -->
					<label class="control-label col-md-2 labelcustom">Nome </label>
					<div class="col-md-5">
						<input class="form-control" value="<?php echo $pessoa->getNome(); ?>" type="text" name="nome" id="nome" />
						<input class="form-control" value="<?php echo $pessoa->getId(); ?>" type="hidden" name="id" id="id" />
					</div>	
					
					<!-- CARGO -->
					<label class="control-label col-md-2 labelcustom">Cargo </label>
					<div class="col-md-3">
						<select class="form-control" name="cargo" id="cargo">
							<?php for ( $i = 0; $i < count($listaCargos); $i++ ) { ?>
								<option value="<?php echo $listaCargos[$i]["id"]; ?>" <?php if($listaCargos[$i]["id"] == $pessoa->getCargo()->getId() ){ echo("selected");}?> ><?php echo $listaCargos[$i]["nome"]; ?></option>
							<?php } ?>	
						</select>
					</div>						
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-12" >
					<!-- PAI -->
					<label class="control-label col-md-2 labelcustom">Pai </label>
					<div class="col-md-4">
						<input class="form-control" value="<?php echo $pessoa->getPai();?>" type="text" name="pai" id="pai" />
					</div>	
					
					<!-- MAE -->
					<label class="control-label col-md-2 labelcustom">M&atilde;e </label>
					<div class="col-md-4">
						<input class="form-control" value="<?php echo $pessoa->getMae();?>" type="text" name="mae" id="mae" />
					</div>						
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12" >
					<!-- ESTADO CIVIL -->
					<label class="control-label col-md-2 labelcustom">RG</label>
					<div class="col-md-3">
						<input class="form-control" value="<?php echo $pessoa->getRg();?>" type="text" name="rg" id="rg" />
					</div>	
					
					<!-- DATA DE NASCIMENTO -->
					<label class="control-label col-md-1 labelcustom">CPF</label>
					<div class="col-md-3">
						<input class="form-control" value="<?php echo $pessoa->getCpf();?>" type="text" name="cpf" id="cpf" />
					</div>		
					<!-- DOADOR DE ORGÃO -->
					<label class="control-label col-md-2 labelcustom">Doador de Org&atilde;o</label>
					<div class="col-md-1">
						<input type="checkbox" <?php if($pessoa->getDoador_orgao() == "T" ){ echo("checked"); }?> name="doador_orgao" id="doador_orgao" class="form-control" />
					</div>	
	
					
				</div>
			</div>						
			<div class="row">
				<div class="form-group col-md-12" >
					<!-- ESTADO CIVIL -->
					<label class="control-label col-md-2 labelcustom">Estado Civil</label>
					<div class="col-md-2">
						<select class="form-control" value="<?php echo $pessoa->getEstado_civil();?>" name="estado_civil" id="estado_civil">
							<option>-</option>
							<option <?php if ( $pessoa->getEstado_civil() == "Casado") {echo "selected"; }; ?> >Casado</option>
							<option <?php if ( $pessoa->getEstado_civil() == "Solteiro") {echo "selected"; }; ?> >Solteiro</option>
							<option <?php if ( $pessoa->getEstado_civil() == "Viuvo") {echo "selected"; }; ?> >Vi&uacute;vo</option>
						</select>						
					</div>	
					<!-- GRUPO SANGUINEO -->
					<label class="control-label col-md-2 labelcustom">Grupo Sanguineo </label>
					<div class="col-md-2">
						<select class="form-control" value="<?php echo $pessoa->getGrupo_sanguineo();?>" name="grupo_sanguineo" id="grupo_sanguineo">
							<option>-</option>						
							<option <?php if ( $pessoa->getGrupo_sanguineo() == "A") {echo "selected"; }; ?> >A</option>
							<option <?php if ( $pessoa->getGrupo_sanguineo() == "B") {echo "selected"; }; ?> >B</option>
							<option <?php if ( $pessoa->getGrupo_sanguineo() == "AB") {echo "selected"; }; ?> >AB</option>
							<option <?php if ( $pessoa->getGrupo_sanguineo() == "O") {echo "selected"; }; ?> >O</option>
						</select>
					</div>							
			
				</div>
			</div>			
			
			<div class="row">
				<div class="form-group col-md-12" >
				
					<!-- DATA DE NASCIMENTO -->
					<label class="control-label col-md-2 labelcustom">Nascimento </label>
					<div class="col-md-2">
						<input class="form-control" value="<?php echo $pessoa->getData_nascimento();?>" type="date" name="data_nascimento" id="data_nascimento" />
					</div>						
				<!-- DATA ADMISSAO -->
					<label class="control-label col-md-2 labelcustom">Admiss&atilde;o </label>
					<div class="col-md-2">
						<input class="form-control" value="<?php echo $pessoa->getData_admissao();?>" type="date" name="data_admissao" id="data_admissao" />
					</div>						
					<!-- DATA BATISMO -->
					<label class="control-label col-md-2 labelcustom">Batismo </label>
					<div class="col-md-2">
						<input class="form-control" value="<?php echo $pessoa->getData_batismo();?>"type="date" name="data_batismo" id="data_batismo" />
					</div>								
				</div>				
			</div>	
			<div class="row">				
				<div class="form-group col-md-12" >					
					<!-- FOTO -->
					<label class="control-label col-md-2 labelcustom">Foto </label>
					<div class="col-md-5">
						<input class="form-control" type="file" name="foto" id="foto" />
					</div>												
					
				</div>				
			</div>
			<div class="row">				
				<div class="form-group col-md-12" >					
					<!-- SALVAR -->				
					<div class="col-md-6">
					</div>
					<div class="col-md-6">
						<input type="submit" class="btn btn-success" value="Salvar"/>
					</div>																	
				</div>				
			</div>				
		</form>			
	</div>
</div>
