<?php
    require_once'IPublicacao.php';
    require_once'Pessoa.php';

    class Livro implements IPublicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Método Construtor

        public function __construct($titulo, $autor, $totPaginas, Pessoa $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
        }

        // Métodos Get e Set

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }

        public function isAberto() {
            return $this->aberto;
        }

        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }

        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }


        // Métodos

        public function detalhes(){
            echo "O livro, ".$this->titulo." escrito por ".$this->autor." tem um total de ".$this->totPaginas." está na página ".$this->pagAtual." e está sendo lido por ".$this->leitor->getNome()."<br>";
        }        
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($pagina){
            $this->pagAtual = $pagina;
        }
        public function avancarPag(){
            $this->pagAtual +=1;
        }
        public function voltarPag(){
            $this->pagAtual -=1;
        }
    }