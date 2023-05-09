<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programando OO em PHP</title>
</head>
<body>
    <?php
        require_once'Tesoura.php';
        $tesoura = new Tesoura();
        $tesoura->cor = 'Laranja';
        $tesoura->tamanho = 40;
        $tesoura->fechada = true;

        $tesoura->cortar();
    ?>
</body>
</html>