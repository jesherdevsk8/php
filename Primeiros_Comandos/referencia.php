<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Referência</title>
</head>
<body>
    
<h1>Exercícios de Referência</h1>

    <?php
        $a = 6;
        $b = $a;
        $b += 4;
        echo "<h2> A variável A vale $a </h2>";
        echo "<h2> A variável B vale $a que vai ser igual a B + 4 = $b </h2>";
        
        $c = 3;
        $d = &$c;
        $c += 5;
        echo "<h2> A variável C vale $c </h2>";
        echo "<h2> A variável D tbm passa valer $c pois está sendo referênciada com &$C</h2>";
    ?>

<h1><br>Código Fonte:</h1>

<div>
    <img src="css/referencia.png" alt="Referência1">
</div>

</body>
</html>