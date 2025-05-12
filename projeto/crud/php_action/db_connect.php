<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "@Kaiqueleme17";
$dbname = "crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");

if ($connect->connect_error) {
    die("<h1> Erro na conexão: <h1>" . $connect->connect_error);
}
