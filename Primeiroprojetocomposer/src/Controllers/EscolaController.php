<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\EscolaDAO;
use Php\Primeiroprojeto\models\domain\Escola;

class EscolaController {

    public function index($params) {
        $escolaDAO = new EscolaDAO();
        $resultado = $escolaDAO->consultarTodos();
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
        require_once("../src/views/escola/escola.php");
    }

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

    public function alterar($params) {
        $escolaDAO = new EscolaDAO(); 
        $resultado = $escolaDAO->consultar($params[1]);
        require_once("../src/Views/escola/alterar_escola.php");
    }

    public function excluir ($params) {
        $escolaDAO = new EscolaDAO(); 
        $resultado = $escolaDAO->consultar($params[1]);
        require_once("../src/Views/escola/excluir_escola.php");
    }

    public function editar($params) {
        $escola = new Escola($_POST['id'], $_POST['nome'], $_POST['tipo'], $_POST['endereco'], $_POST['cnpj']);
        $escolaDAO = new EscolaDAO();
        if ($escolaDAO->alterar($escola)){
            header("location: /escola/alterar/true");
        } else {
            header("location: /escola/alterar/false");
        }
        
    }

    public function deletar($params) {
        $escolaDAO = new EscolaDAO();
        if ($escolaDAO->excluir($_POST['id'])){
            header("location: /escola/excluir/true");
        } else {
            header("location: /escola/excluir/false");
        }
        
    }

}
