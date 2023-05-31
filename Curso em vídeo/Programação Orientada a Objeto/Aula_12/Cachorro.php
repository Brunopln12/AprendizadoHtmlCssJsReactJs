<?php
 require_once'Mamifero.php';

 class Cachorro extends Mamifero{
    public function enterrarOsso()
    {
        echo'Enterrando o Osso!';
    }
    public function abanarRabo()
    {
        echo'Abanando o Rabo!';
    }
    public function emitirSom()
    {
        echo'Au! Au!';
    }
 }