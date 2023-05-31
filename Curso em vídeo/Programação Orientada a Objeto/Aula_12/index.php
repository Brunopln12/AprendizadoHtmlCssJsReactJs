<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula_12</title>
</head>
<body>
    <?php
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        
        // Criando um objeto da classe Mamifero
        $mamifero = new Mamifero();
        $mamifero->setPeso(50);
        $mamifero->setIdade(5);
        $mamifero->setMembros(4);
        $mamifero->setCorPelo('Marrom');
        
        echo "Mamifero:<br>";
        echo "Peso: " . $mamifero->getPeso() . " kg<br>";
        echo "Idade: " . $mamifero->getIdade() . " anos<br>";
        echo "Número de membros: " . $mamifero->getMembros() . "<br>";
        echo "Cor do pelo: " . $mamifero->getCorPelo() . "<br>";
        $mamifero->locomover();
        echo "<br>";
        $mamifero->alimentar();
        echo "<br>";
        $mamifero->emitirSom();
        echo "<br>";
        
        // Criando um objeto da classe Reptil
        $reptil = new Reptil();
        $reptil->setPeso(2);
        $reptil->setIdade(10);
        $reptil->setMembros(0);
        $reptil->setCorEscama('Verde');
        
        echo "Réptil:<br>";
        echo "Peso: " . $reptil->getPeso() . " kg<br>";
        echo "Idade: " . $reptil->getIdade() . " anos<br>";
        echo "Número de membros: " . $reptil->getMembros() . "<br>";
        echo "Cor da escama: " . $reptil->getCorEscama() . "<br>";
        $reptil->locomover();
        echo "<br>";
        $reptil->alimentar();
        echo "<br>";
        $reptil->emitirSom();
        echo "<br>";
        
        // Criando um objeto da classe Peixe
        $peixe = new Peixe();
        $peixe->setPeso(0.5);
        $peixe->setIdade(2);
        $peixe->setMembros(0);
        $peixe->setCorEscama('Azul');
        
        echo "Peixe:<br>";
        echo "Peso: " . $peixe->getPeso() . " kg<br>";
        echo "Idade: " . $peixe->getIdade() . " anos<br>";
        echo "Número de membros: " . $peixe->getMembros() . "<br>";
        echo "Cor da escama: " . $peixe->getCorEscama() . "<br>";
        $peixe->locomover();
        echo "<br>";
        $peixe->alimentar();
        echo "<br>";
        $peixe->emitirSom();
        echo "<br>";
        $peixe->soltarBolhas();
        echo "<br>";
        
        // Criando um objeto da classe Ave
        $ave = new Ave();
        $ave->setPeso(0.3);
        $ave->setIdade(3);
        $ave->setMembros(2);
        $ave->setCorPena('Amarelo');
        
        echo "Ave:<br>";
        echo "Peso: " . $ave->getPeso() . " kg<br>";
        echo "Idade: " . $ave->getIdade() . "anos<br>";
        echo "Número de membros: " . $ave->getMembros() . "<br>";
        echo "Cor da pena: " . $ave->getCorPena() . "<br>";
        $ave->locomover();
        echo "<br>";
        $ave->alimentar();
        echo "<br>";
        $ave->emitirSom();
        echo "<br>";
        $ave->fazerNinho();
        echo "<br>";

        require_once 'Reptil.php';
        require_once 'Cobra.php';
        require_once 'Peixe.php';
        require_once 'Goldfish.php';
        require_once 'Reptil.php';
        require_once 'Tartaruga.php';
        require_once 'Ave.php';
        require_once 'Arara.php';
        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once 'Mamifero.php';
        require_once 'Canguru.php';

        // Criando um objeto da classe Cobra
        $cobra = new Cobra();
        $cobra->setPeso(1);
        $cobra->setIdade(5);
        $cobra->setMembros(0);
        $cobra->setCorEscama('Verde');

        echo "Cobra:<br>";
        echo "Peso: " . $cobra->getPeso() . " kg<br>";
        echo "Idade: " . $cobra->getIdade() . " anos<br>";
        echo "Número de membros: " . $cobra->getMembros() . "<br>";
        echo "Cor da escama: " . $cobra->getCorEscama() . "<br>";
        $cobra->locomover();
        echo "<br>";
        $cobra->alimentar();
        echo "<br>";
        $cobra->emitirSom();
        echo "<br>";

        // Criando um objeto da classe Goldfish
        $goldfish = new Goldfish();
        $goldfish->setPeso(0.1);
        $goldfish->setIdade(2);
        $goldfish->setMembros(0);
        $goldfish->setCorEscama('Dourado');

        echo "Goldfish:<br>";
        echo "Peso: " . $goldfish->getPeso() . " kg<br>";
        echo "Idade: " . $goldfish->getIdade() . " anos<br>";
        echo "Número de membros: " . $goldfish->getMembros() . "<br>";
        echo "Cor da escama: " . $goldfish->getCorEscama() . "<br>";
        $goldfish->locomover();
        echo "<br>";
        $goldfish->alimentar();
        echo "<br>";
        $goldfish->emitirSom();
        echo "<br>";
        $goldfish->soltarBolhas();
        echo "<br>";

        // Criando um objeto da classe Tartaruga
        $tartaruga = new Tartaruga();
        $tartaruga->setPeso(2);
        $tartaruga->setIdade(50);
        $tartaruga->setMembros(4);
        $tartaruga->setCorEscama('Verde');

        echo "Tartaruga:<br>";
        echo "Peso: " . $tartaruga->getPeso() . " kg<br>";
        echo "Idade: " . $tartaruga->getIdade() . " anos<br>";
        echo "Número de membros: " . $tartaruga->getMembros() . "<br>";
        echo "Cor da escama: " . $tartaruga->getCorEscama() . "<br>";
        $tartaruga->locomover();
        echo "<br>";
        $tartaruga->alimentar();
        echo "<br>";
        $tartaruga->emitirSom();
        echo "<br>";

        // Criando um objeto da classe Arara
        $arara = new Arara();
        $arara->setPeso(0.5);
        $arara->setIdade(8);
        $arara->setMembros(2);
        $arara->setCorPena('Azul');

        echo "Arara:<br>";
        echo "Peso: " . $arara->getPeso() . " kg<br>";
        echo "Idade: " . $arara->getIdade() . " anos<br>";
        echo "Número de membros: " . $arara->getMembros() . "<br>";
        echo "Cor da pena: " . $arara->getCorPena() . "<br>";
        $arara->locomover();
        echo "<br>";
        $arara->alimentar();
        echo "<br>";
        $arara->emitirSom();
        echo "<br>";
        $arara->fazerNinho();
        echo "<br>";

        // Criando um objeto da classe Cachorro
        $cachorro = new Cachorro();
        $cachorro->setPeso(15);
        $cachorro->setIdade(3);
        $cachorro->setMembros(4);
        $cachorro->setCorPelo('Marrom');

        echo "Cachorro:<br>";
        echo "Peso: " . $cachorro->getPeso() . " kg<br>";
        echo "Idade: " . $cachorro->getIdade() . " anos<br>";
        echo "Número de membros: " . $cachorro->getMembros() . "<br>";
        echo "Cor do pelo: " . $cachorro->getCorPelo() . "<br>";
        $cachorro->locomover();
        echo "<br>";
        $cachorro->alimentar();
        echo "<br>";
        $cachorro->emitirSom();
        echo "<br>";
        $cachorro->enterrarOsso();
        echo "<br>";
        $cachorro->abanarRabo();
        echo "<br>";

        // Criando um objeto da classe Canguru
        $canguru = new Canguru();
        $canguru->setPeso(30);
        $canguru->setIdade(6);
        $canguru->setMembros(4);
        $canguru->setCorPelo('Cinza');

        echo "Canguru:<br>";
        echo "Peso: " . $canguru->getPeso() . " kg<br>";
        echo "Idade: " . $canguru->getIdade() . " anos<br>";
        echo "Número de membros: " . $canguru->getMembros() . "<br>";
        echo "Cor do pelo: " . $canguru->getCorPelo() . "<br>";
        $canguru->locomover();
        echo "<br>";
        $canguru->alimentar();
        echo "<br>";
        $canguru->emitirSom();
        echo "<br>";
        $canguru->usarBolsa();
        echo "<br>";

    ?>
</body>
</html>