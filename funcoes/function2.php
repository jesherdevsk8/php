<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Referencia</title>
</head>
<body>
    
    <div>
        <?php
           #function teste(&$x) <- o valor de A vai ser passado como referencia para o valor de X 
            function teste(&$x){
                $x *= 2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 8;
            teste($a);
            echo "<p>O valor de A é $a</p>";
        ?>
    </div>

</body>
</html>