<?php

/* ABSTRAÇÃO
    Uma classe ou método abstrato servem como modelo para uma classe em que é extendida. A classe como abstrata permite que defina tanto atributos quanto métodos, diferente de uma interface que aceita apenas métodos.
    A classe como abstract também impede do desenvolvedor de tentar instanciar essa superclasse.
*/
abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);

    abstract protected function Depositar($d);
}

class Itau extends Banco
{
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "<hr> Sacou: -". $s;
    }
    public function Depositar($d)
    {
        $this->saldo =+ $d;
        echo "<hr> Depositou: +". $d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ". $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ". $itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ". $itau->getSaldo();