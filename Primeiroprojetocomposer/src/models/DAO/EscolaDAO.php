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
}