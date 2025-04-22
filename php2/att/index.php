<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 09 - DSI III</title>
</head>
<body>
    <?php
    include_once 'Paciente.php';

    $paciente = new Paciente("Pedro", "161752421", "22136732846");
    $paciente->setEndereco("Avenida Afonso Pena, Bairro Boa Viagem, Belo Horizonte, MG");
    $paciente->setProfissao("Farmacêutico");

    echo "Nome: ". $paciente->getNome(). "<br>";
    echo "RG: ". $paciente->getRg(). "<br>";
    echo "CPF: ". $paciente->getCpf(). "<br>";
    echo "Endereço: ". $paciente->getEndereco(). "<br>";
    echo "Profissão: ". $paciente->getProfissao(). "<br>";
    
    ?>
</body>
</html>