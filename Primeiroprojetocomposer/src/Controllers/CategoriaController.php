<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\CategoriaDAO;
use Php\Primeiroprojeto\models\domain\categoria;

class CategoriaController {

    public function inserir($params){
        require_once("../src/views/categoria/inserir_categoria.html");
    }

    public function novo($params) {
        $categoria = new Categoria(0, $_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        if ($categoriaDAO->inserir($categoria)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }
}
