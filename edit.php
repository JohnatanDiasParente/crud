<?php
    
    if(!empty($_GET['id']))
     {  
       
         
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id= $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0 )
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
        }
        
      }
        else 
        {
            header(location:'sistema.php');
        } 
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>cadastro</title>
</head>
<body>
    
    <form action="saveedit.php" method= "POST">
        <label for= "nome" name= "nome" value="<?php echo $nome ?>" >Nome</label>    
        <input type="text" name= "nome" id="email">
        <label for="email" name= "email">Email</label>
        <input type="email" name= "email" id="email"  value="<?php echo $email ?>">
        <label for="senha" name= "senha">Senha</label>
        <input type="text" name= "senha" id="senha" value="<?php echo $senha ?>">
        <input type="hidden" name=id  value=<?php  echo $id  ?>>
        <input type="submit" name= "update" id="update">
        <a href="sistema.php">Voltar</a>
    </form>
    
<br><br>

</body>
</html>