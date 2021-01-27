<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk | Abrir Chamado</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header bg-primary text-light">
              Preencha os campos e clique em + para adicionar um chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registra_chamado.php" method="post">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <? if(isset($_GET['registro']) && $_GET['registro'] == 'salvo') { ?>
                      <div class="text-success">
                        Chamado registrado com sucesso!
                      </div>
                    <? } ?>

                    <div class="row mt-4">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning text-light btn-block">
                          <i class="fas fa-arrow-circle-left" style="font-size:25px"></i>
                        </a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-success btn-block" type="submit">
                          <i class="fas fa-plus-circle" style="font-size:25px"></i>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </body>
</html>