<?php 

include 'connect.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$recerber_cadastros = "INSERT INTO tb_usuarios VALUES('','','$email','$senha')";

$query_cadastros = mysqli_query($connx,$recerber_cadastros);

header('location:list.php');

?>
