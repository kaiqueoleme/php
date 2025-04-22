<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'Aluno.php';
    include_once 'Professor.php';
    $aluno = new Aluno();
    $aluno->setNome("Ferreira");
    $aluno->setCpf("11111111111111");
    $aluno->setCurso("Matematica");

    echo 'Nome: ' . $aluno->getNome() . '<br>';
    echo 'CPF: ' . $aluno->getCpf() . '<br>';
    echo 'Curso: ' . $aluno->getCurso() . '<br>';

    echo '<br>';

    $professor = new Professor();
    $professor->setNome("Jorge");
    $professor->setCpf("2222222222222");
    $professor->setFormacao("Ingles");

    echo 'Nome: ' . $professor->getNome() . '<br>';
    echo 'CPF: ' . $professor->getCpf() . '<br>';
    echo 'Curso: ' . $professor->getFormacao() . '<br>';

    ?>
</body>

</html>