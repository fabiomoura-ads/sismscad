<?php
	if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {

		$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
		$nome = $_FILES['arquivo']['name'];
		 
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
				echo $destino;
			} else
				echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";				
		} else
			echo "Você poderá enviar apenas arquivos *.jpg; *.jpeg; *.gif; *.png<br />";			
	} else{
		echo "Você não enviou nenhum arquivo!";		
	}

?>