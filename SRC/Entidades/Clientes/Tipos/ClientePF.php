<?php

namespace Entidades\Clientes\Tipos;

//require_once __DIR__.'/../ClienteAbstract.php';

use Entidades\Clientes\ClienteAbstract;

class ClientePF extends ClienteAbstract {

    private $sobreNome;
    private $sexo;
    private $rg;
    private $cpf;

    function getFields() {
        return array('id' => $this->getId(), 'nome' => $this->getNome(), 'endereco' => $this->getEndereco(), 'enderecoCobranca' => $this->getEnderecoCobranca(), 'ativo' => $this->getAtivo(), 'grauImportancia' => $this->getGrauImportancia(), 'tipoPessoa' => $this->getTipoPessoa());
    }

    function getSobreNome() {
        return $this->sobreNome;
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

    function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

}
