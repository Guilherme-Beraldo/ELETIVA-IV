<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\models\DAO\VeiculoDAO;
use Php\Primeiroprojeto\models\domain\Veiculo;

class VeiculoController {

    public function index($params) {
        $veiculoDAO = new VeiculoDAO();
        $resultado = $veiculoDAO->consultarTodos();
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
        require_once("../src/views/veiculos/veiculos.php");
    }

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

    public function alterar($params) {
        $veiculoDAO = new VeiculoDAO(); 
        $resultado = $veiculoDAO->consultar($params[1]);
        require_once("../src/Views/veiculos/alterar_veiculos.php");
    }

    public function excluir ($params) {
        $veiculoDAO = new VeiculoDAO(); 
        $resultado = $veiculoDAO->consultar($params[1]);
        require_once("../src/Views/veiculos/excluir_veiculos.php");
    }

    public function editar($params) {
        $veiculo = new Veiculo($_POST['id'], $_POST['nome'], $_POST['tipo']);
        $veiculoDAO = new VeiculoDAO();
        if ($veiculoDAO->alterar($veiculo)){
            header("location: /veiculos/alterar/true");
        } else {
            header("location: /veiculos/alterar/false");
        }
        
    }

    public function deletar($params) {
        $veiculoDAO = new VeiculoDAO();
        if ($veiculoDAO->excluir($_POST['id'])){
            header("location: /veiculos/excluir/true");
        } else {
            header("location: /veiculos/excluir/false");
        }
        
    }
}
