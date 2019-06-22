<?php

$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "cad_user";

$conn = mysqli_connect($servidor,$user, $senhahost,$banco);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$query  = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario','$senha')";
$insert = mysqli_query($conn, $query);

if($insert){

  echo"Cadastro realizado com sucesso!";

}else{

  echo"Não foi possível cadastrar esse usuário";


}


?>
