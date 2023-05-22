<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Curso em vídeo</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        // Criando objetos Pessoa
        $pessoa1 = new Pessoa("João", 25, "Masculino");
        $pessoa2 = new Pessoa("Maria", 30, "Feminino");

        // Criando objetos Livro
        $livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1000, $pessoa1);
        $livro2 = new Livro("Harry Potter", "J.K. Rowling", 500, $pessoa2);

        // Alterando atributos dos objetos Livro
        $livro1->abrir();
        $livro1->folhear(50);
        $livro2->abrir();
        $livro2->folhear(100);

        // Exibindo detalhes dos objetos Livro
        $livro1->detalhes();
        $livro2->detalhes();
    ?>
</body>
</html>