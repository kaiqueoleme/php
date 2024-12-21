<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar código ou comportamentos generalizados */

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador() {
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto;

$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);