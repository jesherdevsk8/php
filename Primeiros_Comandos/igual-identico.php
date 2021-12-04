<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Igual ou idêntico</title>
</head>
<body>
    
<h1>Exercícios</h1>

    <?php
       
        $a = 3;
        $b = "3";
        $result = ($a === $b)?"SIM":"NAO"; # operador "===" para identico, diferente de "==" para igual
        echo "<h2>As variaveis A e B sao identicas? $result</h2>";

    ?>

<div>
    <h3 style="color: white";>Código Fonte:</h3>

    <img src="css/identico.png" alt="Código Fonte">
</div>

</body>
</html>