<?php
// Associação entre dados
// Quando dados se relacionam entre si, mas são totalmente independentes um do outro
class Pedido {
    public $numero;
    public $cliente;
}


class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Kaique Leme";
$cliente->endereco = "Rua xxx, Número: 177";

$pedido = new Pedido;
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);
var_dump($dados);