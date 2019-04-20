<?php

    $serverName = 'localhost';
    $dbUser = 'root';
    $dbSenha = '';
    $dbTabela = 'ecommerce';

    $conn = mysqli_connect($serverName,$dbUser,$dbSenha,$dbTabela) or die(mysql_error);

?>