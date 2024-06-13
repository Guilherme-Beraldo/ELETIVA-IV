<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Veiculo;

class VeiculoDAO {

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Veiculo $veiculo) {
        try{
            $sql = "INSERT INTO veiculos (nome, tipo) VALUES (:nome, :tipo)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $veiculo->getNome());
            $p->bindValue(":tipo", $veiculo->getTipo());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Veiculo $veiculo) {
        try{
            $sql = "UPDATE veiculos SET nome = :nome, tipo = :tipo 
            WHERE id = :id";
             $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":nome", $veiculo->getNome());
             $p->bindValue(":id", $veiculo->getId());
             $p->bindValue(":tipo", $veiculo->getVeiculo());
             return $p->execute();
        }catch(\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try{
            $sql = "DELETE FROM veiculos WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
             $p->bindValue(":id", $id);
             return $p->execute();
        } catch(\Exception $e) {
            return 0;
        }
    }


    public function consultarTodos() {
        try{
            $sql = "SELECT * FROM veiculos";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try{
            $sql = "SELECT * FROM veiculos WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

 }