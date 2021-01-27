<?php 
  require_once "validador_acesso.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk | Consultar Chamado</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <style>
      .card-consultar-chamado {
        padding:30px 0 0 0;
        width: 100%;
        margin:0 auto;
      }
    </style>
    
  </head>

  <body>
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        App Help Desk
      </a>
    </nav>

    <div class="container">
      <div class="row">
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header bg-primary text-white">
              Cadastro(s) existente(s), para retroceder clique no botão abaixo do(s) card(s).
            </div>
            <div class="card-body">
              <div class="card border-primary mb-3" >
                <div class="card-header bg-primary text-light">Título do chamado</div>
                <div class="card-body text-primary">
                  <h6 class="card-title">Categoria do chamado</h6>
                  <p class="card-text">Descrição do chamado...</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-warning btn-lg text-white d-block">
                    <i class="fas fa-arrow-circle-left" style="font-size:25px"></i>
                  </a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>