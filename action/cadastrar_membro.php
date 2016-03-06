<?php

if ( isset($_POST['nome']) ) {

	$pessoa = new Pessoa();		
	$pessoa->setNome($_POST['nome']);
	$pessoa->setPai($_POST['pai']);
	$pessoa->setMae($_POST['mae']);
	$pessoa->setCargo($_POST['cargo']);
	$pessoa->setRg($_POST['rg']);
	$pessoa->setCpf($_POST['cpf']);
	$pessoa->setData_nascimento($_POST['data_nascimento']);
	$pessoa->setEstado_civil($_POST['estado_civil']);
	$pessoa->setData_admissao($_POST['data_admissao']);
	$pessoa->setData_batismo($_POST['data_batismo']);
		
	if (isset($_POST['doador_orgao'])) {
		$pessoa->setDoador_orgao($_POST['doador_orgao']);
	} else {
		$pessoa->setDoador_orgao("F");
	}
	$pessoa->setGrupo_sanguineo($_POST['grupo_sanguineo']);
	
	if(isset($_FILES['foto']['tmp_name']) && $_FILES["foto"]["error"] == 0) {

		$arquivo_tmp = $_FILES['foto']['tmp_name'];
		$nome = $_FILES['foto']['name'];
		 
		// Pega a extensao
		$extensao = strrchr($nome, '.'); 
		// Converte a extensao para mimusculo
		$extensao = strtolower($extensao); 
		// Somente imagens, .jpg;.jpeg;.gif;.png		
		if(strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
			// Cria um nome único para esta imagem
			$novoNome = md5(microtime()) . $extensao;
			 
			// Concatena a pasta com o nome
			$destino = 'image/' . $novoNome;
			
			// tenta mover o arquivo para o destino
			if( @move_uploaded_file( $arquivo_tmp, $destino  )) {
				$pessoa->setFoto($destino);
				$_FILES['foto']['name'] = null;
			} else
				echo "";			
		} else
			echo "";		
	} else{
		echo "";	
	}

	$gravou = $pessoa->grava();

	if ( $gravou ) {
		echo "<script type='text/javascript'>
				alert('Registro salvo com sucesso!');		
		</script>";
	} 	

}

?>
