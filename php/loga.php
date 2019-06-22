<?php
session_start();


$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "eventos_bd";

$conn = mysqli_connect($servidor,$user, $senhahost,$banco);
if ($conn->connect_error) {
    die("Falha na conexão" . $conn->connect_error);
}
echo "Conectado ao banco com sucesso!";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$consulta = "SELECT * FROM usuario WHERE
 nom_usuario= '$usuario' AND senha = '$senha'";

$verifica = mysqli_query($conn, $consulta);
$conta = mysqli_num_rows($verifica);


  if($conta > 0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

      header('location: ../index.php ');
  }
    else {
      unset($_SESSION ['login']);
      unset($_SESSION ['senha']);

        echo "<script type='javascript'>alert('Usuário não cadastrado!');";
  echo "javascript:window.location='login.html';</script>";
    header('Location: ../login.html');
      //   echo "$conn ";
    }
 ?>
