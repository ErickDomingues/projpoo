<?php

namespace Entidades\Clientes;

//require_once __DIR__.'/ClienteInterface.php';

abstract class ClienteAbstract implements \Entidades\Clientes\ClienteInterface, \Entidades\EntidadeInterface {

    private $nome;
    private $endereco;
    private $enderecoCobranca;
    private $ativo;
    private $grauImportancia;
    private $tipoPessoa;
    private $id;
    private $table = 'clientes';

    public function __construct($nome, $endereco, $enderecoCobranca, $ativo, $grauImportancia, $tipoPessoa) {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setEnderecoCobranca($enderecoCobranca);
        $this->setAtivo($ativo);
        $this->setGrauImportancia($grauImportancia);
        $this->setTipoPessoa($tipoPessoa);
    }

    public function getTipoPessoa() {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa) {
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getTable() {
        return $this->table;
    }

    abstract function getFields();

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getGrauImportancia() {
        return $this->grauImportancia;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getEnderecoCobranca() {
        return $this->enderecoCobranca;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setGrauImportancia($grauImportancia) {
        $this->grauImportancia = $grauImportancia;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this->nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this->endereco;
    }

    public function setEnderecoCobranca($enderecoCobranca) {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this->enderecoCobranca;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
        return $this->ativo;
    }

}
