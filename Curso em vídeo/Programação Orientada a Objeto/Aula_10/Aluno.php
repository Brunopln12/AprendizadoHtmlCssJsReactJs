<?php
    require_once'Pessoa.php';

    class Aluno extends Pessoa{
        // Atributos
        private $matr;
        private $curso;

        // Métodos

        public function cancelarMatr()
        {
            if ($this->getMatr()) {
                echo'Matrícula Cancelada!';
                $this->matr = null;
                $this->curso = null;
            } else {
                echo'Este aluno não foi matriculado!';
            }
            
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
    }