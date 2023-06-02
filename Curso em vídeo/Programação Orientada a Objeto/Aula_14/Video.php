<?php
 require_once'IAcoesVideo.php';

 /**
  * Classe de Vídeo	
  */
 class Video implements AcoesVideo{
 	// Atributos
 	private $titulo;
 	private $avaliacao;
 	private $views;
 	private $curtidas;
 	private $reproduzindo;

 	//Construtor
	public function __construct($titulo){
		$this->titulo = $titulo;
		$this->avaliacao = 1;
		$this->views = 0;
		$this->curtidas = 0;
		$this->reproduzindo = false;
	}

 	//Get
 	public function getTitulo(){
 		return $this->titulo;
 	}
 	public function getAvaliacao(){
 		return $this->avaliacao;
 	}
 	public function getViews(){
 		return $this->views;
 	}
 	public function getCurtidas(){
 		return $this->curtidas;
 	}
 	public function getReproduzindo(){
 		return $this->reproduzindo;
 	}

 	//Set
 	public function setTitulo($titulo){
 		$this->titulo = $titulo;
 	}
 	public function setAvaliacao($avaliacao){
 		$this->avaliacao = $avaliacao;
 	}
 	public function setViews($views){
 		$this->views = $views;
 	}
 	public function setCurtidas($curtidas){
 		$this->curtidas = $curtidas;
 	}
 	public function setReproduzindo($reproduzindo){
 		$this->reproduzindo = $reproduzindo;
 	}

 	//Métodos
 	public function play(){
 		$this->reproduzindo = true;
 	}
 	public function pause(){
 		$this->reproduzindo = false;
 	}
 	public function like(){
 		$this->curtidas ++;
 	}
 }