<?php
    include("conexao.php");
    //query SQL para selecionar os dados
    $lista = mysqli_query($link, "SELECT * FROM dados");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadatro de Pessoas</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                max-width: 800px;
                margin: auto;
                background-color: #fff;
                box-shadow: 0px 0px 10px #ccc;
            }

            th {
                background-color: #4CAF50;
                color: white;
                font-weight: bold;
                text-align: left;
                padding: 8px;
            }

            td {
                border-bottom: 1px solid #ddd;
                padding: 8px;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top: 20px;
                cursor: pointer;
                border-radius: 5px;
            }
            a {
                text-decoration: none;
                color: white;
            }
            button:hover {
                background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
            <?php
                // Transforma os dados da tabela em uma lista
                while($linha = mysqli_fetch_array($lista)) {
            ?>
            <tr>
                <td><?= $linha['CPF'] ?></td>
                <td><?= $linha['Nome'] ?></td>
                <td><?= $linha['Idade'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <button><a href="http://localhost/aula_5/relatorio.php" target="_blank">Gerar PDF</a></button>
    </body>
</html>