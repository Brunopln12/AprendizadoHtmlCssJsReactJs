<?php
    class Caderno{
        public $tamanho;
        public $folhas;
        private $capa;
        public function getTamanho (){
            return $this->tamanho;
        }
        public function getFolhas (){
            return $this->folhas;
        }
        public function setTamanho ($t){
            return $this->tamanho = $t;
        }
        public function setFolhas ($f){
            return $this->folhas = $f;
        }
    }
?>