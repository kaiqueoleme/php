<?php

namespace App\Model;

class Produto {
    
    private $id, $nome, $descricao;

    public function getId() {
        return $this->id;
    }

    public function setId($i) {
        $this->id = $i;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getDescricao() {
        return $this->descricao;
    }


    public function setDescricao($d) {
        $this->descricao = $d;
    }
}