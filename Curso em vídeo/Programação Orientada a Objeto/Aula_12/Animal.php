<?php
 abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;
    
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

    // Método get para o atributo $peso
    public function getPeso() {
        return $this->peso;
    }

    // Método set para o atributo $peso
    public function setPeso($peso) {
        $this->peso = $peso;
    }

    // Método get para o atributo $idade
    public function getIdade() {
        return $this->idade;
    }

    // Método set para o atributo $idade
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    // Método get para o atributo $membros
    public function getMembros() {
        return $this->membros;
    }

    // Método set para o atributo $membros
    public function setMembros($membros) {
        $this->membros = $membros;
    }
 }