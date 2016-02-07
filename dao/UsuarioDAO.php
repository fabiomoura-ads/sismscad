<?php

class UsuarioDAO{

	private $dao;
	private $CLASS_NAME = "Usuario"; 
	
	public function UsuarioDAO(){
		$this->dao = new Conexao();		
	}
			
	public function cadastrar( $usuario ){

		$sql = "insert into usuario( login, senha, data_criacao ) values ( :login, MD5(:senha), :data_criacao ) ";					

		$this->dao->beginTransaction();				

		$stmt = $this->dao->prepare( $sql );	
		$stmt->bindParam( ":login", $usuario->getLogin() );	
		$stmt->bindParam( ":senha", $usuario->getSenha() );	
		$stmt->bindParam( ":data_criacao", date("Y-m-d"));	
			
		$result = $stmt->execute();

		if ( $result ) {	
			$this->dao->commit();
			return "true";
		} else {
			$this->dao->rollback();
			return "";
		}	
	}

	public function listar() {
				
		$sql = "select * from usuario ";
		
		$stmt = $this->dao->prepare($sql);
		$stmt->execute();
				
		$linha = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		return $linha;		
	}	
	
	public function getPorId( $id ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
		
		$sql = "select * from usuario where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $id);		
		$stmt->execute();	
		
		$usuario = $stmt->fetchObject($this->CLASS_NAME);
		
		return $usuario;
	}	
	
	public function autenticar( $usuario ) {
	
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();
		};

		$sql = "select * from usuario where login = :login and senha = MD5( :senha ) ";
				
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":login", $usuario->getLogin() );
		$stmt->bindParam(":senha", $usuario->getSenha() );					
		$stmt->execute();

		$usuario = $stmt->fetchObject($this->CLASS_NAME);	
		
		return $usuario;
	}	
	
	public function alterar( $usuario ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
				
		$senha = "";
		if ( $this->verificaAlteracaoDeSenha($usuario) ) {
			$senha = ",senha = MD5(:senha)";
		}	
		
		$sql = "update usuario set login = :login ".$senha." where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $usuario->getId() );		
		$stmt->bindParam(":login", $usuario->getLogin());
		if ( $senha ) {
			$stmt->bindParam(":senha", $usuario->getSenha());	
		}		
		$stmt->execute();	
		$this->dao->commit();
		
		$res = $stmt->rowCount();
		
		return $res;
	}	

	public function verificaAlteracaoDeSenha( $usuario ){
		echo $usuario->getId();
		echo $usuario->getLogin();
		$usuario_temp = $this->getPorId($usuario->getId());
		if ( $usuario_temp->getSenha() == $usuario->getSenha() ) {
			return false;
		} 
		
		return true;
	}
	
	public function excluir( $id ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
				
		$sql = "delete from usuario where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $id );		
		
		$stmt->execute();	
		$this->dao->commit();
		
		$res = $stmt->rowCount();
		
		return $res;
	}		
}

?>