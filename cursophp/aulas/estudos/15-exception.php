<?php
// Tratamento de excessões 

class Newsletter {

    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // O número representa o valor do código, representado no '$exception->getCode'.
            throw new Exception("Este email é inválido", 1);
        } else {
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newsletter = new Newsletter;

try {
    $newsletter->cadastrarEmail("contato@");
} catch (Exception $e) {
    echo "Mensagem: ".$e->getMessage()."<br>"; 
    echo "Código: ".$e->getCode()."<br>"; 
    echo "Linha: ".$e->getLine()."<br>"; 
    echo "Arquivo: ".$e->getFile()."<br>"; 
}
