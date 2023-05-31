<?php
    require_once'Aluno.php';
    
    class Bolsista extends Aluno{
        // Atributos

        private $bolsa;

        // Métodos

        public function renovarBolsa()
        {
            echo"Bolsa renovada!";
        }
        public function pagarMensalidade()
        {
            return $this->setMensalidade($this->getMensalidade() - $this->bolsa);
            echo'Mensalidade paga!<br>';
        }
    }