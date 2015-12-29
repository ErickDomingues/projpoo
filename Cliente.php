<?php

class Cliente {
    
    private $nome;
    private $sobrenome;
    private $sexo;
    private $rg;
    private $cpf;
    private $endereco;
    private $ativo;
    
    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this->nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
        return $this->sobrenome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this->sexo;
    }

    function setRg($rg) {
        $this->rg = $rg;
        return $this->rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this->cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this->endereco;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
        return $this->ativo;
    }

        

}
