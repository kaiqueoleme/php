<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
try {
    if (isset($_POST['btn_editar'])) {
        $sql = $connect->prepare("UPDATE clientes SET nome = ?, sobrenome = ?, email = ?, idade = ? WHERE id = ?");
        $sql->bind_param("sssii", $nome, $sobrenome, $email, $idade, $id);
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $id = $_POST['id'];

        if ($sql->execute()) {
            $sql->close();
            $connect->close();
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php');
        }
    }
} catch (Exception $ex) {
    $_SESSION['mensagem'] = "Erro ao atualizar";
    header('Location: ../index.php');
}
