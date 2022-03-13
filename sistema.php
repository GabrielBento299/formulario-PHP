<?php 
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
     
        unset($_SESSEION['email']);
        unset($_SESSEION['senha']);
        header('Location: sistema.html');
     }

    $logado = $_SESSION['email'];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sistema.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>LOGO</h2> 
        <a href="sair.php">Voltar</a>
    </header>

     <?php echo "<h1>Bem vindo <u>$logado</u></h1>";
     ?>
</body>
</html>