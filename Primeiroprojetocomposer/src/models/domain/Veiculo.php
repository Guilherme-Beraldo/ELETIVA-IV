<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Veiculo {
    private $id;
    private $tipo;
    private $nome;

    public function __construct($id, $nome, $tipo) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setTipo($tipo);
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}

