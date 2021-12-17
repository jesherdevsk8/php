<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lógicaphp</title>
</head>
<body>

    <div>
        <?php
              $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
              $idade = date("Y") - $ano; # Y em maíusculo para captar o ano completo ex: 1994
              echo "Voce nasceu em $ano, tem $idade anos de idade &#x1F5C4 <br>";

              if ($idade < 16) {
                $votar = "não vota";                
              }              
              elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $votar = "tem o voto opcional";
              }
              else {
                $votar = "tem o voto obrigatório";
              }

              echo "e você $votar.";
        ?>
    </div>
    
</body>
</html>