<?php
// Métodos Mágicos
// clone
// construct
// invoke
// tostring
// get
// set

/* Criar Array para adicionar qualquer atributo com qualquer valor
*/
class Pessoa {
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
        
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    // Caso tente tratar o objeto com string, retornará essa ação
    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }
}



$pessoa = new Pessoa;
$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa; 


/* __set e __get para acessar o atributo protegido ou privado
class Pessoa {
    private $nome;
    protected $idade;

    public function __get($val)
    {
        return $this->$val;
    }

    public function __set($attr, $val)
    {
        $this->$attr = $val;
    }
}

$a = new Pessoa;
$a->__set('nome', 'Fulano');
$a->__set('idade', 18);

var_dump($a);
*/