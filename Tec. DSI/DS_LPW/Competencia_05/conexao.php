<?php
    //fazendo a conexão com o banco de dados test
    $localhost = "localhost";
    $usuario = "root";
    $senha = "";
    $bancoDeDados = "test";
    $link = mysqli_connect($localhost, $usuario, $senha, $bancoDeDados);
    //checando a conexão
    if(!$link) {
        printf ("Erro ao conectar ao banco de dados: ",
        mysqli_connect_errno());
    }
?>