<?php
 require_once'Animal.php';

 class Ave extends Animal{
    private $corPena;

    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }

    public function fazerNinho()
    {
        echo'Construir ninho!';
    }

    public function locomover()
    {
        echo'Voando!';
    }
    public function alimentar()
    {
        echo'Comendo frutas!';
    }
    public function emitirSom()
    {
        echo'Som de Ave!';
    }
 }