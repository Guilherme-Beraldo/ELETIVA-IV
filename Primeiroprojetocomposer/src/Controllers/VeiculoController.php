<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\VeiculoDAO;
use Php\Primeiroprojeto\models\domain\Veiculo;

class VeiculoController {

    public function inserir($params){
        require_once("../src/views/veiculos/inserir_veiculos.html");
    }

    public function novo($params) {
        $veiculo = new Veiculo(0, $_POST['nome'], $_POST['tipo']);
        $veiculoDAO = new VeiculoDAO();
        if ($veiculoDAO->inserir($veiculo)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }
}
