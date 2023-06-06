<?php
 require_once'Gafanhoto.php';
 require_once'Video.php';

 class Visualizacao{
 	// Atributos
 	private $espectador;
 	private $filme;

 	//Contrutor
 	public function __construct($espectador,$filme){
 		$this->espectador = $espectador;
 		$this->filme = $filme;
 		$this->filme->play();
 		$this->filme->setViews($this->filme->getViews() + 1);
 		$this->espectador->viuMaisUm();

 	}

 	//get
 	public function getEspectador(){
 		return $this->espectador;
 	}
 	public function getFilme(){
 		return $this->filme;
 	}

 	//set
 	public function setEspectador($espectador){
 		$this->espectador - $espectador;
 	}
 	public function setFilme($filme){
 		$this->filme = $filme;
 	}

 	//Métodos
 	public function avaliar(){
 		$this->filme->setAvaliacao(5);
 	}

 	public function avaliarNota($nota){
 		$this->filme->setAvaliacao($nota);
 	}
 	
 	public function avaliarPorc($porc){
 		$nota = 0;
 		if($porc <= 20){
 			$nota = 3;
 		}else if($porc <= 50){
 			$nota = 5;
 		}else{
 			$nota = 10;
 		}
 		$this->filme->setAvaliacao($nota);
 	}
 }