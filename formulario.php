<?php 
    
       
    if(isset($_POST['submit'])){

    //     print_r('Nome: ' . $_POST['nome']);
    //     print_r('<br>');

    //     print_r('email: ' . $_POST['email']);
    //     print_r('<br>');

    //     print_r( 'telefone: ' . $_POST['telefone']);

    //     print_r('<br>');
    //     print_r('sexo: ' . $_POST['genero']);

    //     print_r('<br>');
    //     print_r('data de Nascimento: ' . $data = date('d-m-y', strtotime($_POST['data_nascimento'])));

    //     print_r('<br>');
    //     print_r('Cidade: ' . $_POST['cidade']);

    //     print_r('<br>');
    //     print_r('idade: ' . $_POST['idade']);

    //     print_r('<br>');
    //     print_r('Estado:  ' . $_POST['estado']);

    //     print_r('<br>');
    //     print_r('Endereço: ' . $_POST['endereco']);


        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = date('d-m-y', strtotime($_POST['data_nascimento']));
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

        echo 'Deu tudo certo ' . $nome . ' Seu Formulario foi com sucesso!';
    
    
    }


    ?>
 