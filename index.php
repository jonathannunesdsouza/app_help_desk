<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk | Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Estilo CSS -->
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
        <div class="card-login">
          <div class="card text-white mb-3" style="max-width: 18rem;">
          <div class="card-header bg-primary text-center">Login</div>
          <div class="card-body">
            <form action="valida.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
              <button method='post' class="btn btn-lg btn-primary btn-block" type="submit"><i class="fas fa-sign-in-alt" style="font-size:25px;"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>