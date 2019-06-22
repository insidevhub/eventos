

<?php

$servername = "localhost";
$username = "thales";
$password = "123456";
$dbname = "eventos_bd";

//cria a conexão com o banco
$conexbanco = mysqli_connect($servername, $username, $password, $dbname);
//checa a conexão
if (!$conexbanco) {
    die("Conexão falhou: " . mysqli_connect_error());
}
//RECEBE DADOS DO CADASTRO
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$usuario = $_POST['usuario'];


//$query_select = "SELECT nome, email, senha, nom_usuario FROM usuario WHERE nom_usuario = '$usuario'";
//$select = mysqli_query($query_select,$conexbanco);
//$array = mysqli_fetch_array($select);
//$logarray = $array['nom_usuario'];

//if($usuario == "" || $usuario == null){

  //echo"<script language='JavaScript' type='text/javascript'>alert('O campo de usuário deve ser preenchido!');window.location.href='login.php';</script>";

//}else{

  //if($logarray == $usuario){

    //  echo"<script language='JavaScript' type='text/javascript'> alert('Esse usuário já existe!');window.location.href='login.php';</script>";
      //die();

  //}else{
    $query = "INSERT INTO usuario (nome, email, senha, nom_usuario) VALUES ('$nome', '$email', '$senha', '$usuario')";
    $insert = mysqli_query($query,$conexbanco);

    if($insert){

      echo"<script language=’javascript’ type=’text/javascript’>alert(‘Cadastro realizado com sucesso!’);window.location.href=’login.php'</script>";

    }else{

      echo"<script language=’javascript’ type=’text/javascript’>alert(‘Não foi possível cadastrar esse usuário’);window.location.href=’login.php'</script>";


  }


?>
