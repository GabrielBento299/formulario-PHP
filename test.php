<?php 

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo 'Email: ' . $email;
        echo 'Senha: ' . $senha;

        echo 'deu certo';

    }else {
        echo 'nao foi';
     }


   

?>