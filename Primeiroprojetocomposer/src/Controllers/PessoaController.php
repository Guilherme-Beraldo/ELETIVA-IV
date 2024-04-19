<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\PessoaDAO;
use Php\Primeiroprojeto\models\domain\Pessoa;

class PessoaController {

    public function inserir($params){
        require_once("../src/views/pessoa/inserir_pessoa.html");
    }

    public function novo($params) {
        $pessoa = new Pessoa(0, $_POST['nome'], $_POST['idade']);
        $pessoaDAO = new PessoaDAO();
        if ($pessoaDAO->inserir($pessoa)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }
}
