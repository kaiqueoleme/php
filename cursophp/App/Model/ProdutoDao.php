<?php

namespace App\Model;

class ProdutoDao
{

    public function Create(Produto $p) {

        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->execute();
    }

    public function Read() {}

    public function Update(Produto $p) {}

    public function Delete($id) {}
}
