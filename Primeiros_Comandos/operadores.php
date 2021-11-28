<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <style>
        h1 {
            margin-top: 50px;
            margin-left: 100px;
            color: #ff0000;
            text-shadow: 1px 1px 1px #000;
        }
        h2 {
            margin-left: 100px;
            color: #6959CD;
            text-shadow: 1px 1px 1px #000;
        }
        p {
            margin-left: 100px;
            color: #00FA9A;
            text-shadow: 1px 1px 1px #000;
        }
    </style>
</head>
<body>
    <h1>Operações Aritimeticas</h1>
        <?php
            //$num1 = 25;
            //$num2 = 5;

            $num1 = $_GET["a"]; // parametro para receber o valor "a" na url
            $num2 = $_GET["b"]; // parametro para receber o valor "b" na url
            // Exemplo:
            // http://localhost/aula01/operadores.php?a=25&b=5

                echo "<h2> Valores recebidos são: $num1 e $num2</h2>";
                $media = ($num1 + $num2) / 2;
                echo "<h2> A soma de $num1 + $num2 = ". ($num1+$num2);
                echo "<h2> O resultado de $num1 x $num2 = ". ($num1*$num2);
                echo "<h2> O resultado de $num1 - $num2 = ". ($num1-$num2);
                echo "<h2> O resultado de $num1 ÷ $num2 = ". ($num1/$num2);
                echo "<h2> O modulo é ". ($num1%$num2); // a sobra da divisão = modulo
                echo "<h2> A média é ". ($media);

        ?>
</body>
</html>