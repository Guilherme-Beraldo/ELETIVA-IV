<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\EscolaDAO;
use Php\Primeiroprojeto\models\domain\Escola;

class EscolaController {

    public function inserir($params) {
        require_once("../src/views/escola/inserir_escola.html");
    }

    public function novo($params) {
        $escola = new Escola(0, $_POST['nome'], $_POST['tipo'], $_POST['endereco'], $_POST['cnpj']);
        $escolaDAO = new EscolaDAO();
        if ($escolaDAO->inserir($escola)) {
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }
}
