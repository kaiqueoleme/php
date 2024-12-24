<?php
// Sets
require_once 'vendor/autoload.php';

$produtoDao = new \App\Model\ProdutoDao;
$produtoDao->Delete(14);


foreach ($produtoDao->Read() as $produto) {
    echo $produto['nome']. "<br>". $produto['descricao']. "<hr>";
}