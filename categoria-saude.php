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
        <!--    <li class="nav-item">
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
    <h1 class="mt-4 mb-3">Saúde
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Início</a>
      </li>
      <li class="breadcrumb-item active">Saúde</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://www.ceara.gov.br/wp-content/uploads/2019/02/banner_doacao_sangue_carnaval_HRN.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Doação de Sangue</h3>
        <p>Que tal dar uma ajudinha aos bancos de sangue antes de ir pular o carnaval ? Lembre-se que a sua contribuição é muito importante!</p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://i2.wp.com/crfce.org.br/portal/wp-content/uploads/2019/04/57221327_2320645388224133_2175874146330738688_n.jpg?fit=960%2C960" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>IV Congresso Brasileiro Multidisciplinar de Saúde</h3>
        <p>O IV Congresso Brasileiro Multidisciplinar de Saúde que irá ocorrer em Belém no período de 04 à 06 de Abril de 2019,  tem como objetivo discutir a saúde, meio ambiente e tecnologias, de forma a consolidar o cuidado e a equipe multiprofissional. Não é de hoje que se discute a influência do ambiente nos processos de saúde-doença,  devendo os profissionais da área compreender que ambiente é muito mais que um conceito ecológico - este representa o completo bem estar físico, mental e social de um indivíduo. Desta forma, a programação apresenta palestras, mesas redondas e mini-cursos que de forma multidisciplinar trarão especialistas de várias regiões do Brasil para debater tal temática e fazer o (re)pensar sobre o cuidado em saúde e suas consequências para a população.
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://www.sns.gov.pt/wp-content/uploads/2017/04/site-07.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Forum Nacional | Serviço Nacional de Saúde</h3>
        <p>É um evento público de apresentação dos relatórios de atividades das Coordenações Nacionais da Reforma do SNS, nas áreas dos Cuidados de Saúde Primários, Cuidados de Saúde Hospitalares e Cuidados Continuados Integrados, bem como dos projetos relevantes conexos</p>
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
          <img class="img-fluid rounded mb-3 mb-md-0" src="http://www.pmbsf.es.gov.br/uploads/filemanager/Cartaz_Vacinacao_Contra_Raiva.jpg?1500496697094" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Campanha de Vacinação Contra Raiva</h3>
        <p>A Secretaria Municipal de Saúde, através do Setor de Vigilância Epidemiológica, informa aos munícipes de Barra de São Francisco que vai começar o período de vacinação contra a raiva animal em cães e gatos. O dia definido para a realização da campanha na área urbana do município é o sábado (05) de agosto.</p>
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
