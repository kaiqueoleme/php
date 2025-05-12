<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

//Botão Enviar 
if (isset($_POST['btn_entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) || empty($senha)) {
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login';";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha';";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) == 1) {
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "<li> Usúario e senha não conferem </li>";
            }
        } else {
            $erros[] = "<li> Usuário inexistente </li>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1> Login </h1>
    <?php
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo $erro;
        }
    }
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha"> <br>
        <button type="submit" name="btn_entrar"> Entrar </button>
    </form>
</body>

</html>