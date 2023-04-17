<?php
//Capturando os dados
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    echo "O nome Cadastrado foi $nome, com idade igual a $idade anos, o peso cadastrado foi $peso Kg e a altura é de $altura cm.";
?>