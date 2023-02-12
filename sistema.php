<?php
session_start();
include_once('conexao.php');
   //print_r($_SESSION);
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
   {
      unset($_SESSION['email']);
      unset($_SESSION['senha']); 
      header('Location: login.php');
   }
   $logado = $_SESSION['email'];

   $sql = "SELECT * FROM usuarios ORDER by id DESC ";

   $result = $conexao->query($sql);

   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
<h1>acessou o sistema</h1>
<a href="sair.php">Sair</a>    

<?php

  echo "<h1>Bem vindo <u>$logado</u></h> "  

?>

<div class="m-5">
<table class="table">
         <thead>
            <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Email</th>
                     <th scope="col">Senha</th>
                     <th scope="col">...</th>
            </tr>
         </thead>
         <tbody>
            <?php
                  while($user_data = mysqli_fetch_assoc($result))
                  {
                     echo "<tr>";
                     echo "<td>".$user_data['id']."</td>";
                     echo "<td>".$user_data['nome']."</td>";
                     echo "<td>".$user_data['email']."</td>";
                     echo "<td>".$user_data['senha']."</td>";
                     echo "<td>
                     <a class = 'btn btn-primary' href='edit.php?id=$user_data[id]'>Editar</a>
                     <a id='delete' class = 'btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'> deletar </a>
                     </td>";
                     echo "</tr>";
                  }
            ?>
         </tbody>
  </table>
</div>


</body>
</html>