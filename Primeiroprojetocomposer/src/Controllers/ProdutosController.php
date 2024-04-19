<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\ProdutosDAO;
use Php\Primeiroprojeto\models\domain\Produtos;

class ProdutosController {

    public function inserir($params){
        require_once("../src/views/produtos/inserir_produtos.html");
    }

    public function novo($params) {
        $produto = new Produtos(0, $_POST['nome'], $_POST['preco'], $_POST['descricao']);
        $produtoDAO = new ProdutosDAO();
        if ($produtoDAO->inserir($produto)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }
}
