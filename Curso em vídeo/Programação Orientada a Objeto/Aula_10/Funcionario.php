<?php
    require_once'Pessoa.php';

    class Funcionario extends Pessoa{
        // Atributos
        
        private $setor;
        private $trabalhando;

        // Métodos

        public function mudarTrabalho($novoSetor)
        {
            if ($this->trabalhando) {
                echo'<br>Mudando a pessoa de setor!';
                $this->setor = $novoSetor;
            }else{
                echo'<br>Este funcionário não está trabalhando!';
            }
        }

        // Métodos Especiais

        public function getSetor() {
            return $this->setor;
        }
    
        public function setSetor($setor) {
            $this->setor = $setor;
        }
    
        public function getTrabalhando() {
            return $this->trabalhando;
        }
    
        public function setTrabalhando($trabalhando) {
            $this->trabalhando = $trabalhando;
        }
    }