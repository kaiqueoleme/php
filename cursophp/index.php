<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto;
$produto->setNome('Notebook DELL');
$produto->setDescricao('i5, 4gb');

var_dump($produto);