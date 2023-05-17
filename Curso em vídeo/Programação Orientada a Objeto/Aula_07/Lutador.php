<?php
    class Lutador{
        //Atributos

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Métodos Especiais

        // Construtor

        public function __construct($nome,$nacionalidade,$idade,$altura,$peso,$vitorias,$derrotas,$empates)
        {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        // Getter e Setter para $nome
        private function getNome() {
            return $this->nome;
        }

        private function setNome($nome) {
            $this->nome = $nome;
        }

        // Getter e Setter para $nacionalidade
        private function getNacionalidade() {
            return $this->nacionalidade;
        }

        private function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        // Getter e Setter para $idade
        private function getIdade() {
            return $this->idade;
        }

        private function setIdade($idade) {
            $this->idade = $idade;
        }

        // Getter e Setter para $altura
        private function getAltura() {
            return $this->altura;
        }

        private function setAltura($altura) {
            $this->altura = $altura;
        }

        // Getter e Setter para $peso
        private function getPeso() {
            return $this->peso;
        }

        private function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }

        // Getter e Setter para $categoria
        private function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            }else if($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
            }else if($this->getPeso() <= 83.9){
                $this->categoria = "Médio";
            }else if($this->getPeso() <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }

        // Getter e Setter para $vitorias
        private function getVitorias() {
            return $this->vitorias;
        }

        private function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        // Getter e Setter para $derrotas
        private function getDerrotas() {
            return $this->derrotas;
        }

        private function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        // Getter e Setter para $empates
        private function getEmpates() {
            return $this->empates;
        }

        private function setEmpates($empates) {
            $this->empates = $empates;
        }

        // Métodos

        public function apresentar()
        {
            echo"<p>---------------------------------</p>";
            echo"<p> Chegou a hora!!! O Lutador " . $this->getNome();
            echo" veio diretamente de " . $this->getNacionalidade();
            echo" tem" . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
            echo"<br>Ele tem " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.</p>"; 
        }
        public function status()
        {
            echo"<p>---------------------------------</p>";
            echo"<p>" . $this->getNome(). " é um peso " . $this->getCategoria();
            echo" e já ganhou " . $this->getVitorias() . " vezes.";
            echo" perdeu " . $this->getDerrotas() . " vezes.";
            echo" empatou " . $this->getEmpates() . " Vezes. </p>";
        }    
        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderluta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
?>