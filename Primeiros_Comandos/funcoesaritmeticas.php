<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritimeticas em PHP</title>
    <style>
        h1 {
            margin-top: 50px;
            margin-left: 100px;
            color: #ff0000;
            text-shadow: 1px 1px 1px #000;
        }

        h2 {
            margin-left: 100px;
            color: #ff00ff;
            text-shadow: 1px 1px 1px #000;
        }

    </style>
</head>
<body>
    <h1>Funções Aritimeticas</h1>
    <?php
        //$num1 = 3;
        //$num2 = -6;

        $v1 = $_GET["x"];// parametro para receber o valor "x" na url
        $v2 = $_GET["y"];// parametro para receber o valor "y" na url
        // Exemplo:
        // http://localhost/aula01/operadores.php?x=3&y=-6     

        echo "<h2> Os valores Recebidos são: $v1 e $v2 </h2>";
        echo "<h2> O valor absoluto de $v2 é: ". abs($v2);
        echo "<h2> O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
        echo "<h2> A raiz de $v1 é: ". sqrt($v1);
        echo "<h2> O valor de $v2 arredondado é: ". round($v2); // ou ceil floor
        echo "<h2> A parte inteira de $v2 é: ". intval($v2);
        echo "<h2> O valor de $v1 em moeda é R$ ". number_format($v1,2,",",".");
    ?>
    
</body>
</html>