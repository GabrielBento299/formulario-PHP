<?php 
    
       
    if(isset($_POST['submit'])){
        print_r('nome: ' . $_POST['nome']);
        print_r('<br>');

        print_r('email: ' . $_POST['email']);
        print_r('<br>');

        print_r( 'telefone: ' . $_POST['telefone']);

        print_r('<br>');
        print_r('sexo: ' . $_POST['genero']);

        print_r('<br>');
        print_r('data de Nascimento: ' . $data = date('d-m-y', strtotime($_POST['data_nascimento'])));

        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);

        print_r('<br>');
        print_r('idade: ' . $_POST['idade']);

        print_r('<br>');
        print_r('Estado:  ' . $_POST['estado']);

        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);


     
    }