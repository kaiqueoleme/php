<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 09 - DSI III</title>
</head>

<body>
    <?php
    // Includes
    include_once 'Paciente.php';

    // Criando objetos
    $paciente = new Paciente("Pedro", "161752421", "22136732846");
    $paciente->setEndereco("Avenida Afonso Pena, Bairro Boa Viagem, Belo Horizonte, MG");
    $paciente->setProfissao("Farmacêutico");

    // Saida de dados
    echo "Nome: " . $paciente->getNome() . "<br>";
    echo "RG: " . $paciente->getRg() . "<br>";
    echo "CPF: " . $paciente->getCpf() . "<br>";
    echo "Endereço: " . $paciente->getEndereco() . "<br>";
    echo "Profissão: " . $paciente->getProfissao() . "<br>";

    ?>
</body>

</html>

