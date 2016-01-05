<?php
require_once './SRC/Clientes/Tipos/ClientePF.php';

require_once './SRC/Clientes/Tipos/ClientePJ.php';

for ($index = 0; $index < 5; $index++) {
    $Cliente[$index][0] = new ClientePF('Individuo ' . $index, 'Rua ' . $index, 'Rua ' . $index, 'sim', 'Clienete ' . $index);
    $Cliente[$index][0]->setCpf('321156321-1'.$index);
    $Cliente[$index][0]->setRg('12456321-'.$index);
    $Cliente[$index][0]->setSexo('Feminino');
    $Cliente[$index][0]->setSobreNome('se Souza '.$index);
    $Cliente[$index][1]="Física";
    
    $Cliente[$index+5][0] = new ClientePJ('Empresa ' . ($index+5), 'Rua ' . ($index+5), 'Rua ' . ($index+5), 'sim', 'Clienete ' . $index);
    $Cliente[$index+5][0]->setCnpj('123.123.456/0001-1'.($index+5));
    $Cliente[$index+5][0]->setIe('123.123.456.'.($index+5));
    $Cliente[$index+5][0]->setIm('123.123.456.'.($index+5));
    $Cliente[$index+5][0]->setRazaoSocial('Empresa'.($index+5).'LTDA');
    $Cliente[$index+5][1]="Jurídica";
}
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
                            rsort($Cliente);
                        }
                    }

                    for ($index = 0; $index < 10; $index++) {
                        ?>
                        <tr>
                            <td>                    
                                <?php
                                echo $Cliente[$index][0]->getNome();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index][0]->getEndereco();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index][0]->getEnderecoCobranca();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index][0]->getAtivo();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index][0]->getGrauImportancia();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                    echo $Cliente[$index][1];
                                ?>
                            </td>
                        <tr>                 
                            <?php
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
