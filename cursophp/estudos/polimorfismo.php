<?php
/* POLIMORFISMO 
    A capacidade de uma classe herdada de poder alteral as ações de um método herdado da classe mãe
*/
class Animal
{
    public function Andar()
    {
        echo "O animal andou";
    }

    public function Correr() {
        echo "O animal correu";
    }
}

class Cavalo extends Animal
{
    public function Andar()
    {
        $this->Correr();
    }
}

$animal = new Cavalo;
$animal->Andar();
