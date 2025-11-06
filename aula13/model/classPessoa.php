<?php

namespace model;

use model\Endereco,
    model\Contato;

class Pessoa {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpf;
    private $tipo;

    /**
     * @var Endereco
     */
    private $endereco;

    /**
     * @var Contato
     */
    private $contato;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getNomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }   

    public function getIdade() {
        $dataNascimento = new \DateTime($this->dataNascimento);
        $hoje = new \DateTime();
        $idade = $hoje->diff($dataNascimento);
        return $idade->y;
    }

    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function toJSON() {
        return json_encode(get_object_vars($this));
    }

}