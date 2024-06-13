<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\PessoaDAO;
use Php\Primeiroprojeto\models\domain\Pessoa;

class PessoaController {

    public function index($params) {
        $pessoaDAO = new PessoaDAO();
        $resultado = $pessoaDAO->consultarTodos();
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
        require_once("../src/views/pessoa/pessoa.php");
    }


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

    public function alterar($params) {
        $pessoaDAO = new PessoaDAO(); 
        $resultado = $pessoaDAO->consultar($params[1]);
        require_once("../src/Views/pessoa/alterar_pessoa.php");
    }

    public function excluir ($params) {
        $pessoaDAO = new PessoaDAO(); 
        $resultado = $pessoaDAO->consultar($params[1]);
        require_once("../src/Views/pessoa/excluir_pessoa.php");
    }

    public function editar($params) {
        $pessoa = new Pessoa($_POST['id'], $_POST['nome'], $_POST['idade']);
        $pessoaDAO = new PessoaDAO();
        if ($pessoaDAO->alterar($pessoa)){
            header("location: /escola/alterar/true");
        } else {
            header("location: /escola/alterar/false");
        }
        
    }

    public function deletar($params) {
        $pessoaDAO = new PessoaDAO();
        if ($pessoaDAO->excluir($_POST['id'])){
            header("location: /pessoa/excluir/true");
        } else {
            header("location: /pessoa/excluir/false");
        }
        
    }

}
