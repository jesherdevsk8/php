<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
    <style>
         h1 {
        margin-top: 50px;
        margin-left: 100px;
        }
        h2 {
            margin-left: 100px;
            color: #00FA9A;
            text-shadow: 1px 1px 1px #000;
        }
        h3 {
            margin-left: 100px;
            color: #ff0000;
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
    <h1>Tipos de variaveis</h1>

    <?php
        $num = 27; 
        $nome = Jesher;
        $num01 = 5;
        $num02 = 3;
        $result=$num01+$num02;
        
            echo "<h2> Olá Mundo </h2> <p> Eu tenho $num anos e me chamo $nome </p>";
            echo "<h3> A soma de $num01 + $num02 = $result </h3> ";
        
    ?>

</body>
</html>