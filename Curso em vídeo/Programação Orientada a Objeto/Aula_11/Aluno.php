<?php
    require_once'Pessoa.php';

    class Aluno extends Pessoa{
        // Atributos
        private $matr;
        private $curso;
        private $mensalidade;

        // Métodos

        public function cancelarMatr()
        {
            if ($this->getMatr()) {
                echo'<br>Matrícula Cancelada!';
                $this->matr = null;
                $this->curso = null;
            } else {
                echo'<br>Este aluno não foi matriculado!';
            }
            
        }
        public function pagarMensalidade()
        {
            $this->getMensalidade();
            echo'Mensalidade paga!<br>';
        }

        // Métodos Especiais

        public function getMatr() {
            return $this->matr;
        }
    
        public function setMatr($matr) {
            $this->matr = $matr;
        }
    
        public function getCurso() {
            return $this->curso;
        }
    
        public function setCurso($curso) {
            $this->curso = $curso;
        }
        public function getMensalidade() {
            return $this->mensalidade;
        }
    
        public function setMensalidade($mensalidade) {
            $this->mensalidade = $mensalidade;
        }
    }