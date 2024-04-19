<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Escola {

    private $id;
    private $nome;
    private $tipo;
    private $endereco;
    private $cnpj;

    public function __construct($id, $nome, $tipo, $endereco, $cnpj) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setTipo($tipo);
        $this->setEndereco($endereco);
        $this->setCnpj($cnpj);  
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getTipo() {
        return $this->tipo;
    }
}