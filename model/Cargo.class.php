<?php

class Cargo{
	private $id;
	private $nome;
	private $data_criacao;
	private $dao = "CargoDAO";
	
	public function Cargo(){
		$this->dao = new CargoDAO();
	}	

	public function getId(){
		return $this->id;
	}
	
	public function setId( $id ){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getData_criacao(){
		return $this->data_criacao;
	}
	
	public function setData_criacao($data_criacao){
		$this->data_criacao = $data_criacao;
	}

	public function grava(){
		return $this->dao->cadastrar($this);		
	}	
}

?>