<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Herança</title>
</head>
<body>
    <?php
        require_once'Professor.php';
        require_once'Aluno.php';
        require_once'Funcionario.php';
        // Criando objeto da classe Pessoa
        $pessoa = new Pessoa();
        $pessoa->setNome("João");
        $pessoa->setIdade(25);
        $pessoa->setSexo("Masculino");

        echo "Nome: " . $pessoa->getNome() . "<br>";
        echo "Idade: " . $pessoa->getIdade() . "<br>";
        echo "Sexo: " . $pessoa->getSexo() . "<br>";

        $pessoa->fazerAniv();
        echo "Idade após o aniversário: " . $pessoa->getIdade() . "<br>";

        echo "<br>";

        // Criando objeto da classe Professor
        $professor = new Professor();
        $professor->setNome("Maria");
        $professor->setIdade(35);
        $professor->setSexo("Feminino");
        $professor->setEspecialidade("Matemática");
        $professor->setSalario(3000);

        echo "Nome: " . $professor->getNome() . "<br>";
        echo "Idade: " . $professor->getIdade() . "<br>";
        echo "Sexo: " . $professor->getSexo() . "<br>";
        echo "Especialidade: " . $professor->getEspecialidade() . "<br>";
        echo "Salário: " . $professor->getSalario() . "<br>";

        $professor->fazerAniv();
        echo "Idade após o aniversário: " . $professor->getIdade() . "<br>";

        $professor->receberAum(500);
        echo "Salário após o aumento: " . $professor->getSalario() . "<br>";

        echo "<br>";

        // Criando objeto da classe Aluno
        $aluno = new Aluno();
        $aluno->setNome("Pedro");
        $aluno->setIdade(20);
        $aluno->setSexo("Masculino");
        $aluno->setMatr("123456");
        $aluno->setCurso("Engenharia");

        echo "Nome: " . $aluno->getNome() . "<br>";
        echo "Idade: " . $aluno->getIdade() . "<br>";
        echo "Sexo: " . $aluno->getSexo() . "<br>";
        echo "Matrícula: " . $aluno->getMatr() . "<br>";
        echo "Curso: " . $aluno->getCurso() . "<br>";

        $aluno->fazerAniv();
        echo "Idade após o aniversário: " . $aluno->getIdade() . "<br>";

        $aluno->cancelarMatr();
        echo "Matrícula: " . $aluno->getMatr() . "<br>";
        echo "Curso: " . $aluno->getCurso() . "<br>";
        echo $aluno->pagarMensalidade() . "<br>";

        echo "<br>";

        // Criando objeto da classe Funcionario
        $visitante = new Visitante();
        $visitante->setNome("Ana");
        $visitante->setIdade(30);
        $visitante->setSexo("Feminino");

        echo "Nome: " . $visitante->getNome() . "<br>";
        echo "Idade: " . $visitante->getIdade() . "<br>";
        echo "Sexo: " . $visitante->getSexo() . "<br>";

        $visitante->fazerAniv();
        echo "Idade após o aniversário: " . $visitante->getIdade() . "<br>";

        echo "<br>";
    ?>
</body>
</html>