<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
try {
    if (isset($_POST['btn_cadastrar'])) {
        $stmt = $connect->prepare("INSERT INTO clientes (nome, sobrenome, email, idade) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $idade);

        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);

        if ($stmt->execute()) {
            $stmt->close();
            $connect->close();
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        }
    }
} catch (Exception $ex) {
    $_SESSION['mensagem'] = "Erro ao cadastrar";
    header('Location: ../index.php');
}
