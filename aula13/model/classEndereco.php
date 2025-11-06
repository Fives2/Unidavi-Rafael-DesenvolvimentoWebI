<?php

namespace model;

class Endereco {

    private string $logradouro;
    private string $bairro;
    private string $cidade;
    private string $estado;
    private string $cep;


    public function getLogradouro() {
        return $this->logradouro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCep() {
        return $this->cep;
    }
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function toJSON() {
        return json_encode(get_object_vars($this));
    }


}