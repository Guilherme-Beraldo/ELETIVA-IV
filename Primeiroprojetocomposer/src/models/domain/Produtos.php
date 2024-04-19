<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Produtos {

    private $id;
    private $nome;
    private $preco;
    private $descricao;

    public function __construct($id, $nome, $preco, $descricao) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setDescricao($descricao);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}