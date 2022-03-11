<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tela de Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
  <body>
    <!-- container-fluid -->
    <div class="container-fluid">

        <!-- row do formulario de login -->
        <div class="row formulario-login ">
            <div class="col-md-offset-4 col-md-4" style="margin-top: 100px;">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background-color: #4682B4;">Formulário de Login</div>
                    <div class="panel-body">
                        <!-- formulario -->
                        <form method="POST" action="area-administrativa.php">
                            <div class="form-group">
                                <label>Endereço de e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                        <!-- /formulario -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /row do formulario de login -->

    </div>
    <!-- /container-fluid -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>