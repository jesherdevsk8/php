<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rotina 2</title>
</head>
<body>
    
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }
            $r = soma(4,4,4,4);
            echo "A soma dos valores é $r";
        ?>
    </div>

</body>
</html>