<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática 03</title>
</head>
<body>
    <h2>Atividade 01</h2>
    <p>Descreva a diferença dos conceitos de abstração e encapsulamento utilizados na
    linguagem PHP.</p>
    <p><b>R: </b>Abstração é um conceito que permite aos programadores criar representações simplificadas de objetos do mundo real em forma de classes. Ela ajuda a ocultar detalhes complexos do objeto, focando apenas nos aspectos relevantes para a aplicação em questão.</p>
    <p>Por outro lado, encapsulamento refere-se à técnica de ocultar os detalhes internos de uma classe, fornecendo uma interface pública para interagir com ela. Ele permite que os desenvolvedores controlem o acesso aos atributos e métodos de uma classe, definindo-os como públicos, privados ou protegidos.</p>
    <p> A abstração se concentra em criar uma representação simplificada de um objeto, enquanto o encapsulamento se concentra em controlar o acesso aos detalhes internos desse objeto. </p><br>
    <h2>Atividade 02</h2>
    <?php
       abstract class Pedido
       {
        public function formaDePagamento()
        {
            echo'Cartão débito/crédito e dinheiro<br>';
        }
       }
       class Prato extends Pedido
       {
        private $nome;
        private $quantidadeDePessoasServidas;
        public function formaDePagamento(){
            parent::formaDePagamento();
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            return $this->nome = $nome;
        }
        public function getQuantidadeDePessoasServidas()
        {
            return $this->quantidadeDePessoasServidas;
        }
        public function setQuantidadeDePessoasServidas($quantidadeDePessoasServidas)
        {
            return $this->quantidadeDePessoasServidas = $quantidadeDePessoasServidas;
        }
       }
       class Sobremesa extends Pedido
       {
        private $nome;
        public function formaDePagamento()
        {
            echo'Dinheiro e Pix<br>';
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            return $this->nome = $nome;
        }
       }
       $prato = new Prato();
        $prato->setNome("Feijoada"); // Definindo o nome do prato
        $prato->setQuantidadeDePessoasServidas(4); // Definindo a quantidade de pessoas servidas

        echo "Prato: " . $prato->getNome() . "<br>";
        echo "Quantidade de pessoas servidas: " . $prato->getQuantidadeDePessoasServidas() . "<br>";
        echo "Formas de pagamento: ";
        $prato->formaDePagamento(); // Chamando o método formaDePagamento()

        echo "<br>";

        $sobremesa = new Sobremesa();
        $sobremesa->setNome("Pudim"); // Definindo o nome da sobremesa

        echo "Sobremesa: " . $sobremesa->getNome() . "<br>";
        echo "Formas de pagamento: ";
        $sobremesa->formaDePagamento(); // Chamando o método formaDePagamento()
    ?>
</body>
</html>