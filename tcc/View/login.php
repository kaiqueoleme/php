<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>VetCare</title>
    <style>
        body {
            background-image: url(../img/bg3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;

        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .container {
            position: relative;
            height: 100vh;
            /* Adjust height as needed */
        }

        .centered-div {
            position: absolute;
            top: 50%;
            left: 45%;
            transform: translate(-50%, -50%);
        }

        .logo {
            position: absolute;
            top: 20%;
            left: 55%;
            transform: translate(-50%, -50%);
        }

        h3{
            margin-bottom: 0;
            font-size: 1.2em;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="w3-col m3 w3-white w3-container container" style="height: 100vh;">
        <div class="logo">
            <img src="../img/vetcare.png" width="70%" alt="">
        </div>  
        <div class=" vertical-center w3-margin-left centered-div" style="width: 70%;">

            <form action="" method="post">
                <div class="w3-row  ">
                    <h3>Usuário</h3>
                    <input class="w3-input  w3-border w3-round-large" type="text" name="txtUser">
                </div>
                <div class="w3-row">
                    <h3>Senha</h3>
                    <input class="w3-input  w3-border w3-round-large" type="text" name="txtSenha">
                </div>
                <div class="w3-row w3-section">
                    <div class="" style="">
                        <button name="btnLogin" class="w3-button w3-block w3-text-white w3-cyan w3-cell w3-round-large" style="">Acessar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/e5972cb3d1.js" crossorigin="anonymous"></script>
</body>

</html>