<?php

class Usuario{
	private $id;
	private $login;
	private $senha;
	private $data_criacao;
	private $dao = "UsuarioDAO";
	
	public function Usuario(){
		$this->dao = new UsuarioDAO();
	}	

	public function getId(){
		return $this->id;
	}
	
	public function setId( $id ){
		$this->id = $id;
	}

	public function getLogin(){
		return $this->login;
	}
	
	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->senha;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getData_criacao(){
		return $this->data_criacao;
	}

	public function setData_criacao($data_criacao){
		$this->data_criacao = $data_criacao;
	}
	
	public function autenticar(){
		return $this->dao->autenticar($this);		
	}
	
	public function grava(){
		return $this->dao->cadastrar($this);		
	}	
}

?>