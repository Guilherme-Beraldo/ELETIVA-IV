<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Produtos;

class ProdutosDAO {

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Produtos $produto) {
        try{
            $sql = "INSERT INTO produtos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)";
            
            $p = $this->conexao->getConexao()->prepare($sql);

            $p->bindValue(":nome", $produto->getNome());
            $p->bindValue(":preco", $produto->getPreco());
            $p->bindValue(":descricao", $produto->getDescricao());

            return $p->execute();

        }  catch(\Exception $e) {
                return 0;
        }
    }

    public function alterar(Produtos $produto) {
        try{
            $sql = "UPDATE produto SET nome = :nome, preco = :preco, descricao = :descricao
            WHERE id = :id";
             $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":nome", $produto->getNome());
             $p->bindValue(":id", $produto->getId());
             $p->bindValue(":preco", $produto->getPreco());
             $p->bindValue(":descricao", $produto->getDescricao());
             return $p->execute();
        }catch(\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try{
            $sql = "DELETE FROM produto WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":id", $id);
             return $p->execute();
        } catch(\Exception $e) {
            return 0;
        }
    }


    public function consultarTodos() {
        try{
            $sql = "SELECT * FROM produto";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try{
            $sql = "SELECT * FROM produto WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}