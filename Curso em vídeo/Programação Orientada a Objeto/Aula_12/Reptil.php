<?php
 require_once'Animal.php';

 class Reptil extends Animal{
    private $corEscama;

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function locomover()
    {
        echo'Rastejando!';
    }
    public function alimentar()
    {
        echo'Comendo vegetais!';
    }
    public function emitirSom()
    {
        echo'Som de réptil!';
    }
 }