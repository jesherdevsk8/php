<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>while2</title>    
</head>
<body>

    <div>   
    <?php
        $in = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $fim = isset($_GET["fim"])?$_GET["fim"]:0;
        $inc = isset($_GET["cont"])?$_GET["cont"]:0;

        if ($in < $fim){
            while ($in <= $fim){
                echo "Resultado $in <br>";
                $in += $inc;
            }
        }
        elseif ($in > $fim){
            while ($in >= $fim){
                echo "Resultado $in <br>";
                $in -= $inc;
            }
        }
        else{
            echo "Inicio e fim tem os mesmos valores";
        }
        ?>
    </div>
    
</body>
</html>