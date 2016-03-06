<?php include("action/listar_usuarios.php"); ?>	
<div class="row" id="titleForm">
	<div class="col-md-12" >
	</div>
	<div style="font-size: 20px;" class="col-md-8 fontTitleForm" >
		:: Usu&aacute;rios Cadastrados no Sistema
	</div>	
	
	<div class="col-md-4 iconInput">
		<form class="form-horizontal" id="formSearch">
		   <input id="inputSearch" type="text" class="form-control" placeholder=" Pesquisar..." />
		   <i class="glyphicon glyphicon-search iconColor"></i>		
		</form>		
	</div>
</div>
<br />
 
<div class="row" >
	<div class="panel panel-default col-md-13">
	 
	  <!-- Table -->
	  <table id="tableRegistros" class="table table-bordered table-hover table-condensed">
		<thead>
			<tr class="titleTable">
				<th class="col-md-6">Login</th>
				<th class="col-md-3">Data Cria&ccedil;&atilde;o</th>			
				<th class="col-md-1">Editar</th>			
				<th class="col-md-1">Excluir</th>			
			</tr>
		  </thead>
		  <tbody> 
			<?php for ( $i = 0; $i < count($listaUsuarios); $i++ ) { ?>
				<tr class="fontTextTable">
					<td><?php echo $listaUsuarios[$i]["login"]; ?></td>
					<td><?php 
							$data = new DateTime($listaUsuarios[$i]["data_criacao"]);
							echo $data->format("d/m/Y"); 
						?>
					</td>					
					<td><button class="btn btn-warning" id="btnEditar"><a class="linkBranco" href="?edtUsuario=<?php echo $listaUsuarios[$i]["id"];?>"><span class="glyphicon glyphicon-edit"></span></a></button></td>	
					<td><button class="btn btn-danger btnExcluir" name="excluir_usuario" value="excUsuario=<?php echo $listaUsuarios[$i]["id"]; ?>"><span class="glyphicon glyphicon-remove"></span></button></td>					
				</tr>  		
			<?php } ?>	  
			
		  </tbody>	  
	  </table>
	</div>		
	
</div>


