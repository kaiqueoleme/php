<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "@Kaiqueleme17";
$dbname = "sistemalogin";

try {
    $connect = mysqli_connect($servername, $username, $password, $dbname);
} catch (Exception $e) {
    echo "Falha na conexão: ".$e->getMessage();
}