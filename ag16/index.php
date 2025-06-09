

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>Site</title>
    <style>
        .nomeuserhead {
            float: right;
            font-size: 1.5em;
        }

        .logo {
            margin-top: 1vh;
            margin-bottom: 1vh;
            margin-left: 4vw;
        }

        h2 {
            margin-top: 0;
            padding-left: 5vw;
        }

        article {
            margin-top: 5vh;
            padding-top: 1vw;
            padding-right: 1.5vw;
            
        }

        
    </style>
</head>

<body>
    <?php
    function get_endereco($cep)
    {
        //formatar CEP

        $cep = preg_replace("/[^0-9]/", "", $cep);

        $url = "http://viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);


        return $xml;
    }
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["nome"] = "";
    $_SESSION["cep"] = "";
    $_SESSION["logradouro"] = "";
    $_SESSION["numero"] = "";
    $_SESSION["bairro"] = "";
    $_SESSION["cidade"] = "";
    $_SESSION["estado"] = "";

    if (isset($_POST["btnBuscar"])) {
        $endereco = get_endereco($_POST["txtCEP"]);
        $_SESSION["nome"] = $_POST["txtNome"];
        $_SESSION["cep"] = $_POST["txtCEP"];
        $_SESSION["logradouro"] = (string)$endereco->logradouro;
        $_SESSION["numero"] = $_POST["txtNumero"];
        $_SESSION["bairro"] = (string)$endereco->bairro;
        $_SESSION["cidade"] = (string)$endereco->localidade;
        $_SESSION["estado"] = (string)$endereco->uf;
    }
    ?>
    <div class="w3-content" style="max-width:100%">
        <header class="w3-container w3-teal">
            <img class="logo" src="img/vetcare-white.png" width="60wv" alt="">
            <h1 class="nomeuserhead w3-margin">Nome usuário</h1>
        </header>
        <nav class="w3-sidebar w3-bar-block w3-center w3-col m4 l1 w3-border">
            <a href="#home" class="w3-bar-item w3-button w3-block w3-cell w3-light-grey w3-text-cyan w3-hover-text-cyan w3-hover-light-cyan">
                <i class="fa fa-home w3-xxlarge"></i>
                <p></p>
            </a>
            <a href="#idCadastro" class="w3-bar-item w3-button w3-block w3-cell w3-light-grey w3-text-cyan w3-hover-text-cyan w3-hover-light-cyan">
                <i class="fa fa-solid fa-paw w3-xxlarge"></i>
                <p></p>
            </a>
            <a href="#atendimentos" class="w3-bar-item w3-button w3-block w3-cell w3-light-grey w3-text-cyan w3-hover-text-cyan w3-hover-light-cyan">
                <i class="fa fa-solid fa-list w3-xxlarge"></i>
                <p></p>
            </a>
        </nav>
        <article class="w3-content w3-border">

            <h2 class=" w3-text-grey">Cadastro de Tutor</h2>
            <form action="#" method="post" class="w3-row w3-text-cyan w3-center" style="width: 100%;">
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo $_SESSION["nome"] ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge far fa-envelope-open"></i>
                    </div>
                    <div class="w3-col" style="width:50%;">
                        <input class="w3-input w3-border w3-round-large" name="txtCEP" type="text" placeholder="Ex: 11111000 (apenas números)" value="<?php echo $_SESSION["cep"] ?>">
                    </div>
                    <div class="w3-rest" style="">
                        <button name="btnBuscar" class="w3-button w3-cyan w3-round-large w3-right" style="width: 95%;">Buscar Endereço</button>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fas fa-home"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtLogradouro" type="text" placeholder="Rua, Avenida e etc." value="<?php echo $_SESSION["logradouro"] ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <span class="w3-xxlarge ">Nº</span>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtNumero" type="text" placeholder="Número ex (1111)" value="<?php echo $_SESSION["numero"] ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fas fa-home"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtBairro" type="text" placeholder="Bairro." value="<?php echo $_SESSION["bairro"] ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fas fa-map-marked"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtCidade" type="text" placeholder="Cidade." value="<?php echo $_SESSION["cidade"] ?>">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fas fa-map-marked-alt"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEstado" type="text" placeholder="Estado." value="<?php echo $_SESSION["estado"] ?>">
                    </div>
                </div>

               
            </form>
            <form action="cadastroRealizado.php">
                 <div class="w3-row w3-section">
                    <div class="w3-center" style="">
                        <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-cyan w3-cell w3-round-large" style="width: 90%;">Cadastrar</button>
                    </div>
                </div>
            </form>
        </article>
    </div>

</body>

</html>