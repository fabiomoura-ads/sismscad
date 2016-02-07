/*
 * @Description: Scripts jQuery com Ajax para requisições;
 * Este script é incorporado ao html no carregamento do arquivo.
 * O script tem por finalidade programar eventos para os botoes de requisição, 
 * a um arquivo PHP, que irá realizar suas validaçõe e cadastros e depois retornar
 * uma resposta, sem necessidade de carregamento da página.
 * @Author: Fábio Moura
 * @Date: 28/10/201 
 * */

$(function(){
	
	$("#respostaLogin").hide();
	
	$("#fechar").click(function(){	
		$("#respostaLogin").hide();
	});	
	
	var prossegue = false;
	var msg = null;
	
	// 1 - Click do formulario de login
	/*$('#inputSearch').keyup(function(){
		var dados = $('#inputSearch').val();		
		dados = "filtro="+dados;
		
		$.post("listar_cargos.php", dados, 
			function(data){					
				debugger
				if( data != false ) {	        				
					
				} else {						
					//$("#respostaLogin").show();
				}	        		
			} , "html");				
		return prossegue;		
	}); */

	   
	// 2 - Click do formulario de login
	$('#formLogin').submit(function(){
		var dados = $('#formLogin').serialize();  	
			debugger
			$.post("action/login.php", dados, 
				function(data){					
					debugger
					if( data != false ) {	        				
						location.href=data;
						prossegue = true;						
					} else {						
						$("#respostaLogin").show();
					}	        		
				} , "html");				
			return prossegue;	    	    
	   }); 
	   
	
	
	// 2 - Click do formulario de cadastro de membro
	/*$('#formCadastroMembro').submit(function(){
		debugger
		var dados = $('#formCadastroMembro').serialize();  	
			$.post("action/cadastrar_membro.php", dados, 
				function(data){	
					debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("insert", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("insert", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); */
	   
	// 3 - Click do formulario de cadastro de cargos
	$('#formCadastroCargo').submit(function(){
		//debugger
		var dados = $('#formCadastroCargo').serialize();  	
			$.post("action/cadastrar_cargo.php", dados, 
				function(data){	
				debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("insert", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("insert", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); 	  
	   
	   prossegue = false;
	 // 4 - Click para gerar carteiras
	$('#gerarCarteira').click(function(){
	       var checkbox = $('input:checkbox[name^=arMembros]:checked');
			if(checkbox.length > 0){
				var val = [];
				checkbox.each(function(){
					val.push($(this).val());
				});
				debugger
					
				window.open("action/gera_carteira.php?ar="+val, "_blank");
				
				/*$.post("action/gera_carteira.php", {registros : val} , 
					function(data){	
					debugger
						if( data != false ) {
							window.location="action/exibe_carteira.php";
						}
						
					} , "html");				
				return prossegue;*/
				
					
			}	  	    
	}); 
	
// 3 - Click do formulario de cadastro de usuários
	$('#formCadastroUsuario').submit(function(){
		//debugger
		var dados = $('#formCadastroUsuario').serialize();  	
			$.post("action/cadastrar_usuario.php", dados, 
				function(data){	
				debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("insert", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("insert", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); 	  	

	// 3 - Click do formulario de cadastro de cargos
	$('#formEditarCargo').submit(function(){
		debugger
		var dados = $('#formEditarCargo').serialize();  	
			$.post("action/editar_cargo.php", dados, 
				function(data){	
				debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("update", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("update", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); 	
	   
	// 3 - Click do formulario de cadastro de cargos
	$('#formEditarUsuario').submit(function(){
		debugger
		var dados = $('#formEditarUsuario').serialize();  	
			$.post("action/editar_usuario.php", dados, 
				function(data){	
				debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("update", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("update", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); 	
	   
	   
	// 3 - Click do formulario de cadastro de cargos
	$('.btnExcluir').click(function(){
		debugger
		var dados = $(this).val();
		var url = $(this)[0].name
		
		//var dados = $('#formEditarCargo').serialize();  	
			$.post("action/"+url+".php", dados, 
				function(data){	
				debugger
					if( data != false ) {
						$("#resposta").html(pegaRespostaDiv("delete", "ok")).show();	
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 1500);									
						prossegue = true;						
					} else {						
						$("#resposta").html(pegaRespostaDiv("delete", "error")).show();								
					}	  
					$("#fechar").click(function(){	
						$("#resposta").hide();
					});	
					
				} , "html");				
			return prossegue;	    	    
	   }); 	   
	/*
	// 2 - Click no botão cadastrar categoria
	$('#formCategoria').submit(function(){
		debugger;

		var dados = $('#formCategoria').serialize();    
	        $.post("service.php", dados, 
	        		function(data){
	        			if( data.id ) {	        				
	        				$("#respostaCategoria").html("<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>");        		        
	        			} else {
	        				$("#respostaCategoria").html("<div class='alert alert-danger' role='alert'>Erro no cadastro, verifique!</div>");       				
	        			}	        		
	        			
        				var intervalo = setInterval(function(){
        					location.reload();
        		         }, 2000);
        				        				
	        		} , "json"); 
	        
	        return false;
	    
	   }); 
	
	
	// 3 - Click no botão cadastrar usuário
	$('#formCadUsuario').submit(function(){
		debugger;		
		var senha = $("#senha").val();
		var r_senha =  $("#r_senha").val();
		
		if ( senha != r_senha ) {
			confirm = document.getElementById("r_senha");
			confirm.setCustomValidity("Senhas diferentes!");
			return true;
		}
			
		var dados = $('#formCadUsuario').serialize();    
        $.post("service.php", dados, 
        		function(data){
        			if( data.id ) {	        				
        				$("#respostaUsuario").html("<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>");        		        
        			} else {
        				$("#respostaUsuario").html("<div class='alert alert-danger' role='alert'Erro no cadastro, verifique!</div>");       				
        			}	        		
        			
    				var intervalo = setInterval(function(){
    					location.reload();
    		         }, 2000);
    				        				
        		} , "json"); 
        
        	return false;
    
		}); 
	
	// 4 - Click no botão cadastrar programação
	$('#formCadProgramacao').submit(function(){
		var dados = $('#formCadProgramacao').serialize();
		debugger;
        $.post("service.php", dados,  
        		function(data){
		   			if( data.id ) {	        				
						$("#respostaCadProgramacao").html("<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>");        		        
					} else {
						$("#respostaCadProgramacao").html("<div class='alert alert-danger' role='alert'>Erro no cadastro, verifique!</div>");       				
					}	        		
					
					var intervalo = setInterval(function(){
						location.reload(); 
					}, 2000);
					        	        	
        } , "json"); 
        
        	return false;
    
		});  */	
		

});

function pegaRespostaDiv( tipo, status ){
	
	var button = "<button type='button' class='close' data-dismiss='modal'><span id='fechar' name='fechar' aria-hidden='true'>&times;</span></button>";	
	var abreDiv = "";
	var fechaDiv = "</div>";
	var msg = "";
	var div = "";
	
	if ( tipo == "insert") {
		if ( status == "ok" ) {
			abreDiv = "<div class='alert alert-success' role='alert'>";		
			msg = "Registro inserido com sucesso!";	
		} else if ( status == "error") {
			abreDiv = "<div class='alert alert-danger' role='alert'>";		
			msg = "Não foi possível inserir o registro, verifique!";				
		}	
	} else if ( tipo == "update" ){
		if ( status == "ok" ) {
			abreDiv = "<div class='alert alert-success' role='alert'>";
			msg = "Registro atualizado com sucesso!";
		} else if ( status == "error") {
			abreDiv = "<div class='alert alert-danger' role='alert'>";		
			msg = "Não foi possível atualizar o registro, verifique!";				
		}			
	} else if ( tipo == "delete" ) {
		if ( status == "ok" ) {
			abreDiv = "<div class='alert alert-success' role='alert'>";
			msg = "Registro removido com sucesso!";
		} else if ( status == "error") {
			abreDiv = "<div class='alert alert-danger' role='alert'>";		
			msg = "Não foi possível remover o registro, verifique!";				
		}				
	} 
	
	div = abreDiv + msg + button + fechaDiv;
	
	debugger
	
	return div;	
}