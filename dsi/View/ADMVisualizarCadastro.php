<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <title>Visualizar Cadastros</title>
</head>

<body class=”w3-light-grey”>
    <?php
    include_once '../Model/Usuario.php';
    include_once '../Controller/FormacaoAcadController.php';
    include_once '../Controller/ExperienciaProfissionalController.php';
    include_once '../Controller/OutrasFormacoesController.php';
    $usuario = new Usuario();
    $usuario->carregarUsuario($_POST['cpf']);
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <div class="w3-padding-large" id="main">
        <header class="w3-container w3-padding-32 w3-center ">
            <h1 class="w3-text-white w3-panel w3-cyan w3-round-large"><?php echo $usuario->getNome(); ?> Curriculo</h1>
        </header>

        <div class="w3-content w3-text-grey" id="dadospessoais">
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large ">NOME: <?php echo $usuario->getNome(); ?></h2>
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large ">CPF: <?php echo $usuario->getCPF(); ?></h2>
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large ">EMAIL: <?php echo $usuario->getEmail(); ?></h2>
            <h2 class="w3-text-white w3-panel w3-cyan w3-round-large ">DATA DE NASCIMENTO: <?php echo $usuario->getDataNascimento(); ?></h2>
        </div>

        <div class="w3-padding-32 w3-content w3-text-grey espaco" id="formacao">
            <h2 class="w3-text-cyan  w3-center">Formação Acadêmica</h2>
            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <?php
                    $fCon = new FormacaoAcadController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if ($results != null)
                        while ($row = $results->fetch_object()) {
                            echo '<tr>';
                            echo '<td style="width: 10%;">' . $row->inicio . '</td>';
                            echo '<td style="width: 10%;">' . $row->fim . '</td>';
                            echo '<td style="width: 65%;">' . $row->descricao . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="w3-padding-32 w3-content w3-text-grey espaco" id="experiencia">
            <h2 class="w3-text-cyan  w3-center">Experiência Profissional</h2>
            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Empresa</th>
                            <th>Descrição</th>
                        </tr>
                        <thead>
                            <?php
                            $ePro = new ExperienciaProfissionalController();
                            $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                            if ($results != null)
                                while ($row = $results->fetch_object()) {
                                    echo '<tr>';
                                    echo '<td style="width: 10%;">' . $row->inicio . '</td>';
                                    echo '<td style="width: 10%;">' . $row->fim . '</td>';
                                    echo '<td style="width: 10%;">' . $row->empresa . '</td>';
                                    echo '<td style="width: 65%;">' . $row->descricao . '</td>';

                                    echo '</tr>';
                                }
                            ?>
                </table>
            </div>
        </div>


        <div class="w3-padding-32 w3-content w3-text-grey espaco" id="outrasformacoes">
            <h2 class="w3-text-cyan  w3-center">Outras Formações</h2>
            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                        </tr>
                        <thead>
                            <?php
                            $fCon = new OutrasFormacoesController();
                            $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                            if ($results != null)
                                while ($row = $results->fetch_object()) {
                                    echo '<tr>';
                                    echo '<td style="width: 10%;">' . $row->inicio . '</td>';
                                    echo '<td style="width: 10%;">' . $row->fim . '</td>';
                                    echo '<td style="width: 65%;">' . $row->descricao . '</td>';
                                    echo '</tr>';
                                }
                            ?>
                </table>
            </div>
        </div>
    </div>

    <script src=" https://kit.fontawesome.com/e5972cb3d1.js" crossorigin="anonymous">
    </script>
</body>

</html>