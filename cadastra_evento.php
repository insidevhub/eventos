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

  <title>Eventos.com | Início</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">

</head>
<!-- Formulário para cadastro de um evento, enquato estiver logado com um usuario-->
<body>
  <form method="post"  enctype="multipart/form-data" action="php/out_evento.php">

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
   <div class="d-flex justify-content-center">
    <fieldset>
      <h2 style="margin: 51.5px; text-align: center;">Cadastrar Evento</h2>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Evento:</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome do Evento">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Local:</label>
      <input type="text" class="form-control" name="local" placeholder="Endereço">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Categoria:</label>
      <select name="categoria" class="form-control">
        <option  selected>Escolher...</option>
        <option value="Arte & Cultura">Arte & Cultura</option>
        <option value="Esporte">Esporte</option>
        <option value="Negocios">Negócios</option>
        <option value="Saude">Saúde</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Classificação Indicativa:</label>
      <select name="classificacao" class="form-control">
        <option selected>Escolher...</option>
        <option value="Livre">Livre para todos os públicos</option>
        <option value="+10">Maiores de 10 anos</option>
        <option value="14">Maiores de 14 anos</option>
        <option value="+16">Maiores de 16 anos</option>
        <option value="+18">Maiores de 18 anos</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Data:</label>
      <input type="date" class="form-control" name="data" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Hora:</label>
      <input type="time" class="form-control" name="hora" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control" name="descricao" rows="7"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Escolha uma imagem para o Evento</label>
    <input type="file" class="form-control-file" name="foto">
  </div>
  <center><button type="submit" class="btn btn-primary" style="margin: 30px;">Enviar</button></center>
</fieldset>
</div>


      <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> &copy; Eventos.com</p>
    </div>
    <!-- /.container -->
  </footer>
