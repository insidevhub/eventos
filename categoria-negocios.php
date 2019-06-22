<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['usuario'])){
  session_destroy();
  header('location: login.html');
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eventos - Categorias</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

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
              <a class="nav-link" href="usuario.php">Perfil</a>
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
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Negócios
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Início</a>
      </li>
      <li class="breadcrumb-item active">Negócios</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="http://pireseassociados.com.br/wp-content/uploads/2012/05/portfolio-seminario2.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Feira do Empreendedorismo</h3>
        <p>O Seminário contou com quatro painéis temáticos – Marketing, Legados, Hotelaria e Turismo Receptivo –com cases de países que sediaram a Copa do Mundo
        e os Jogos Olímpicos, estratégias, desafios e resultados obtidos por empresas que atuaram em grandes eventos esportivos, e os paralelos com as possibilidades
        que o Brasil pode descobrir.</p>
        <a class="btn btn-primary" href="#">Detalhes
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="http://www.netoeventos.com.br/wp-content/uploads/2015/06/Global-Healthy-workplace-awards-summit-1.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Feira do Turismo e Negócios</h3>
        <p>O turista de eventos e o turista de temporada têm perfis diferentes. O turismo de eventos apresenta melhor custo/benefício para a cidade-sede,
        pois os que vêm a negócios permanecem menos tempo e gastam, em média, 50% mais que os turistas tradicionais e, por precisarem comprovar os gastos,
        sempre exigem nota fiscal. Além disso, o turista de eventos costuma voltar com a família ou os amigos e faz propaganda da cidade, atraindo outros
        visitantes.</p>
        <a class="btn btn-primary" href="#">Detalhes
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://negociosrpc-prd.s3.amazonaws.com/wp-content/uploads/2015/07/foto-texto.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Semana do Profissional e Negócios</h3>
        <p>Confira algumas oportunidades de qualificação profissional, troca de experiências e debates relevantes que serão realizados nos próximos dias.</p>
        <a class="btn btn-primary" href="#">Detalhes
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://escrilex.com.br/wp-content/uploads/2017/07/15-eventos-mat.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Palestra sobre Marketing Digital</h3>
        <p>Evento oltado para aqueles que tem interesse em aprender mais sobre a area de Marketing Digital e como aplicar seus conhecimentos para
        obter bons negócios. Marque presença!</p>
        <a class="btn btn-primary" href="#">Detalhes
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->

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
