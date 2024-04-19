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
}