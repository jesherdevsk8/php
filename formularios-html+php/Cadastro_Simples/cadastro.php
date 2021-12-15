<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylef.css">
    <title>Cadastro</title>
</head>
<body>

    <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $nasc = isset($_GET["nasc"])?$_GET["nasc"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
            $idade = date("Y") - $nasc;  # O "Y" mostra o ano inteiro ex: 2021, já o "y" mostra somente o 21
            echo "$nome é $sexo e tem $idade anos";

        ?>
        <a href="index.html">Voltar</a>
    </div>
    
</body>
</html>