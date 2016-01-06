<?php

namespace Entidades\Clientes\Tipos;

//require_once __DIR__ . '/../ClienteAbstract.php';

use Entidades\Clientes\ClienteAbstract;

class ClientePJ extends ClienteAbstract {

    private $cnpj;
    private $ie;
    private $im;
    private $razaoSocial;

    function getFields() {
        return array('id' => $this->getId(), 'nome' => $this->getNome(), 'endereco' => $this->getEndereco(), 'enderecoCobranca' => $this->getEnderecoCobranca(), 'ativo' => $this->getAtivo(), 'grauImportancia' => $this->getGrauImportancia(), 'tipoPessoa' => $this->getTipoPessoa());
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getIe() {
        return $this->ie;
    }

    function getIm() {
        return $this->im;
    }

    function getRazaoSocial() {
        return $this->razaoSocial;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setIe($ie) {
        $this->ie = $ie;
    }

    function setIm($im) {
        $this->im = $im;
    }

    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

}
