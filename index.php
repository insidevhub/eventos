<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['usuario'])){
  session_destroy();
  header('location: login.html');
  exit;
}
?>
﻿<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eventos.com | Início</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://d25pcrmm4mxkj0.cloudfront.net/wp-content/uploads/2019/02/28161403/Slash-21.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Slash em Fortaleza</h3>
            <p>O guitarrista Slash do Guns N' Roses se apresentará em Fortaleza no dia 03/06.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://venum.com.br/blog/wp-content/uploads/2015/12/arnold-classic.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://www.ocanal.com.br/wp-content/uploads/2018/11/venom.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Cinema este fim de semana ?</h3>
            <p>Veja aqui quais são os filmes que estarão em cartaz este fim de semana!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Fique por dentro dos eventos</h1>
    <h3 class="my-4">Eventos em Alta</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <img class="img-fluid" src="https://confiramais.com.br/wp-content/uploads/2014/09/fortal-2018.jpg">
              </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <img class="img-fluid" src="https://images.indianexpress.com/2019/03/holi_759-1.jpg?w=759&h=422&imflag=true">
              </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Rock_in_Rio_-_Madrid_2012.jpg" >
              </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
                <img class="img-fluid" src="https://4.bp.blogspot.com/-c-1vhU2VyJM/XKOJpkaNVvI/AAAAAAAAAh0/JIci8r1ne-MNGKY7aFL_KdR4jz3eOqhWQCLcBGAs/s1600/Arnold-Classic-South-America-2018-Results.jpeg">
              </a>
        </div>

      </div>
    <!-- CATEGORIAS -->
    <h2>Categorias</h2>

    <div class="row">
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="categoria-negocios.html"><img class="card-img-top" src="http://pireseassociados.com.br/wp-content/uploads/2012/05/portfolio-seminario2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="categoria-negocios.html">Empreendedorismo</a>
                </h4>
                <h6>
                  <a href="categoria-negocios.html">Negócios</a>
                </h6>
                <p class="card-text" style="text-align: justify;">O Seminário contou com quatro painéis temáticos – Marketing, Legados, Hotelaria e Turismo Receptivo –com cases de países que
                  sediaram a Copa do Mundo e os Jogos</p>
              </div>
            </div>
          </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="categoria-arte-e-cultura.html"><img class="card-img-top" src="http://portaldozacarias.com.br/site/arquivos/imagens/noticias/2018/08/grande/20180815122132naucuiesartes620x400.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="categoria-arte-e-cultura.html">Feira de Artesanato</a>
            </h4>
            <h6>
              <a href="categoria-arte-e-cultura.html">Arte & Cultura</a>
            </h6>
            <p class="card-text" style="text-align: justify;">De 20 a 31 de janeiro, o Centro de Negócios do Sebrae recebe a edição de férias da Feira Internacional de Artesanato,
            Moda e Decoração (Mundial Art).</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="categoria-esporte.html"><img class="card-img-top" src="https://usatmmajunkie.files.wordpress.com/2017/10/ricardo-lamas-jose-aldo-ufc-169.jpg?w=1000&h=600&crop=1" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="categoria-esporte">A luta do ano</a>
            </h4>
            <h6>
              <a href="categoria-esporte.html">Esporte</a>
            </h6>
            <p class="card-text" style="text-align: justify;">Confira a luta mais esperada do ano, entre Jose Aldo e Ricardo Lamas. A luta acontecerá dia 26/10 às 22h, no Ginásio Paulo Sarasate. Garanta já seu ingresso!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="categoria-arte-e-cultura.html"><img class="card-img-top" src="https://jovemnerd.com.br/wp-content/uploads/2018/08/aranha-760x428.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="categoria-arte-e-cultura.html">Homem Aranha: Longe de Casa</a>
            </h4>
            <h6>
              <a href="categoria-arte-e-cultura.html">Arte & Cultura</a>
            </h6>
            <p class="card-text" style="text-align: justify;">A Sony Pictures divulgou o título oficial de “Spider-Man: Far From Home” no Brasil. Em terras tupiniquins, a sequência de “De Volta ao Lar” se chamará: Homem-Aranha: Longe de Casa.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="categoria-saude.html"><img class="card-img-top" src="https://www.ceara.gov.br/wp-content/uploads/2019/02/banner_doacao_sangue_carnaval_HRN.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="categoria-saude.html">Doação de Sangue</a>
            </h4>
            <h6>
              <a href="categoria-saude.html">Saúde</a>
            </h6>
            <p class="card-text" style="text-align: justify;">Que tal dar uma ajudinha aos bancos de sangue antes de ir pular o carnaval ? Lembre-se que a sua contribuição é muito importante!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="categoria-arte-e-cultura.html"><img class="card-img-top" src="https://4.bp.blogspot.com/-nekca-CvZQw/WjsO2VIx4eI/AAAAAAAAAw0/tPvwjFLC8SILa_WvvMSiDFrS0mJKb21PgCLcBGAs/s1600/sana_front.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="categoria-arte-e-cultura.html">Sana Fest</a>
            </h4>
            <h6>
              <a href="categoria-arte-e-cultura.html">Arte & Cultura</a>
            </h6>
            <p class="card-text" style="text-align: justify;">O maior evento de cultura pop e geek do Norte e Nordeste já tem data marcada! Venha para o Sana Fest 2018 nos dias 14, 15 e 16 de dezembro!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> &copy; Eventos.com</p>
    
    </div>

    <!--  <img style="margin:5px" src="[caminho do ícone]" width="30" height="30" alt="Instagram"></a></div>-->
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
