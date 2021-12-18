<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tabuada</title>
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:0;
            #echo "valor recebido foi $num";

            echo "<span style='color: red;'><strong>Mostrando a Tabuada do $num</strong></span>";
            for ($cont = 0; $cont <= 10; $cont++ ){                
                $result = $num * $cont;
                echo "<br>$num x $cont = $result ";               
            }
            
            // Uma outra forma de fazer
            /*echo "<span style='color: red;'><strong>Mostrando a Tabuada do $num</strong></span>";
            $cont = 0;
            do {
                $r = $num * $cont;
                echo "<br>$num x $cont = $r";
                $cont++;
            }while ($cont <= 10);*/
            ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>