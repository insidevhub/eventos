<?php
//iniciando a conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "");

//selecionando o banco de dados
$bd = mysqli_select_db($conn, "eventos_bd");

//criando a query de consulta à tabela criada
$sql = mysqli_query($conn, "SELECT * FROM evento") or die(
  mysqli_error($conn) //caso haja um erro na consulta
);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eventos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
<form action="" method="exibe_evento.php">
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">EVENTOS.COM</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="categoria-negocios.php">Negócios</a>
              <a class="dropdown-item" href="categoria-arte-e-cultura.php">Arte & Cultura</a>
              <a class="dropdown-item" href="categoria-esporte.php">Esporte</a>
              <a class="dropdown-item" href="categoria-saude.php">Saúde</a>
            </div>
            <!--<li class="nav-item">
              <a class="nav-link" href="">Perfil</a>
            </li>-->
            <li class"nav-item">
              <a class="nav-link" href="php/logout.php">Sair</a>
            </li>
            <li class"nav-item">
              <a class="nav-link" href="evento.php">Seus Eventos</a>
            </li>
            <li class="nav-item">
  <a class="btn btn-primary" href="cadastra_evento.php" background="blue">Novo evento</a>            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <?php while($aux = mysqli_fetch_assoc($sql)) { ?>
  <div class="container">

    <!-- Nessa parte do código, ele vai puxar todas as informações do evento pela ID gerada no momento do cadastro do evento. -->
    <h1 class="mt-4 mb-3"><?php echo $aux['nome']; ?>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Início</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $aux['nome']; ?></li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Descrição</h3>
        <p style="text-align: justify;"><?php echo $aux['descricao']; ?></p>
        <h3 class="my-3">Informações</h3>
        <ul>
          <li>Local: <?php echo $aux['localizacao']; ?></li>
          <li>Data: <?php echo $aux['data_e_hora']; ?></li>
          <li>Horário: <?php echo $aux['hora']; ?></li>
          <li>Classificação indicativa: <?php echo $aux['classificacao']; ?></li>
          <li>Categoria: <?php echo $aux['categoria']; ?></li>
        </ul>
      </div>

    </div>
    <!-- /.row -->
</br>
</br>
</br>
</br>
</br>
</br>
</br>

  </div>
  <!-- /.container -->
<?php } ?>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Eventos.com</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
