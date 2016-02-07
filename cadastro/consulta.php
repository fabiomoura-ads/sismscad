
<?php 
//carrega lista de membros
include("action/listar_membros.php");	
?>	

<div class="row">
	<div class="col-md-1" >
	</div>
	<div style="font-size: 25px;" class="col-md-8 labelcustom" >
		Membros Cadastrados no Sistema
	</div>		
	<div class="col-md-3">
		<button class="btn btn-default" id="gerarCarteira"><span class="glyphicon glyphicon-credit-card"></span> Gerar</button>	
	</div>
</div>
<br />
 
<div class="row" >
	<div class="panel panel-default col-md-13">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Dados Cadastrais</div>

	  <!-- Table -->
	  <table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th class="col-md-1"></th>
				<th class="col-md-2">Nome</th>
				<th class="col-md-2">Pai</th>
				<th class="col-md-2">Mae</th>
				<th class="col-md-2">Cargo</th>
				<th class="col-md-1">Admiss&atilde;o</th>
				<th class="col-md-1">Batismo</th>
				<th class="col-md-1">Doador</th>
				<th class="col-md-1">Sanguineo</th>
			</tr>
		  </thead>
		  <tbody> 
			<?php for ( $i = 0; $i < count($listaMembros); $i++ ) { ?>
				<tr>
					<div class="col-md-2">
					<td><input type="checkbox" name="arMembros[]" class="form-control" width="50" value="<?php echo $listaMembros[$i]["id"]; ?>"></td>
					</div>
					<td><?php echo $listaMembros[$i]["nome"]; ?></td>
					<td><?php echo $listaMembros[$i]["pai"]; ?></td>
					<td><?php echo $listaMembros[$i]["mae"]; ?></td>
					<td><?php echo $listaMembros[$i]["nome_cargo"]; ?></td>
					<td><?php echo $listaMembros[$i]["data_admissao"]; ?></td>
					<td><?php echo $listaMembros[$i]["data_batismo"]; ?></td>
					<td><?php echo $listaMembros[$i]["eh_doador"]; ?></td>
					<td><?php echo $listaMembros[$i]["grupo_sanguineo"]; ?></td>
				</tr>  		
			<?php } ?>	  
			
		  </tbody>	  
	  </table>
	</div>		
	
</div>


