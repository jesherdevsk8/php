<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Variáveis de Variáveis</title>
</head>
<body>
    
<h1>Exercício de variáveis de variáveis</h1>

    <?php
       
        $nome = "Jesher";
        $$nome = "Alves";

        echo "<h2> O conteúdo da variável nome é $nome </h2>";
        echo "<h2> E a variável Jesher criada recebeu o valor $Jesher </h2>";
        echo "<h2> Meu nome é $nome e o último nome é $Jesher </h2>"

    ?>

<h1><br>Código Fonte:</h1>

<div>
    <img src="css/vardevar.png" alt="Código Fonte">
</div>

</body>
</html>