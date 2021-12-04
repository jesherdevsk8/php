<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    
<h1>Exercícios</h1>

    <?php
       
        $num01 = $_GET["a"];
        $num02 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "<h2> Os valores passados são $num01 e $num02 </h2>";
        $result = ($tipo == "s") ? $num01+$num02 : $num01*$num02;
        #$result = ($tipo == "d") ? $num01-$num02 : $num01*$num02;
        echo "<h2> O resultado será $result </h2>";

    ?>

<div>
    <img src="css/unario.png" alt="Operador Unário">
    <hr>
    <img src="css/operadores_relacionais.png" alt="Operadores Relacionais">
</div>

</body>
</html>