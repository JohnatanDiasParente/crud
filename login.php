<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Login page</title>
</head>
<body>
<div class= "principal">
       <div class="login"> 
           <h1>Login</h1>
           <form action="testlogin.php" method='POST'>
              
               <input type="email" name='email' placeholder="Email">
            </div>
            <br><br>
            <div class = "senha">   
                
                <input type="password" name='senha' placeholder="senha">
            </div>
            <br><br>
            <input type="submit" name = "submit" value='enviar'>
        </form>
        <div class="cadastro" ><a href="cadastro.php" id="cadastro">Cadastro</a></div>
        
</div>
    </body>
</html>