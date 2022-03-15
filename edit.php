<?php 
    
       
    if(!empty($_GET['id'])){
 

        include_once('config.php');

        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email']; 
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            } 
        } else {
            header('Location: sistema.php');
        }
     
      } else {
        header('Location: sistema.php');

      }


    ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/54b7b426e0.js" crossorigin="anonymous"></script>

 
</head>
<body>
    <a href="sistema.php">Voltar</a>

        <div class="box">
            <form action="saveEdit.php" method="POST">
                <fieldset>
 
                    <legend>Editar seus dados </legend>

   
 
 
                    <div class="inputBox">
                         <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome;?>">
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div><br>
                    
                    <div class="inputBox">
                            <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?>>
                            <label for="email" class="labelInput">Email</label>
                    </div><br>

                    <div class="inputBox">
                         <input type="password" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?>>
                        <label for="senha" class="labelInput">Senha</label>
                    </div><br>

                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?>>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div><br>
                    
                    <div class="inputBox">    <p>Sexo:</p>    
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                         <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                          <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                        <label for="outro">Outro</label>
                    <br><br> 
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                    

                        <div class="inputBox">
                      
                        </div>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade;?>">
                            <label for="cidade" class="labelInput">Cidade</label>
                        </div>

                      
                        <br>
                        <div class="inputBox">
                            <input type="text" name="estado" id="estado" class="inputUser"value="<?php echo $estado;?>">
                            <label for="estado" class="labelInput">Estado</label>
                        </div>

                        <br>
                        <div class="inputBox">
                            <input type="text" name="endereco" id="endereço" class="inputUser" value="<?php echo $endereco;?>">
                            <label for="endereço" class="labelInput">Endereço</label>
                        </div>
                        <br>

                        
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" name="update" id="submit-button">
                         <br>  <br>
                           
                  </fieldset>
                  
            </form>
        </div>
        
        
</body>
</html>