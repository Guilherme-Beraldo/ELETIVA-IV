<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\ProdutosDAO;
use Php\Primeiroprojeto\models\domain\Produtos;

class ProdutosController {

    public function index($params) {
        $produtoDAO = new ProdutosDAO();
        $resultado = $produtoDAO->consultarTodos();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";
        if($acao == "inserir" && $status == "true") {
            $mensagem = "Registro inserido com sucesso! ";
        } elseif($acao == "inserir" && $status == "false") {
            $mensagem = "Erro ao inserir!";
        }  elseif($acao == "alterar" && $status == "true") {
            $mensagem = "Registro alterado com sucesso!";
        }  elseif($acao == "alterar" && $status == "false") {
            $mensagem = "Erro ao alterar!";
        } elseif($acao == "excluir" && $status == "true") {
            $mensagem = "Registro excluido com sucesso!";
        }  elseif($acao == "excluir" && $status == "false") {
            $mensagem = "Erro ao excluir!"; 
        } else {
            $mensagem = "";
        }
        require_once("../src/views/produtos/produtos.php");
    }


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

    public function alterar($params) {
        $produtosDAO = new ProdutosDAO(); 
        $resultado = $produtosDAO->consultar($params[1]);
        require_once("../src/Views/produtos/alterar_produtos.php");
    }

    public function excluir ($params) {
        $produtosDAO = new ProdutosDAO(); 
        $resultado = $produtosDAO->consultar($params[1]);
        require_once("../src/Views/produtos/excluir_produtos.php");
    }

    public function editar($params) {
        $produtos = new Produtos($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao']);
        $produtosDAO = new ProdutosDAO();
        if ($produtosDAO->alterar($produtos)){
            header("location: /produtos/alterar/true");
        } else {
            header("location: /produtos/alterar/false");
        }
        
    }

    public function deletar($params) {
        $produtosDAO = new ProdutosDAO();
        if ($produtosDAO->excluir($_POST['id'])){
            header("location: /produtos/excluir/true");
        } else {
            header("location: /produtos/excluir/false");
        }
        
    }

}
