<?php
    require_once'Pessoa.php';

    class Professor extends Pessoa{
        // Atributos

        private $especialidade;
        private $salario;

        // Métodos

        public function receberAum($aumento)
        {
            return $this->salario += $aumento;
        }

        // Métodos Especiais

        public function getEspecialidade() {
            return $this->especialidade;
        }
    
        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }
    
        public function getSalario() {
            return $this->salario;
        }
    
        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }