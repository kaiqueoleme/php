<?php
$texto = "senha123";
$codificado = password_hash($texto, PASSWORD_DEFAULT);
echo "Texto Original: " . $texto . "<br>";
echo "Texto Codificado: " . $codificado . "<br>";
if (password_verify("senha123", $codificado)) {
    echo 'Senha Correta';
} else {
    echo 'Senha Incorreta';
}
