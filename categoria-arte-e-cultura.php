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
    <h1 class="mt-4 mb-3">Arte & Cultura
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Início</a>
      </li>
      <li class="breadcrumb-item active">Arte & Cultura</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <a href="#"><img class="card-img-top" src="http://portaldozacarias.com.br/site/arquivos/imagens/noticias/2018/08/grande/20180815122132naucuiesartes620x400.jpg" alt=""></a>
          <img class="img-fluid rounded mb-3 mb-md-0" src="" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Feira do artesanato</h3>
        <p class="card-text" style="text-align: justify;">De 20 a 31 de janeiro, o Centro de Negócios do Sebrae recebe a edição de férias da Feira Internacional de Artesanato,
        Moda e Decoração (Mundial Art). A feira traz mais de 10 mil itens distribuídos em 56 estandes em 1.700 m².  A entrada custa
        R$ 8 inteira e R$ 4 meia-entrada para estudantes e idosos. Crianças até 10 anos não pagam.
        </p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="http://www.ultimaficha.com.br/wp-content/uploads/2017/11/Sana-Fest-Especial.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Sana Fest 2019</h3>
        <p class="card-text" style="text-align: justify;">O Sana é o maior evento de Cultura Pop e Geek do Norte/Nordeste do Brasil. Criado em 2001 por um grupo de amigos fãs de animação, games, quadrinhos
        e tecnologia, o Sana hoje é referência no Brasil quando falamos em eventos que congregam amantes de Filmes, Seriados, Cosplays, Animês, Games e muita diversão.
        </p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://www.rbsdirect.com.br/imagesrc/24813396.jpg?w=700" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Slash do Guns n'Roses em Fortaleza</h3>
        <p class="card-text" style="text-align: justify;">Depois da turnê Not In This Lifetime, ao lado de Axl Rose e Duff McKagan, do Guns n’Roses, Slash está de volta ao Brasil com seu projeto solo.
        Slash ft Myles Kenndy & The Conspirators chega ao país para 8 shows no Brasil: 21 de maio, no Pepsi on Stage, em Porto Alegre, 22 de maio, Stage
        Music Park, em Florianópolis, 24 de maio, no Live Curitiba, em Curitiba, 25 de maio, no Espaço das Américas, em São Paulo, 27 de maio, na Arena
        Sabiazinho, em Uberlândia, 29 de maio em Brasília, 01 de junho, no Classic Hall, em Recife e 03 de junho, no Centro de Eventos do Ceará, em Fortaleza.
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://jovemnerd.com.br/wp-content/uploads/2018/08/aranha-760x428.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Ingressos para o “Boteco do Gustavo Lima” em Fortaleza começam a ser vendidos</h3>
         <p class="card-text" style="text-align: justify;">A Sony Pictures divulgou o título oficial de “Spider-Man: Far From Home” no Brasil. Em terras tupiniquins, a sequência de “De Volta ao Lar” se chamará: Homem-Aranha: Longe de Casa.</p>
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
