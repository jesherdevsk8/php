<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylef.css">
    <title>Formulário</title>
</head>
<body>
    
    <div>
        <?php
            $valor = $_GET["v"];
            $raiz = sqrt($valor);
            echo "A raiz de $valor é igual a ". number_format($raiz, 2);
        ?>

        <a href="index.html">voltar</a>
    </div>

</body>
</html>