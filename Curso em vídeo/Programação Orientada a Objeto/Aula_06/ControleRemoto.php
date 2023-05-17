<?php
    require_once'Controlador.php';

    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;

        function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        private function setVolume ($volume){
            return $this->volume = $volume;
        }
        private function getVolume(){
            $this->volume;
        }
        private function setLigado ($ligado){
            return $this->ligado = $ligado;
        }
        private function getLigado(){
            $this->ligado;
        }
        private function setTocando ($tocando){
            return $this->tocando = $tocando;
        }
        private function getTocando(){
            $this->tocando;
        }
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<br>Está Ligado? " . ($this->getLigado());
            echo "<br>Está Tocando? ". ($this->getTocando());
            echo "<br>Volume: " . $this->getVolume();
            for ($i=0; $i < $this->getVolume() ; $i+=10) { 
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu(){
            echo "<br>Fechando menu...";
        }
        public function maisVolume(){
            if ($this->getLigado()) {
                // $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume(){
            if ($this->getLigado()) {
               // $this->setVolume($this->getVolume() - 5);
            }
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume()>0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play(){
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }
?>