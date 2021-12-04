<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Operadores de Atribuição</h1>

    <?php
        $result = 0;
        $result2 = 0;

        $preco = $_GET["p"];  // $_GET["p"] para receber o valor na URL
        echo "<h2> O preço recebido é R$ " . number_format($preco, 2, ",", ".");
        $result = $preco + (($preco * 10) / 100); //maneira antiga de fazer a lógica
        echo "<h2> Preço com 10% de aumento será R$ " . number_format($result, 2, ",", ".");
        $result2 = $preco - (($preco * 10) / 100); //maneira antiga de fazer a lógica
        echo "<h2> Preço com 10% de desconto será R$ " . number_format($result2, 2, ",", ".");
    
        //maneira nova em php utilizando operadores de atribuição
        //$preco = $_GET["p"];
        //echo "<h2> O preço recebido é R$ " . number_format($preco, 2, ",", ".");
        //$preco += $preco * 10 / 100;
        //echo "<h2> Preço com 10% de aumento será R$ " . number_format($preco, 2, ",", ".");
        //$preco -= $preco * 10 / 100);
        //echo "<h2> Preço com 10% de desconto será R$ " . number_format($preco, 2, ",", ".");
        
    ?>

    <h1><br>Exemplos:</h1>

    <div>
        <img src="css/operadores-atribuição.png" alt="Operadores de Atribuição">
    </div>
    
</body>
</html>