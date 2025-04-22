<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'Fisica.php';
    include_once 'Juridica.php';
    $fisica = new Fisica();
    $fisica->setNome("Zeca");
    $fisica->setCpf("111111111");
    echo 'Nome: ' . $fisica->getNome() . '<br>';
    echo 'CPF: ' . $fisica->getCpf() . '<br>';
    $fisica->mudarNome();
    echo 'Nome: ' . $fisica->getNome() . '<br>';
    echo 'CPF: ' . $fisica->getCpf();
    echo '<br>';
    echo '<br>';
    $juridica = new Juridica();
    $juridica->setNome("Industria do Zeca");
    $juridica->setCnpj("222222222");
    echo 'Nome: ' . $juridica->getNome() . '<br>';
    echo 'CNPJ: ' . $juridica->getCnpj() . '<br>';
    ?>
</body>

</html>