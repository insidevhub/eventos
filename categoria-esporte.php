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
          <!--  <li class="nav-item">
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
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Esporte
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Início</a>
      </li>
      <li class="breadcrumb-item active">Esporte</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://usatmmajunkie.files.wordpress.com/2017/10/ricardo-lamas-jose-aldo-ufc-169.jpg?w=1000&h=600&crop=1" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>A luta do ano</h3>
        <p>Confira a luta mais esperada do ano, entre Jose Aldo e Ricardo Lamas. A luta acontecerá dia 26/10 às 22h, no Ginásio Paulo Sarasate. Garanta já seu ingresso!</p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://images.sympla.com.br/5ccc4cb763f72.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Boracini Camp</h3>
        <p>Com foco em crianças de 8 a 14 anos, o Camp acontecerá nos dias 1 e 2 de Junho das 9 as 17 horas e contará com a presença de convidados especiais. Capitaneados por Paulinho, serão dois dias de total imersão com a participação de alguns dos melhores técnicos do estado dispostos a passar o melhor da técnica, dos fundamentos e da filosofia do basquete. O ingresso da direito a 1 Kit com camiseta, short, squezze, sacochila e almoço nos dois dias.</p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://1.bp.blogspot.com/-qoQu0djyhvk/WO_KN58_R4I/AAAAAAAAI_Y/oKJCom-vH-Ma8-HEGD2HLhIp-WniXPgrwCLcB/s1600/17838756_1270534693063467_2068502839_o.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>1º Workshop de Musculação e Nutrição Esportiva</h3>
        <p>A Academia de ginastica CAFCOR por meio, do professor Jonafre Fernandes estará trazendo para o município de Juazeirinho, um dos maiores eventos de musculação e nutrição esportiva da região e contará com nomes como, Bodybuilder Luiz Maximus, que irá ministrar aulas e dará dicas de musculação.
        </p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://s2.glbimg.com/6FHDZf1TLhc2vrho-cmLNsdBDZI=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2019/a/W/MAb0WWTai9r3lHPMpyAw/escalacao-2019t1.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>CBLOL</h3>
        <p>A nova temporada do League of Legends profissional no Brasil começa neste sábado, com a disputa do 1º Split do Campeonato Brasileiro de League of Legends (CBLoL), no estúdio da Riot Games, em São Paulo. Ao todo, oito equipes se enfrentam durante dez semanas na primeira fase com o objetivo inicial de alcançar os playoffs da competição e depois voltam as atenções para a busca pelo troféu de campeão na fase eliminatória. Além de alcançar a glória da conquista, o vencedor do torneio se garante no Mid-Season Invitational (MSI), o Mundialito de LoL. Os dois finalistas serão os representantes do Brasil no Rift Rivals.</p>
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
