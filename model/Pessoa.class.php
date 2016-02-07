<?php

class Pessoa{
	private $id;
	private $nome;
	private $pai;
	private $mae;	
	private $cargo;
	private $data_admissao;
	private $data_batismo;
	private $foto;
	private $doador_orgao;
	private $grupo_sanguineo;
	private $rg;
	private $cpf;
	private $data_nascimento;
	private $estado_civil;
	
	private $dao = "PessoaDAO";
	
	public function Pessoa(){
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

	public function getPai(){
		return $this->pai;
	}
	
	public function setPai($pai){
		$this->pai = $pai;
	}

	public function getMae(){
		return $this->mae;
	}
	
	public function setMae($mae){
		$this->mae = $mae;
	}	
	public function getCargo(){
		return $this->cargo;
	}
	
	public function setCargo($cargo){
		$this->cargo = $cargo;
	}
	
	public function getData_admissao(){
		return $this->data_admissao;
	}

	public function setData_admissao($data_admissao){
		$this->data_admissao = $data_admissao;
	}

	public function getData_batismo(){
		return $this->data_batismo;
	}

	public function setData_batismo($data_batismo){
		$this->data_batismo = $data_batismo;
	}

	public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
	}
	
	public function getRg(){
		return $this->rg;
	}
	
	public function setRg($rg){
		$this->rg = $rg;
	}
	
	public function getCpf(){
		return $this->cpf;
	}
	
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}	

	public function getEstado_civil(){
		return $this->estado_civil;
	}
	
	public function setEstado_civil($estado_civil){
		$this->estado_civil = $estado_civil;
	}	
	
	public function getData_nascimento(){
		return $this->data_nascimento;
	}
	
	public function setData_nascimento($data_nascimento){
		$this->data_nascimento = $data_nascimento;
	}	
	
	public function getDoador_orgao(){
		return $this->doador_orgao;
	}	
	
	public function setDoador_orgao($doador_orgao){
		if ( $doador_orgao == "on" ) {
			$doador_orgao = "T";
		} else if ( $doador_orgao == "off" ) {
			$doador_orgao = "F";
		} 
		$this->doador_orgao = $doador_orgao;
	}

	public function getGrupo_sanguineo(){
		return $this->grupo_sanguineo;
	}	
	
	public function setGrupo_sanguineo($grupo_sanguineo){
		$this->grupo_sanguineo = $grupo_sanguineo;
	}	
	
	public function geraCartao(){
		$cartao = new Cartao($this->getId(), $this);
		$novoCartao = $cartao->getCartao();
		echo $novoCartao;		
	}
	
	public function grava(){
		$this->dao = new PessoaDAO();
		$gravou = $this->dao->cadastrar($this);
		return $gravou;
	}	
	
	
}

?>