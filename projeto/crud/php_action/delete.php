<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
try {
    if (isset($_POST['btn_deletar'])) {
        $sql = $connect->prepare("DELETE FROM clientes WHERE id = ?");
        $sql->bind_param("i", $id);

        $id = mysqli_escape_string($connect, $_POST['id']);
        
        if ($sql->execute()) {
            $_SESSION['mensagem'] = "Deletado com sucesso!";
            $sql->close();
            $connect->close();
            header('Location: ../index.php');
        }
    }
} catch (Exception $ex) {
    $_SESSION['mensagem'] = "Erro ao deletar";
    header('Location: ../index.php');
}
