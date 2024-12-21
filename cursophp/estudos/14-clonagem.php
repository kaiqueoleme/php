<?php 
/* Referência e Clonagem de objetos 
    Quando atribuimos um objeto para uma váriavel nova, essa vária passará a ser uma 'referência' a esse objeto. Então qualquer alteração feita a essa váriavel, será também atribuida para o objeto.
    Entretanto, ao adicionar 'clone' na hora de instânciar (ex: '$nomeVariavel = clone $nomeObjeto') a váriavel passará a ser um clone do objeto, e portanto possuirá todos seus atributos e métodos sem nenhuma alteração ao objeto.

*/
class Pessoa {
    public $idade; 

    public function __clone()
    {
        echo "Clonagem de objetos";
    }
}

$pessoa = new Pessoa;
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;