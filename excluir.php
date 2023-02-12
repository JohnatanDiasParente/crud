<?php 

include 'connect.php';

$id = $_POST['id'];


$recerber_cadastros = "DELETE FROM tb_usuarios WHERE id = '$id'";

$query_cadastros = mysqli_query($connx,$recerber_cadastros);

header('location:list.php');

?>

