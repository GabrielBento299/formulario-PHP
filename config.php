<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassowrd = '';
    $dbName = 'formulario-gabriel';
    $name = "Gabriel";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassowrd, $dbName);

    // if($conexao->connect_errno) {
    //     echo 'erro';
    // } else {
    //     echo 'Coneção efetuada com sucesso, bem vindo ' . $name;
    // }

  
 ?>