<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Escola;

class EscolaDAO {

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Escola $escola) {
        try {
            $sql = "INSERT INTO escola (nome, tipo, endereco, cnpj) VALUES (:nome, :tipo, :endereco, :cnpj)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $escola->getNome());
            $p->bindValue(":tipo", $escola->getTipo());
            $p->bindValue(":endereco", $escola->getEndereco());
            $p->bindValue(":cnpj", $escola->getCnpj());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Escola $escola) {
        try{
            $sql = "UPDATE escola SET nome = :nome, tipo = :tipo, endereco = :endereco, cnpj = :cnpj
            WHERE id = :id";
             $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":nome", $escola->getNome());
             $p->bindValue(":id", $escola->getId());
             $p->bindValue(":tipo", $escola->getTipo());
             $p->bindValue(":endereco", $escola->getEndereco());
             $p->bindValue(":cnpj", $escola->getCnpj());
             return $p->execute();
        }catch(\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try{
            $sql = "DELETE FROM escola WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":id", $id);
             return $p->execute();
        } catch(\Exception $e) {
            return 0;
        }
    }


    public function consultarTodos() {
        try{
            $sql = "SELECT * FROM escola";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try{
            $sql = "SELECT * FROM escola WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}