<?php
    class Tesoura{
        public $cor;
        public $tamanho;
        public $fechada;
        function cortar(){
            if(this->fechada == true){
                echo"Erro: Tesoura fechada";
            }
        }
    }
?>