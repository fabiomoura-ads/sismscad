<?php

class PessoaDAO{

	private $dao;
	private $CLASS_NAME = "Pessoa"; 
	
	public function PessoaDAO(){
              $this->dao = new Conexao();					
	}
		
	public function cadastrar( $pessoa ){
		
				
		$sql = "insert into pessoa( nome, pai, mae, cargo, data_admissao, data_batismo, doador_orgao, grupo_sanguineo, foto, rg, cpf, data_nascimento, estado_civil ) 
				values ( :nome, :pai, :mae, :cargo, :data_admissao, :data_batismo, :doador_orgao, :grupo_sanguineo, :foto, :rg, :cpf, :data_nascimento, :estado_civil )"; 				
		
		$this->dao->beginTransaction();	
		$stmt = $this->dao->prepare( $sql );												
		$stmt->bindParam(":nome", $pessoa->getNome());
		$stmt->bindParam(":pai", $pessoa->getPai());
		$stmt->bindParam(":mae", $pessoa->getMae());
		$stmt->bindParam(":cargo", $pessoa->getCargo());
		$stmt->bindParam(":data_admissao", $pessoa->getData_admissao());
		$stmt->bindParam(":data_batismo", $pessoa->getData_batismo());
		$stmt->bindParam(":doador_orgao", $pessoa->getDoador_orgao());		
		$stmt->bindParam(":grupo_sanguineo", $pessoa->getGrupo_sanguineo());		
		$stmt->bindParam(":foto", $pessoa->getFoto());		
		$stmt->bindParam(":rg", $pessoa->getRg());	
		$stmt->bindParam(":cpf", $pessoa->getCpf());	
		$stmt->bindParam(":data_nascimento", $pessoa->getData_nascimento());	
		$stmt->bindParam(":estado_civil", $pessoa->getEstado_civil());			
		
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
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};

		$sql = "select 
					p.*, c.nome as nome_cargo,
					case
						when (p.doador_orgao = 'T') then 'Sim'
					else	
						'Não'
					end eh_doador
				from 
					pessoa p 
				inner join 
					cargo c on p.cargo = c.id 
				order by p.nome";
		$stmt = $this->dao->query($sql);	
						
		$listaPessoa = $stmt->fetchAll(PDO::FETCH_ASSOC);	
		
		return $listaPessoa;		
	}	
	
	public function getPorId( $id ) {
		
		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};

		$sql = "select * from pessoa where id = $id ";		
		$stmt = $this->dao->query($sql);
	
		$pessoa = $stmt->fetchObject($this->CLASS_NAME);
		$pessoa->setCargo($this->pegaCargo($pessoa->getCargo()));
	
		return $pessoa;
	}	

	public function getPorNome( $nome ) {

		if ( !$this->dao->inTransaction() ) {
			$this->dao->beginTransaction();		
		};
		
		$sql = "select * from pessoa where nome = :nome ";	

		$stmt = $this->dao->prepare($sql);
		$stmt->bindParam(":nome", $nome);		
		$stmt->execute();	
		
		$pessoa = $stmt->fetchObject($this->CLASS_NAME);
		
		return $pessoa;
	}
	
	public function pegaCargo($id){
		$cargoDAO = new CargoDAO();
		$cargo = $cargoDAO->getPorId($id);
		return $cargo;
	}
	
	public function alterar( $pessoa ){
		
		$foto = "";
		if ( $pessoa->getFoto() != "" ) {
			$foto = ",foto = :foto";
		}
		$sql = "update pessoa set 
									nome = :nome, pai = :pai, mae = :mae, cargo = :cargo, data_admissao = :data_admissao, data_batismo = :data_batismo,
									doador_orgao = :doador_orgao, grupo_sanguineo = :grupo_sanguineo, rg = :rg, cpf = :cpf, data_nascimento = :data_nascimento, 
									estado_civil = :estado_civil ".$foto." where id = :id ";
		
		$this->dao->beginTransaction();	
		$stmt = $this->dao->prepare( $sql );												
		$stmt->bindParam(":id", $pessoa->getId());
		$stmt->bindParam(":nome", $pessoa->getNome());
		$stmt->bindParam(":pai", $pessoa->getPai());
		$stmt->bindParam(":mae", $pessoa->getMae());
		$stmt->bindParam(":cargo", $pessoa->getCargo());
		$stmt->bindParam(":data_admissao", $pessoa->getData_admissao());
		$stmt->bindParam(":data_batismo", $pessoa->getData_batismo());
		$stmt->bindParam(":doador_orgao", $pessoa->getDoador_orgao());		
		$stmt->bindParam(":grupo_sanguineo", $pessoa->getGrupo_sanguineo());		
		if( $foto ) {
			$stmt->bindParam(":foto", $pessoa->getFoto());					
		}  
		$stmt->bindParam(":rg", $pessoa->getRg());	
		$stmt->bindParam(":cpf", $pessoa->getCpf());	
		$stmt->bindParam(":data_nascimento", $pessoa->getData_nascimento());	
		$stmt->bindParam(":estado_civil", $pessoa->getEstado_civil());			
		
		$result = $stmt->execute();
				
		if ( $result ) {
			$this->dao->commit();
			return "true";
		} else {
			$this->dao->rollback();
			return "";			
		}		
	}	
	
	public function excluir( $id ){
		
		$sql = "delete from pessoa where id = :id";
		
		$this->dao->beginTransaction();	
		$stmt = $this->dao->prepare( $sql );												
		$stmt->bindParam(":id", $id);
		
		$result = $stmt->execute();
				
		if ( $result ) {
			$this->dao->commit();
			echo "true";
		} else {
			$this->dao->rollback();
			echo "";			
		}		
	}	
	
}

?>