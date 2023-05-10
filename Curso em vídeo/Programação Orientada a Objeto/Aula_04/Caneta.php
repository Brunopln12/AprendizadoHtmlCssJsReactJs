<?php
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;
        
        // O método construtor também pode receber o nome da classe "Caneta" ao invés de __constructor
        public function __construct($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p; 
            $this->tampar();
        }
        public function tampar(){
            $this->tampada = true;
        }
        // Método acessor
        public function getModelo (){
            return $this->modelo;
        }
        // Método modificador
        public function setModelo ($m){
            $this->modelo = $m;
        }
        public function getPonta (){
            return $this->ponta;
        }
        public function setPonta ($p){
            $this->ponta = $p; 
        }
    }
?>