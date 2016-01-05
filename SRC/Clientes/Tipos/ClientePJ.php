<?php


namespace Clientes\Tipos;

require_once __DIR__ . "/../ClienteAbstract.php";

use Clientes\ClienteAbstract;

class ClientePJ extends ClienteAbstract {

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

    private $cnpj;
    private $ie;
    private $im;
    private $razaoSocial;

}
