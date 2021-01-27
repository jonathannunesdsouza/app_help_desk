<?php 
  require_once "validador_acesso.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk | Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
  </head>

  <body>
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a class="nav-link text-light" href="logoff.php">
            <i class="fas fa-sign-out-alt fa-2x"></i>
          </a>
        </li>
      </ul>
    </nav>

    <div class="container">
      <div class="row" style="margin-top:30px;">
        <div class="col-6 d-flex justify-content-end">
          <div class="card text-white bg-primary mb-3" style="width: 18rem;">
            <div class="card-header">Abrir chamado</div>
            <div class="card-body">
              <p class="card-text">Aqui você pode abrir chamados no sistema de acordo com o seu problema.</p>
              <a href="abrir_chamado.php" class="btn btn-light text-primary d-block">
                <i class="fas fa-plus-circle" style="font-size:25px"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-6 d-flex justify-content-start">
          <div class="card text-white bg-primary mb-3" style="width: 18rem;">
            <div class="card-header">Consultar chamado</div>
            <div class="card-body">
              <p class="card-text">Aqui você pode consultar os chamados existentes no sistema de acordo com seu usuário.</p>
              <a href="consultar_chamado.php" class="btn btn-light text-primary d-block">
                <i class="fas fa-search" style="font-size:25px"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>