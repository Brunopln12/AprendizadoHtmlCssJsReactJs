<?php
    require_once"Lutador.php";

    class Luta{ 
        // Atributos

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($desafiante, $desafiado)
        {
            if ($desafiante->categoria === $desafiado->categoria && $desafiante != $desafiado) {
                $this->setAprovada(true);
                $this->setDesafiante($desafiante);
                $this->setDesafiado($desafiado);
            }else {
                $this->setAprovada(false);
                $this->setDesafiante(null);
                $this->setDesafiado(null);
            }
        }
        public function lutar()
        {
            if ($this->getAprovada()) {
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: // Empatou a Luta
                        echo"<br>Empatou!";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1: // Ganhou o Desafiado
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    default: // Ganhou o Desafiante
                        $this->getDesafiado()->perderLuta();
                        $this->getDesafiante()->ganharLuta();
                        break;
                }
            }else{
                echo"<br>Luta não pode acontecer!!";
            }
            
        }

        public function getDesafiado()
        {
            return $this->desafiado;
        }

        /**
         * Set the value of desafiado
         */
        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

        }

        /**
         * Get the value of desafiante
         */
        public function getDesafiante()
        {
                return $this->desafiante;
        }

        /**
         * Set the value of desafiante
         */
        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

        }

        /**
         * Get the value of rounds
         */
        public function getRounds()
        {
                return $this->rounds;
        }

        /**
         * Set the value of rounds
         */
        public function setRounds($rounds)
        {
            $this->rounds = $rounds;

        }

        /**
         * Get the value of aprovada
         */
        public function getAprovada()
        {
            return $this->aprovada;
        }

        /**
         * Set the value of aprovada
         */
        public function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;

        }
    }