<?php
    
    if(isset($_POST['submit']))
     {  
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['senha']);
         
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, " INSERT INTO usuarios(nome,email,senha) 
        VALUES('$nome','$email','$senha')");

        header('location:login.php');
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_cadastro.css">
    <title>cadastro</title>
</head>
<body>
    <h1>cadastro</h1>
    <div class="cadastro_div">
        <form action="cadastro.php" method= "POST">
            <label for= "nome" name= "nome" >Nome</label>    
            <input type="text" name= "nome" id="email">
            <label for="email" name= "email">Email</label>
            <input type="email" name= "email" id="email">
            <label for="senha" name= "senha">Senha</label>
            <input type="password" name= "senha" id="senha">
            <input type="submit" name= "submit" >
            <a href="login.php">login</a>
        </form>
    </div>
    
<br><br>

</body>
</html>