<?php 

include 'connect.php';

$select_cadastro = "SELECT * FROM tb_usuarios ";

$query_cadastros = mysqli_query($connx, $select_cadastro);

session_start();
    include_once('connect.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id  LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>lista de usuários</title>
  </head>
  <body>
    
  <div class= "container">

      <table class="table table-bordered">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Email</th>
                  <th scope="col">Senha</th>
                </tr>
  </thead>
  <tbody>
    <?php 
    while($receber_cadastros = mysqli_fetch_array($query_cadastros)){
        $id = $receber_cadastros['id'];
        $email = $receber_cadastros['email'];
        $senha = $receber_cadastros['senha'];
    

    ?>
  
  <tr>
    <form action="edit.php">
      <th scope="row"><?php echo $id ?></th>
      <td><input type="text" name="email" value="<?php echo $email ?>"></td>
      <td><input type="text" name="senha" value="<?php echo $senha ?>"></td>
      
    </form>              
      <td><form action="excluir.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="btn" value="EXCLUIR" >
   
      </form>
      </td>




      
  </tr>

    <?php }; ?>

    <tr>
       <form action="cadastro.php" method="POST">
       <td></td>
       <td><input type="text" name="email"></td>
        <td><input type="password" name="senha"></td>
        <td><input type="submit" name="btn" value="cadastro" ></td>
      </form>

    </tr>
   
  </tbody> 
</table>
</div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>