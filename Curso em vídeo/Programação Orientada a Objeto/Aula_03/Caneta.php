<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>ERROR: Não posso rabiscar!</p>";
            }else{
                echo "<p>Rabiscando...</p>";
            }
        }
        private function tampar(){
            $this->tampada = true;
        }
        private function destampar(){
            $this->tamapada = false;
        }
    }
?>