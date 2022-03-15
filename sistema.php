<?php 
    session_start();
    include_once('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
     
        unset($_SESSEION['email']);
        unset($_SESSEION['senha']);
        header('Location: sistema.html');
     }  

    $logado = $_SESSION['email'];
 
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sistema.css">
     <title>Document</title>
     <script src="https://kit.fontawesome.com/54b7b426e0.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <h2>LOGO</h2> 
         <button><a href="sair.php">Sair</a></button>
     </header>

     <?php echo "<h1>Bem vindo <u>$logado </u></h1>";
      ?>

     <section class="table">

     <table class="styled-table">
         
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">...</th>
                </tr>   
            </tbody>

                <?php 
                    while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['senha'] . "</td>";
                        echo "<td>" . $user_data['email'] . "</td>";
                        echo "<td>" . $user_data['telefone'] . "</td>";
                        echo "<td>" . $user_data['sexo'] . "</td>";
                        echo "<td>" . $user_data['data_nasc'] . "</td>";
                        echo "<td>" . $user_data['cidade'] . "</td>";
                        echo "<td>" . $user_data['estado'] . "</td>";
                        echo "<td>" . $user_data['endereco'] . "</td>";
                        echo "<td><a href='edit.php?id=$user_data[id]'>               
                            <i class='fab fa-youtube'></i>
                         </a>
                        </td>";                             
                    }
                ?>
            
            </table>
     </section>


</body>
</html>