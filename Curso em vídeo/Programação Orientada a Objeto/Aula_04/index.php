<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos de Métodos Especiais Getter, Setter e Construct</title>
</head>
<body>
    <pre>
        <?php
           require_once 'Caneta.php';
           $c1 = new Caneta ("Bic", "Azul", 0.5);
           /*   Métodos Modificadores e Acessores
           $c1->setModelo("BIC");
           $c1->setPonta(0.5);
           print "Eu tenho uma caneta do modelo ".$c1->getModelo()." e de ponta ".$c1->getPonta();
           */
          $c2 = new Caneta ("FabrerCastell", "Vermelha", 0.3);
            print_r($c1);
            print_r($c2);
        ?>
    </pre>
</body>
</html>