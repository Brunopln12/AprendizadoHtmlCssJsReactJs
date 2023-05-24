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

        echo "<br>";

        // Criando objeto da classe Funcionario
        $funcionario = new Funcionario();
        $funcionario->setNome("Ana");
        $funcionario->setIdade(30);
        $funcionario->setSexo("Feminino");
        $funcionario->setSetor("RH");
        $funcionario->setTrabalhando(true);

        echo "Nome: " . $funcionario->getNome() . "<br>";
        echo "Idade: " . $funcionario->getIdade() . "<br>";
        echo "Sexo: " . $funcionario->getSexo() . "<br>";
        echo "Setor: " . $funcionario->getSetor() . "<br>";
        echo "Trabalhando: " . ($funcionario->getTrabalhando() ? "Sim" : "Não") . "<br>";

        $funcionario->fazerAniv();
        echo "Idade após o aniversário: " . $funcionario->getIdade() . "<br>";

        $funcionario->mudarTrabalho("Financeiro");
        echo "Novo setor: " . $funcionario->getSetor() . "<br>";

        echo "<br>";
    ?>
</body>
</html>