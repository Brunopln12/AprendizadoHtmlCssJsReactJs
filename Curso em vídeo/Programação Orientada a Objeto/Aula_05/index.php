<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em vídeo - Conta Banco</title>
</head>
<body>
    <pre>
        <?php
            require_once'ContaBanco.php';
            $pessoa1 = new ContaBanco(); // Jubileu
            $pessoa2 = new ContaBanco(); // Creusa

            $pessoa1->abrirConta("cc");
            $pessoa1->setNumConta(111);
            $pessoa1->setDono('Jubileu');

            $pessoa2->abrirConta('cp');
            $pessoa2->numConta = 222;
            $pessoa2->setDono('Creusa');

            $pessoa1->depositar(300);
            $pessoa2->depositar(500);

            $pessoa2->sacar(100);

            print_r($pessoa1);
            print_r($pessoa2);
        ?>
    </pre>
    
</body>
</html>