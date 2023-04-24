<?php
    //fazendo a conexão com o banco de dados test
    $link = mysqli_connect("localhost", "root", "", "test");
    //checando a conexão
    if(!$link) {
    printf ("Erro ao conectar ao banco de dados: ",
    mysqli_connect_errno());
    }
    // Capturando os dados do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf = $_POST["CPF"];

    //criando a query em SQL para alterar os dados
    $query = "INSERT INTO dados (CPF, Nome, Idade) VALUES
    ('$cpf', '$nome', '$idade')";
    //executando o comando SQL
    mysqli_query($link, $query);
    //exibe mensagem de confirmação
    echo "Dados atualizados!";
?>