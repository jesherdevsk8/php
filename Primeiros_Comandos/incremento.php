<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Incremento</title>
</head>
<body>
    
<h1>Exercício de incremento e decremento</h1>

    <?php
        /* Esse exercicio
       pretende demonstrar o uso
       de operadores de incremento
       e decremento */
       $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
       echo "<h2>O ano atual é $atual e o próximo ano é " . ++$atual;
    ?>

<h1><br>Exemplos de operadores de incremento e decremento:</h1>

<div>
    <img src="css/operadores-incremento.png" alt="Operadores de Incremento e Decremento">
</div>

</body>
</html>