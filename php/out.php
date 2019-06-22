<?php
//cria uma  conexão com o banco
$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "eventos_bd";
//verifica se  a conexão foi bem sucedida
$conn = mysqli_connect($servidor,$user, $senhahost,$banco);
if ($conn->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}
echo "Conectado com sucesso";

//recebe as informações dos campos do formulario de cadastro
$nome = $_POST['nome'];
$email  = $_POST['email'];
$usuario  = $_POST['usuario'];
$senha  = $_POST['senha'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
//insere na  tabela os valores capturados em seus respectivos campos
$query  = "INSERT INTO usuario (nome, email, nom_usuario, senha, cidade, estado) VALUES ('$nome', '$email', '$usuario','$senha', '$cidade', '$estado')";
//se a variavel $insert for verdadeira na linha 24, então  o if  é executado  fazendo esta comparação
$insert = mysqli_query($conn, $query);

if($insert){

  echo"Cadastro realizado com sucesso!";
//header direciona para a pagina de login
    header('Location: ../login.html');
}else{

  echo"Não foi possível cadastrar esse usuário";


}



?>
