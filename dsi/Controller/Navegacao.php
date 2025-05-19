<?php
if (!isset($_SESSION)) {
    session_start();
}
switch ($_POST) {
    //Caso a variavel seja nula mostrar tela de login
    case isset($_POST[null]):
        include_once "View/login.php";
        break;

    //---Primeiro Acesso--//
    case isset($_POST["btnPrimeiroAcesso"]):
        include_once "../View/primeiroAcesso.php";
        break;

    //---Cadastrar--//
    case isset($_POST["btnCadastrar"]):
        require_once "../Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->inserir(
            $_POST["txtNome"],
            $_POST["txtCPF"],
            $_POST["txtEmail"],
            $_POST["txtSenha"]
        )) {
            include_once "../Model/cadastroRealizado.php";
        } else {
            include_once "../Model/cadastroNaoRealizado.php";
        }
        break;

    //--Atualizar--//
    case isset($_POST["btnAtualizar"]):
        require_once "../Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->atualizar(
            $_POST["txtID"],
            $_POST["txtNome"],
            $_POST["txtCPF"],
            $_POST["txtEmail"],
            date("Y-m-d", strtotime($_POST["txtData"]))
        )) {
            include_once "../View/atualizacaoRealizada.php";
        } else {
            include_once "../View/operacaoNaoRealizada.php";
        }
        break;

    case isset($_POST["btnLogin"]):
        require_once "../Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
            include_once "../View/principal.php";
        } else {
            include_once "../View/cadastroNaoRealizado.php";
        }
        break;

    //--Adicionar Formacao--//
    case isset($_POST["btnAddFormacao"]):
        require_once "../Controller/FormacaoAcadController.php";
        include_once "../Model/Usuario.php";
        $fController = new FormacaoAcadController();
        if (
            $fController->inserir(
                date("Y-m-d", strtotime($_POST["txtInicioFA"])),
                date("Y-m-d", strtotime($_POST["txtFimFA"])),
                $_POST["txtDescFA"],
                unserialize($_SESSION["Usuario"])->getID()
            ) != false
        ) {
            include_once "../Model/cadastroRealizado.php";
        } else {
            include_once "../Model/cadastroNaoRealizado.php";
        }
        break;

    //--Excluir Formacao-//
    case isset($_POST["btnExcluirFA"]):
        require_once "../Controller/FormacaoAcadController.php";
        include_once "../Model/Usuario.php";
        $fController = new FormacaoAcadController();
        if ($fController->remover($_POST["id"]) == true) {
            include_once "../Model/informacaoExcluida.php";
        } else {
            include_once "../Model/operacaoNaoRealizda.php";
        }
        break;

    //--Adicionar Experiencia Profissional-//
    case isset($_POST["btnAddEP"]):
        require_once "../Controller/ExperienciaProfissionalController.php";
        include_once "../Model/Usuario.php";
        $epController = new ExperienciaProfissionalController();
        if (
            $epController->inserir(
                date("Y-m-d", strtotime($_POST["txtInicioEP"])),
                date("Y-m-d", strtotime($_POST["txtFimEP"])),
                $_POST["txtEmpEP"],
                $_POST["txtDescEP"],
                unserialize($_SESSION["Usuario"])->getID()
            ) != false
        ) {
            include_once "../Model/informacaoInserida.php";
        } else {
            include_once "../Model/operacaoNaoRealizada.php";
        }
        break;

    //--Excluir Experiencia Profissional-//
    case isset($_POST["btnExcluirEP"]):
        require_once "../Controller/ExperienciaProfissionalController.php";
        include_once "../Model/Usuario.php";
        $epController = new ExperienciaProfissionalController();
        if ($epController->remover($_POST["idEP"]) == true) {
            include_once "../Model/informacaoExcluida.php";
        } else {
            include_once "../Model/operacaoNRealizada.php";
        }
        break;


    //--Adicionar OutrasFormacoes--//
    case isset($_POST["btnAddOF"]):
        require_once "../Controller/OutrasFormacoesController.php";
        include_once "../Model/Usuario.php";
        $fController = new OutrasFormacoesController();
        if (
            $fController->inserir(
                date("Y-m-d", strtotime($_POST["txtInicioOF"])),
                date("Y-m-d", strtotime($_POST["txtFimOF"])),
                $_POST["txtDescOF"],
                unserialize($_SESSION["Usuario"])->getID()
            ) != false
        ) {
            include_once "../Model/informacaoInserida.php";
        } else {
            include_once "../Model/operacaoNaoRealizada.php";
        }
        break;

    //--Excluir OutrasFormacoes-//
    case isset($_POST["btnExcluirOF"]):
        require_once "../Controller/OutrasFormacoesController.php";
        include_once "../Model/Usuario.php";
        $fController = new OutrasFormacoesController();
        if ($fController->remover($_POST["id"]) == true) {
            include_once "../Model/informacaoExcluida.php";
        } else {
            include_once "../Model/operacaoNaoRealizda.php";
        }
        break;
}
