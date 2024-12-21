<?php
// Agregação
// Quando classes podem existir de forma independente, mas para uma funcionar é preciso a existência de outra. Nesse caso, quando classe A é instanciada, você envia esse objeto para a classe B onde será trabalhado. Dessa forma, a Classe A estará livre para ser utilizada sem alterar nada por outro código.
class Produtos
{
    public $nome;
    public $valor;

    function __construct($n, $v)
    {
        $this->nome = $n;
        $this->valor = $v;
    }
}

class Carrinho
{
    public $produtos;

    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach ($this->produtos as $produto) {
            echo $produto->nome. '<br>';
            echo $produto->valor. '<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->exibe();