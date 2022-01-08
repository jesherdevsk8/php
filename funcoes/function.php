<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rotinas</title>
</head>
<body>
    
    <div>
        <?php
            function soma ($a, $b, $c, $e) {
                #return $a + $b + $c + $e; ou
                return $s = $a + $b + $c + $e;
            }
            $num1 = isset($_GET["num1"])?$_GET["num1"]:["0"];
            $num2 = isset($_GET["num2"])?$_GET["num2"]:["0"];
            $num3 = isset($_GET["num3"])?$_GET["num3"]:["0"];
            $num4 = isset($_GET["num4"])?$_GET["num4"]:["0"];
            $r = soma($num1, $num2, $num3, $num4);
            echo "A soma entre $num1 + $num2 + $num3 + $num4 = $r";

        ?>
        <a href="index.html"><strong style="color: red;"><big>Voltar</big></strong></a>
    </div>

</body>
</html>