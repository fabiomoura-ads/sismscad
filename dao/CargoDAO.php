<?php

class CargoDAO{

	private $dao;
	private $CLASS_NAME = "Cargo"; 
	
	public function CargoDAO(){
		$this->dao = new Conexao();		
	}
			
	public function cadastrar( $cargo ){

		$sql = "insert into cargo( nome, data_criacao) values ( :nome, :data_criacao ) ";					

		$this->dao->beginTransaction();				

		$stmt = $this->dao->prepare( $sql );	
		$stmt->bindParam( ":nome", $cargo->getNome() );	
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
		
		$sql = "select * from cargo order by nome ";		
		
		$stmt = $this->dao->prepare($sql);
		$stmt->execute();
				
		$linha = $stmt->fetchAll(PDO::FETCH_ASSOC);		
		
		return $linha;		
	}	
	
	public function getPorId( $id ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
		
		$sql = "select * from cargo where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $id);		
		$stmt->execute();	
		
		$cargo = $stmt->fetchObject($this->CLASS_NAME);
		
		return $cargo;
	}	
	
	public function alterar( $cargo ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
				
		$sql = "update cargo set nome = :nome where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $cargo->getId() );		
		$stmt->bindParam(":nome", $cargo->getNome());		
		
		$stmt->execute();	
		$this->dao->commit();
		
		$res = $stmt->rowCount();
		
		return $res;
	}	

	public function excluir( $id ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
				
		$sql = "delete from cargo where id = :id ";	
		
		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":id", $id );		
		
		$stmt->execute();	
		$this->dao->commit();
		
		$res = $stmt->rowCount();
		
		return $res;
	}	
		
}

?>