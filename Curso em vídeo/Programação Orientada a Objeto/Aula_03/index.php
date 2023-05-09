<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos de Visibilidade</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";
            $bic = new Caneta;
            $bic->modelo = "BIC Cristal";
            $bic->cor = "Azul";
            /*	print_r($bic);
				A carga e a ponta por serem privados não podem ser alterados fora da classe
				$bic->ponta = 0.5;
				Os atributos protegidos também não podem ser alterados de qualquer maneira
				$bic->tampada = false;
				Já se mexermos em um método publico sendo que os atributos que contem nele forem privados, conseguimos utilizar.
			*/
            $bic->rabiscar();
        ?>
    </pre>
</body>
</html>