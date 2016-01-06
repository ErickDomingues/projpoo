<?php
define('CLASS_DIR', 'SRC/');
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_register();

use serviceDB\serviceDB;

$db = new \serviceDB\ConexaoDB();
$conexao = $db->getConexao();
$stmt = new serviceDB($conexao);
$Dados = $stmt->listar('clientes');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="bootstrap/js/jquery-1.11.3.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js" ></script>

    </head>
    <body>
        <div class="container">
            <a class="btn btn-default" href="\?ordem=asc">Ascendente</a>
            <a class="btn btn-default" href="\?ordem=desc">Descendente</a>
            <hr class="divider">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            Nome
                        </td>
                        <td>
                            Endereço
                        </td>
                        <td>
                            Endereço Cobrança
                        </td>
                        <td>
                            Ativo
                        </td>
                        <td>
                            Grau Importância
                        </td>
                        <td>
                            Tipo Pessoa
                        </td>
                    </tr>
                </thead>
                <tbody>



                    <?php
                    if (isset($_GET['ordem'])) {
                        if ($_GET['ordem'] === 'desc') {
                            $funcSomaSubtrai = function(&$var) {
                                $var--;
                            };
                            $index = 9;
                        } elseif ($_GET['ordem'] === 'asc') {
                            $funcSomaSubtrai = function(&$var) {
                                $var++;
                            };
                            $index = 0;
                        }
                    } else {
                        $funcSomaSubtrai = function(&$var) {
                            $var++;
                        };
                        $index = 0;
                    }

                    while ($index < 10 && $index > -1) {
                        ?>
                        <tr>
                            <td>                    
                                <?php
                                echo $Dados[$index]['nome'];
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Dados[$index]['endereco'];
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Dados[$index]['enderecoCobranca'];
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Dados[$index]['ativo'];
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Dados[$index]['grauImportancia'];
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Dados[$index]['tipoPessoa'];
                                ?>
                            </td>
                        <tr>                 
                            <?php
                            $funcSomaSubtrai($index);
                        }
                        ?>
                </tbody>
            </table>
            <?php
// put your code here
            ?>
        </div>
    </body>
</html>
