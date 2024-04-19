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
 }