<?php
 require_once'Animal.php';

 class Peixe extends Animal{
    private $corEscama;

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function soltarBolhas()
    {
        echo'Soltando bolhas!';
    }

    public function locomover()
    {
        echo'Nadando';
    }
    public function alimentar()
    {
        echo'Comendo substâncias!';
    }
    public function emitirSom()
    {
        echo'Peixe não faz som!';
    }
 }