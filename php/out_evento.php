<?php

session_start();
$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "eventos_bd";

$conn = mysqli_connect($servidor,$user, $senhahost,$banco);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";


$nome = $_POST['nome'];
$local  = $_POST['local'];
$data  = $_POST['data'];
$hora = $_POST['hora'];
$descricao  = $_POST['descricao'];
 //$foto = $_FILES['foto']['name'];
$categoria  = $_POST['categoria'];
$classificacao  = $_POST['classificacao'];
//$diretorio = "../img/";
//$arquivo = $diretorio .basename($_FILES['foto']['name']);
//seleciona tipo arquivo
//$extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));




$event  = "INSERT INTO evento (nome, localizacao, data_e_hora, hora, descricao, categoria, classificacao ) VALUES ('$nome', '$local','$data','$hora','$descricao', '$categoria','$classificacao')";
$insert = mysqli_query($conn, $event);

//envia imagem
//move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$foto);
if($insert){

  $_SESSION['msg'] = "<p style='color:green;'>Evento cadastrado com sucesso!</p>";

  //echo"Evento cadastrado com sucesso!";
    header('Location: ../cadastra_evento.php');
}else{

  echo"Não foi possível cadastrar esse evento!";


}



?>
