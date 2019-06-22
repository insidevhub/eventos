<?php

$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "cad_user";

$conn = mysqli_connect($servidor,$user, $senhahost,$banco);



$usuario =  $_POST['usuario'];
$senha = $_POST['senha'];

$query  = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario','$senha')";
$insert = mysqli_query($conn, $query);

if($insert){

  echo"<script language=’javascript’ type=’text/javascript’>alert(‘Cadastro realizado com sucesso!’);window.location.href=’login.php'</script>";

}else{

  echo"<script language=’javascript’ type=’text/javascript’>alert(‘Não foi possível cadastrar esse usuário’);window.location.href=’login.php'</script>";


}

 ?>
