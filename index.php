<?php
require_once './Cliente.php';

for ($index = 0; $index < 10; $index++) {
    $Cliente[$index] = new Cliente();
    $Cliente[$index]->setNome('Individuo' . $index);
    $Cliente[$index]->setSobrenome('da Silva' . $index);
    $Cliente[$index]->setSexo('Feminino');
    $Cliente[$index]->setRg('1236541235-' . $index);
    $Cliente[$index]->setCpf('321.123.321-2' . $index);
    $Cliente[$index]->setEndereco('Rua ' . $index);
    $Cliente[$index]->setAtivo('Sim');
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

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>

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
                            Sobrenome
                        </td>
                        <td>
                            Sexo
                        </td>
                        <td>
                            RG
                        </td>
                        <td>
                            CPF
                        </td>
                        <td>
                            Endereço
                        </td>
                        <td>
                            Ativo
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
                                echo $Cliente[$index]->getNome();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getSobrenome();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getSexo();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getRg();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getCpf();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getEndereco();
                                ?>
                            </td>
                            <td>                    
                                <?php
                                echo $Cliente[$index]->getAtivo();
                                ?>
                            <td>
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
