<?php
$servidor = "localhost";
$user  = "root";
$senhahost = "";
$banco = "eventos_bd";

$conn = mysqli_connect($servidor,$user, $senhahost,$banco);
if ($conn->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}
$query = sprintf("SELECT nom_usuario, email FROM usuario");


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eventos.com | Entrar</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">
</head>
<body id="tela-login">
  <form method="post" action="php/in.php">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">EVENTOS.COM</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-center">
  <fieldset >

    <h1 class="entrar">Entrar</h1>
  <div style="border: 5px outset #ecf0f1; padding: 36.5px;">
  <div class="form-group">

    <label for="exampleInputEmail1">Usuário:</label>
    <input action="" method="post" type="text" class="form-control" name="usuario" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha:</label>
    <input action="" method"post" type="password" class="form-control" name="senha" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
  <a class="btn btn-primary" href="cadastro.html">Não possui cadastro?
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</fieldset>
</div>
  </div>
  </br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Desenvolvido por Pablo, Thiago e Almir &copy; Eventos.com</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
