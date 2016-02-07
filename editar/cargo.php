<?php
	$id = $_GET["edtCargo"];
	$dao = new CargoDAO();
	$cargo = $dao->getPorId($id);
?>

<div class="row">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 25px;"class="col-md-11 labelcustom" >
		Edi&ccedil;&atilde;o de Cargo
	</div>		
</div>

<div class="row" >
	<div id="form-cadastro"class="col-md-12 form-cadastro">
		<form class="form-horizontal" id="formEditarCargo" method="post" method="post" enctype="multipart/form-data" role="form">
			<div class="row">							
				<div class="form-group col-md-12" >
					<!-- CARGO -->
					<label class="control-label col-md-2 labelcustom">Cargo</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="nome" id="nome" value="<?php echo $cargo->getNome(); ?>" />
						<input class="form-control" type="hidden" name="id" id="id" value="<?php echo $cargo->getId(); ?>" />
					</div>	
					
					<!-- SALVAR -->					
					<div class="col-md-2">
						<input type="submit" class="btn btn-success" value="Salvar"/>
					</div>	
				</div>
			</div>		
		</form>			
	</div>
</div>
