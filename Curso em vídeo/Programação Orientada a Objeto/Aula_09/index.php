<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php
        require_once'Livro.php';
        require_once'Pessoa.php';

        $pessoa1 = new Pessoa("João", 25, "Masculino");
        $pessoa2 = new Pessoa("Maria", 30, "Feminino");
        $pessoa3 = new Pessoa("Pedro", 40, "Masculino");

        $livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 500, $pessoa1);
        $livro2 = new Livro("Harry Potter", "J.K. Rowling", 400, $pessoa2);
        $livro3 = new Livro("1984", "George Orwell", 350, $pessoa3);

        $objetos = [$pessoa1, $pessoa2, $pessoa3, $livro1, $livro2, $livro3];

        foreach ($objetos as $objeto) {
            if ($objeto instanceof Pessoa) {
                echo "Nome: " . $objeto->getNome() . "<br>";
                echo "Idade: " . $objeto->getIdade() . "<br>";
                echo "Sexo: " . $objeto->getSexo() . "<br>";
                echo "Idade: " . $objeto->fazerAniversario() . "<br>";
                // Realize outros testes de métodos da classe Pessoa aqui
            } elseif ($objeto instanceof Livro) {
                echo "Título: " . $objeto->getTitulo() . "<br>";
                echo "Autor: " . $objeto->getAutor() . "<br>";
                echo "Total de Páginas: " . $objeto->getTotPaginas() . "<br>";
                echo "Leitor: " . $objeto->getLeitor()->getNome() . "<br>";
                echo "Folhear página: " . $objeto->folhear(100) . "<br>";
                echo "Página atual: " . $objeto->getPagAtual() . "<br>";
                echo "Avançar página: " . $objeto->avancarPag() . "<br>";
                echo "Avançar página: " . $objeto->avancarPag() . "<br>";
                echo "Voltar página: " . $objeto->voltarPag() . "<br>";
                echo "<br>" . $objeto->detalhes() . "<br>";
                // Realize outros testes de métodos da classe Livro aqui
            }
        }
    ?>
</body>
</html>