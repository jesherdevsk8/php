<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Eleitor</title>
</head>
<body>
    
<h1>Vota ou Não Vota?</h1>

    <?php
       $ano = $_GET["ano"];
       $idade = 2021 - $ano;
       echo "<h2>Quem nasceu em $ano tem a idade de $idade anos.</h2>";
       $situacao = ($idade>=18 && $idade<65)?"É OBRIGATORIO":"NÃO É OBRIGATORIO";
       echo "<h2>Seu voto $situacao </h2>";
    ?>

<div>
    <h3 style="color: white";>Código Fonte:</h3>

    <img src="css/vota.png" alt="Código Fonte">
    <hr>
    <img src="css/ope-logicos.png" alt="Operadores Lógicos">
</div>

</body>
</html>