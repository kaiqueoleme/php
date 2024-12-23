<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto;
$produto->setNome('Microfote AT2020');
$produto->setDescricao('Microfone condensador');

$produtoDao = new \App\Model\ProdutoDao;
$produtoDao->Create($produto);