<?php

define('CLASS_DIR', 'SRC/');
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_register();

use Entidades\Clientes\Tipos\ClientePF;
use Entidades\Clientes\Tipos\ClientePJ;
use serviceDB\serviceDB;


$db = new \serviceDB\ConexaoDB();
$conexao = $db->getConexao();

echo '<div style="height:50px"></div>';
echo "<br>INICIANDO<br>";
echo "removendo tabelas ...<br>";
$conexao->query('DROP TABLE IF EXISTS clientes');
echo "<br>removendo tabelas = ok<br>";

echo "criando tabelas ...<br>";
$conexao->query('CREATE TABLE clientes (
            id  int(7) NOT NULL AUTO_INCREMENT ,
            nome  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            endereco  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            enderecoCobranca  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            grauImportancia  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            ativo  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            tipoPessoa  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
            PRIMARY KEY (id)
            )');


echo "<br>criando tabelas = ok<br>";

echo "Inserindo dados de teste ...<br>";

for ($index = 0; $index < 5; $index++) {
    $Cliente[$index] = new ClientePF('Individuo ' . $index, 'Rua ' . $index, 'Rua ' . $index, 'sim', 'Clienete ' . $index,'Física');
    $Cliente[$index]->setCpf('321156321-1' . $index);
    $Cliente[$index]->setRg('12456321-' . $index);
    $Cliente[$index]->setSexo('Feminino');
    $Cliente[$index]->setSobreNome('se Souza ' . $index);
    $stmt[$index] = new serviceDB($conexao);
    $stmt[$index]->persist($Cliente[$index]);
    $stmt[$index]->flush();

    $Cliente[$index + 5] = new ClientePJ('Empresa ' . ($index + 5), 'Rua ' . ($index + 5), 'Rua ' . ($index + 5), 'sim', 'Clienete ' . $index,'jurídica');
    $Cliente[$index + 5]->setCnpj('123.123.456/0001-1' . ($index + 5));
    $Cliente[$index + 5]->setIe('123.123.456.' . ($index + 5));
    $Cliente[$index + 5]->setIm('123.123.456.' . ($index + 5));
    $Cliente[$index + 5]->setRazaoSocial('Empresa' . ($index + 5) . 'LTDA');
    $stmt[$index + 5] = new serviceDB($conexao);
    $stmt[$index + 5]->persist($Cliente[$index + 5]);
    $stmt[$index + 5]->flush();
}


echo "<br>Inserindo dados de teste = ok<br>";
echo "<br>CONCLUÍDO<br>";
