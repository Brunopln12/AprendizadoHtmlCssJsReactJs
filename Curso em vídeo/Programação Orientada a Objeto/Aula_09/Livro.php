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

        function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function setAutor($autor)
        {
            $this->autor = $autor;
        }

        public function getTotPaginas()
        {
            return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual()
        {
            return $this->pagAtual;
        }

        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto()
        {
            return $this->aberto;
        }

        public function setAberto($aberto)
        {
            $this->aberto = $aberto;
        }

        public function getLeitor()
        {
            return $this->leitor;
        }

        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;
        }

        // Métodos
        
        public function detalhes()
        {
            echo'<br>';
            echo'Livro: ' . $this->titulo . '<br>Escrito: ' . $this->autor . '<br>Páginas: ' . $this->totPaginas . ' página atual ' . $this->pagAtual . '<br>Lido por: ' . $this->leitor->getNome();
        }
        public function abrir()
        {
            $this->setAberto(true);
        }
        public function fechar()
        {
            $this->setAberto(false);
        }
        public function folhear($pagina)
        {
            if ($pagina > $this->totPaginas) {
                return $this->pagAtual = 0;
            }else {
                return $this->pagAtual = $pagina;
            }
        }
        public function avancarPag()
        {
            if($this->pagAtual > $this->totPaginas){
                return $this->getPagAtual;
            }else{
                return $this->pagAtual +=1;
            }
        }
        public function voltarPag()
        {
            if($this->pagAtual == 1){
               return $this->getPagAtual;
            }else{
                return $this->pagAtual -= 1;
            }
        }
    }