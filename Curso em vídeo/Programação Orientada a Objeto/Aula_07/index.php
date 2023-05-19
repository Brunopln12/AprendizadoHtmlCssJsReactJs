<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relação entre classes</title>
</head>
<body>
    <?php
        require_once"Lutador.php";
        require_once"Luta.php";

        // Criar um array de lutadores
        $lutadores = array();

        // Criar os lutadores e adicionar ao array
        $lutador1 = new Lutador("John Doe", "Brasil", 30, 1.80, 75, 10, 2, 3);
        $lutador2 = new Lutador("Jane Smith", "Estados Unidos", 28, 1.65, 62, 8, 4, 1);
        $lutador3 = new Lutador("Mark Johnson", "Canadá", 32, 1.90, 85, 12, 1, 2);
        $lutador4 = new Lutador("Lucas Silva", "Brasil", 25, 1.75, 68, 6, 3, 5);
        $lutador5 = new Lutador("Emma Anderson", "Inglaterra", 27, 1.70, 60, 9, 2, 0);
        $lutador6 = new Lutador("Carlos Perez", "Espanha", 29, 1.82, 73, 11, 0, 4);

        $lutadores[] = $lutador1;
        $lutadores[] = $lutador2;
        $lutadores[] = $lutador3;
        $lutadores[] = $lutador4;
        $lutadores[] = $lutador5;
        $lutadores[] = $lutador6;

        // Testes para cada lutador
        // foreach ($lutadores as $lutador) {
        //     $lutador->apresentar();
        //     $lutador->status();
        //     $lutador->ganharLuta();
        //     $lutador->perderluta();
        //     $lutador->empatarLuta();
        //     $lutador->status();
        //     echo "<br>";
        // }
        $ufc = new Luta;
        $ufc->setDesafiante($Lutador1);
        $ufc->setDesafiado($Lutador2);
        $ufc->marcarLuta($lutador1,$lutador2);
        $ufc->lutar();
    ?>
</body>
</html>