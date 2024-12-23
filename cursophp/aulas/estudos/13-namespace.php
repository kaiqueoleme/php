<?php
/* NAMESPACE
    Quando existem funções/classes/constantes que precisam ter o mesmo nome, pode ser utilizado um 'namespace' para separá-las. Apenas utilize 'objeto = new \nomeNamespace\nomeClasse;' ou quando se deseja utilizar outro nome quando for instanciar a classe, declare antes de instanciar: 'use nomeNamespace\nomeClasse as nomeClasseSubstituta;'.
    Em caso de utilizar o namespace, é indicado exportar de outro arquivo por meio do 'require', como em 'require "nomeArquivo";'.
*/
require 'classes/produto.php';
require 'models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 =  new productClass();
$produto2->mostrarDetalhes();