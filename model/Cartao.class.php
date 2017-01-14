<?php

class Cartao{
	private $id;
	private $pessoa;
	private $cartao;
	private $frente;
	private $verso;
	
	private $igreja = "IGREJA EVANGÉLICA ASSEMBLÉIA DE DEUS<br/>NOME DO MINISTÉRIO";
	
	public function Cartao($id, $pessoa){
		$this->id = $id;
		$this->pessoa = $pessoa;
	}	

	public function criaCartao(){
		$this->setFrenteCartao();
		$this->setVersoCartao();		
	}
	
	public function setFrenteCartao(){
				
		$this->setDivLogoFrente();
		$this->setDivIgreja();
		$this->setDivTitulo();
		$this->setDivCargo();
		$this->setDivFoto();
		$this->setDivBatismo();
		$this->setDivAdmissao();
		$this->setDivNome();		
		$this->setDivDoador();		
		$this->setDivSanguineo();	

		$this->frente = "<div id='frente'>" .$this->frente. "</div>";		
	}
	
	public function setVersoCartao(){
		
		$this->setDivLogoVerso();
		$this->setDivTextoConstitucional();
		$this->setDivEstadoCivil();
		$this->setDivNascimento();
		$this->setDivRG();
		$this->setDivCPF();
		$this->setDivFiliacao();
		$this->setDivObservacao();
		$this->setDivAssinatura();
		
		$this->verso = "<div id='verso'>" .$this->verso. "</div>";				
	}
	
	public function getCartao(){
		$this->criaCartao();
		//$this->cartao = "<div id='frente'>" .$this->cartao. "</div>";
		$this->cartao = $this->frente . $this->verso;
		//$this->setVerso();
		return $this->cartao;
	}
	
	public function setDivLogoFrente(){
		$div = "<div id='divLogoFrente'>
					<img src='../img_proj/logo_igreja.png' />
				</div>";
		$this->frente .= $div;
	}
	
	public function setDivIgreja(){
		$div = "<div id='divIgreja'>
					<p>".$this->igreja."</p>
				</div>";
		$this->frente .= $div;
	}
	
	public function setDivTitulo(){
		$div = "<div id='divTitulo'>
					<p>IDENTIDADE</p>
				</div>";
		$this->frente .= $div;
	}	
	
	public function setDivCargo(){
		$div = "<div id='divCargo'>
					<p class='labelLeft'>cargo: </p>
					<p class='textoPrimario'>".$this->pessoa->getCargo()->getNome()."</p>
				</div>";
		$this->frente .= $div;				
	}
	
	public function setDivFoto(){
		$div = "<div id='divFoto'>
					<img src='../".$this->pessoa->getFoto()."' />
				</div>";
		$this->frente .= $div;				
	}
	
	public function setDivBatismo(){
	$data = new DateTime($this->pessoa->getData_batismo());		
		$div = "<div id='divBatismo'>
					<p class='labelTop'>Data do Batismo </p>
					<p class='textoSecundario'>".$data->format("d/m/Y")."</p>
				</div>";
		$this->frente .= $div;				
	}
	
	public function setDivAdmissao(){
		$data = new DateTime($this->pessoa->getData_admissao());		
		$div = "<div id='divAdmissao'>
					<p class='labelTop'>Data Admissão </p>
					<p class='textoSecundario'>".$data->format("d/m/Y")."</p>
				</div>";
		$this->frente .= $div;				
	}
	
	public function setDivNome(){
		$div = "<div id='divNome'>
					<p class='labelLeft'>Nome: </p>
					<p class='textoPrimario'>".$this->pessoa->getNome()."</p>
				</div>";
		$this->frente .= $div;				
	}

	public function setDivDoador(){
		$doador = $this->pessoa->getDoador_orgao() == "T" ? "Sim" : "N&atilde;o";
		$div = "<div id='divDoador'>
					<p class='labelTop'>Doador de Orgão </p>
					<p class='textoSecundario'>".$doador."</p>
				</div>";
		$this->frente .= $div;				
	}	
	
	public function setDivSanguineo(){
		$div = "<div id='divSanguineo'>
					<p class='labelTop'>Grupo Sanguineo </p>
					<p class='textoSecundario'>".$this->pessoa->getGrupo_sanguineo()."</p>
				</div>	";
		$this->frente .= $div;				
	}		

	public function setDivLogoVerso(){
		$styleMargin = "";
		
		if ( $this->pessoa->getCargo()->getConstitucional() == "F" ) {
			$styleMargin = "style='margin-left:150px'";
		}
		$div = "<div id='divLogoVerso' " .$styleMargin." >
					<img src='../img_proj/brasao.png' />
				</div>";
		$this->verso .= $div;
	}
	
	public function setDivTextoConstitucional(){
		$div = "";
		$texto = "";
					
		if ( $this->pessoa->getCargo()->getConstitucional() == "T" ) {
			$texto = "<p class='labelTextoConstitucional'>
						Constituição Federaç Art. 5º<br/>
						VI: Liberdade de Culto<br/>
						VII: Entrada em hospitais e presídios<br/>
						O Portador pode também exercer CAPELANIAS<br/>
						Lei Federal nº 8.212 de 24-07/1998<br/>
						Conferencista.</p>";
		} 
		
		$div = "<div id='divTextoConstitucional'> " . $texto . " </div>	";		
		$this->verso .= $div;				
	}	
	
	public function setDivEstadoCivil(){
		$div = "<div id='divEstadoCivil'>
					<p class='labelTop'>Estado Civil</p>
					<p class='textoSecundario'>Casado</p>
				</div>	";
		$this->verso .= $div;				
	}	
	
	public function setDivNascimento(){
		$div = "<div id='divNascimento'>
					<p class='labelTop'>Data de Nascimento</p>
					<p class='textoSecundario'>09/07/1989</p>
				</div>	";
		$this->verso .= $div;				
	}	

	public function setDivRG(){
		$div = "<div id='divRG'>
					<p class='labelTop'>RG</p>
					<p class='textoSecundario'>1234568987</p>
				</div>	";
		$this->verso .= $div;				
	}			
	
	public function setDivCPF(){
		$div = "<div id='divCPF'>
					<p class='labelTop'>CPF</p>
					<p class='textoSecundario'>1234568987</p>
				</div>	";
		$this->verso .= $div;				
	}	
	
	public function setDivFiliacao(){
		$div = "<div id='divFiliacao'>
					<p class='labelTop'>Filiacao</p>
					<div id='divFiliacaoPai'>
						<p class='labelLeft'>Pai:<span class='textFiliacao'>".$this->pessoa->getPai()."</span></p>
					</div>
					<div id='divFiliacaoMae'>
						<p class='labelLeft'>Mãe:<span class='textFiliacao'>".$this->pessoa->getMae()."</span></p>
					</div>					
				</div>	";
		$this->verso .= $div;				
	}		
	
	public function setDivObservacao(){
		$div = "<div id='divObservacao'>
					<p class='labelObservacao'>A presente Identidade so terá validade enquanto o portador, se mantiver dentro dos padrões da Doutrina Bíblica.</p>
				</div>	";
		$this->verso .= $div;				
	}	
	
	public function setDivAssinatura(){
		$div = "<div id='divAssinatura'>
					<img src='../img_proj/assinatura.png' />
				</div>	";
		$this->verso .= $div;				
	}	
	
}

?>
