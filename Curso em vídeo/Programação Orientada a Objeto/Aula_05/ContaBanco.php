<?php
    class ContaBanco{
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Metodos Especiais
        public function __construct()
        {
            $this ->setSaldo(0);
            $this ->setStatus(false);
        }

        public function getNumConta(){
            return $this -> numConta;
        }
        public function setNumConta($numConta){
            $this -> numConta = $numConta;
        }
        public function getTipo(){
            return $this -> tipo;
        }
        public function setTipo($tipo){
            $this -> tipo = $tipo;
        }
        public function getDono(){
            return $this -> dono;
        }
        public function setDono($dono){
            $this -> dono = $dono;
        }
        public function getSaldo(){
            return $this -> saldo;
        }
        public function setSaldo($saldo){
            $this -> saldo = $saldo;
        }
        public function getStatus(){
            return $this -> status;
        }
        public function setStatus($status){
            $this -> status = $status;
        }

        // Métodos
        public function abrirConta ($tipo){
            $this -> setTipo ($tipo);
            $this -> setStatus (true);
            if($tipo == "cc"){
                $this -> setSaldo(50);
            }else if($tipo == "cp") {
                $this ->setSaldo(150);
            }
        }
        public function fecharConta (){
            if($this->getSaldo() > 0){
                echo "A conta precisa estar zerada!";
            }else if($this->getSaldo() < 0){
                echo "A conta está em débito!";
            }else {
                $this -> setStatus(false);
            }
        }
        public function depositar ($saldoDepositar){
            if($this-> getStatus()){
                $this->setSaldo($this->getSaldo() + $saldoDepositar);
            }else{
                echo "Impossível depositar!";
            }
        }
        public function sacar ($saldoSacar){
            if($this->getStatus()){
                if($this->getSaldo() >= $saldoSacar){
                    $this->setSaldo($this->getSaldo() - $saldoSacar);
                    echo"Saque de $saldoSacar autorizado na conta de ". $this->getDono();
                }else{
                    echo "Saldo insuficiente!";
                }
            }else{
                echo "Impossivel sacar!";
            }
        }
        public function pagarMensalidade (){
            if($this->getTipo() == "cc"){
                $mensalidade = 12;
            }else if($this->getTipo() == "cp"){
                $mensalidade = 20;
            }
            if ($this->getStatus()) {
                if($this->getSaldo() >= $mensalidade){
                    $this->setSaldo($this->getSaldo() - $mensalidade);
                }else{
                    echo "Saldo insuficiente!!";
                }
            }else{
                echo "Impossível pagar!";
            }
        }
    }
?>