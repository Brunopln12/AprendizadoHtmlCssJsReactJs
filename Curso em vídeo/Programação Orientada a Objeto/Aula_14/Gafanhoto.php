<?php
 require_once'Pessoa.php';

 class Gafanhoto extends Pessoa{
 	//Atributos
 	private $login;
 	private $totAssistido;

 	//Construtor
 	public function __construct($nome, $idade, $sexo, $login){
 		parent::__construct($nome, $idade, $sexo);
 		$this->login = $login;
 		$this->totAssistido = 0;
 	}

 	//Get
 	public function getLogin(){
 		return $this->login;
 	}
 	public function getTotAssistido(){
 		return $this->totAssistido;
 	}

 	//Set
 	public function setLogin($login){
 		$this->login = $login;
 	}
 	public function setTotAssistido($totAssistido){
 		$this->totAssistido = $totAssistido;
 	}

 	//Métodos
 	public function viuMaisUm(){
 		$this->totAssistido ++;
 	}
 }