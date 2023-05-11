<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática 02</title>
</head>
<body>
    <?php
        include_once ('Caderno.php');
        $caderno = new Caderno;
        $caderno -> setTamanho (20);
        $caderno -> setFolhas (400);
        echo "Meu novo caderno tem ".$caderno -> getTamanho()." cm e tem ".$caderno -> getFolhas()." folhas";
    ?>
</body>
</html>