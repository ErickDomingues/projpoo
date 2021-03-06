<?php

namespace Entidades\Clientes;

interface ClienteInterface {

    public function getNome();

    public function getEndereco();

    public function getEnderecoCobranca();

    public function getAtivo();

    public function getGrauImportancia();

    public function setNome($nome);

    public function setEndereco($endereco);

    public function setEnderecoCobranca($endereco);

    public function setAtivo($ativo);

    public function setGrauImportancia($grau);

    public function setTipoPessoa($tipoPessoa);

    public function getTipoPessoa();
}
