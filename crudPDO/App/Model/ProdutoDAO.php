<?php

namespace App\Model;

use PDO;

class ProdutoDao {
    public function create(Produto $p) {

        $sql = 'INSERT INTO Produtos (nome, descricao) VALUES (?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM Produtos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }

    public function update(Produto $p){

        $sql = 'UPDATE Produtos SET nome = ?, descricao =  ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();

    }

    public function delete($id){
        
        $sql = 'DELETE FROM Produtos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}