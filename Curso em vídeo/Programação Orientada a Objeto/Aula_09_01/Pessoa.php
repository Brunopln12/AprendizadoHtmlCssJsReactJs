<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        // Método Construtor

        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        // métodos Especiais

         public function getNome() {
        return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        //Métodos

        public function fazerAniversario(){
            return $this->idade +=1;
        }
    }