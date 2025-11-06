<?php

namespace model;

class Contato {

    private int $tipo;
    private string $nome;
    private string $valor;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function toJSON() {
        return json_encode(get_object_vars($this));
    }


}
