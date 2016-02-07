<?php include("action/listar_membros.php");	?>	

<div class="row" id="titleForm">
	<div class="col-md-12" >
	</div>
	<div style="font-size: 20px;" class="col-md-8 fontTitleForm" >
		:: Membros Cadastrados no Sistema
	</div>		
	
	<div class="col-md-4 iconInput">
		<form class="form-horizontal" id="formSearch">
		   <input id="inputSearch" type="text" class="form-control" placeholder="Pesquisar..." />
		   <i class="glyphicon glyphicon-search iconColor"></i>		
		</form>		
	</div>
</div>
<br />
 
<div class="row" >
	<div class="panel panel-default col-md-14">
	  <!-- Default panel contents -->
	  <!--div class="panel-heading">:: Membros</div>-->

	  <!-- Table -->
	  <table id="tableRegistros" class="table table-bordered table-hover table-condensed">
		<thead>
			<tr class="titleTable">
				<th class="col-md-4">Nome</th>
				<!--
				<th class="col-md-2">Pai</th>
				<th class="col-md-2">Mae</th>
				-->
				<th class="col-md-2">Cargo</th>
				<!--
				<th class="col-md-1">Civil</th>
				<th class="col-md-1">RG</th>
				<th class="col-md-2">CPF</th>
				-->
				<th class="col-md-1">Nascimento</th>				
				<th class="col-md-1">Admiss&atilde;o</th>
				<th class="col-md-1">Batismo</th>
				<th class="col-md-1">Doador</th>
				<!--<th class="col-md-1">Sanguineo</th>-->
				<th class="col-md-1">Foto</th>
				<th class="col-md-1">Editar</th>			
				<th class="col-md-1">Excluir</th>									
			</tr>
		  </thead>
		  <tbody style="font-size:12px; "> 
			<?php for ( $i = 0; $i < count($listaMembros); $i++ ) { ?>
				<tr class="fontTextTable">  					
					<div class="col-md-2">

					<td><div class="textoTD"><?php echo $listaMembros[$i]["nome"]; ?></div></td>
					<!--
					<td><div class="textoTD">< ?php echo $listaMembros[$i]["pai"]; ?></div></td>
					<td><div class="textoTD">< ?php echo $listaMembros[$i]["mae"]; ?></div></td>
					-->
					<td><div class="textoTD"><?php echo $listaMembros[$i]["nome_cargo"]; ?></div></td>	
					<!--
					<td><div class="textoTD">< ?php echo $listaMembros[$i]["estado_civil"]; ?></div></td>
					<td><div class="textoTD">< ?php echo $listaMembros[$i]["rg"]; ?></div></td>
					<td><div class="textoTD">< ?php echo $listaMembros[$i]["cpf"]; ?></div></td>
					-->
					<td><div class="textoTD"><?php 
							$data = new DateTime($listaMembros[$i]["data_nascimento"]);
							echo $data->format("d/m/Y"); 
						?>
					</div></td>									
					<td><div class="textoTD"><?php 
							$data = new DateTime($listaMembros[$i]["data_admissao"]);
							echo $data->format("d/m/Y"); 
						?>
					</div></td>					
					<td><div class="textoTD"><?php 
							$data = new DateTime($listaMembros[$i]["data_batismo"]);
							echo $data->format("d/m/Y"); 
						?>
					</div></td>						
					<td><div class="textoTD"><?php echo $listaMembros[$i]["eh_doador"]; ?></div></td>
					<!--<td><div class="textoTD"><?php echo $listaMembros[$i]["grupo_sanguineo"]; ?></div></td>-->
					<td><?php echo "<img src=".$listaMembros[$i]["foto"]." />"; ?></td>	
					
					<td><div class="textoTD"><button class="btn btn-warning" id="btnEditar"><a class="linkBranco" href="?edtMembro=<?php echo $listaMembros[$i]["id"];?>"><span class="glyphicon glyphicon-edit"></span></a></button></div></td>	
					<td><div class="textoTD"><button class="btn btn-danger btnExcluir" name="excluir_membro" value="excMembro=<?php echo $listaMembros[$i]["id"]; ?>"><span class="glyphicon glyphicon-remove"></span></button></div></td>					
				</tr>  		
			<?php } ?>	  
			
		  </tbody>	  
	  </table>
	</div>		
	
</div>


