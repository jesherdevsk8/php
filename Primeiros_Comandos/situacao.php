<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Situação do Aluno</title>
</head>
<body>
    
<h1>Aprovado ou Reprovado?</h1>

    <?php
       
        $bim01 = $_GET["n1"];
        $bim02 = $_GET["n2"];
        $bim03 = $_GET["n3"];
        $bim04 = $_GET["n4"];
        
        $media = ($bim01+$bim02+$bim03+$bim04)/4;
        $situacao = ($media<5?"REPROVADO":"APROVADO");

        echo "<h2> Sua média é $media </h2>";
        echo "<h2> Sua situação é $situacao </h2>";
        #echo "<h2> Sua situação é " . (($media<5)?"REPROVADO":"APROVADO");        

    ?>

<div>
    <h3 style="color: white";>Código Fonte:</h3>

    <img src="css/media.png" alt="Código Fonte">
</div>

</body>
</html>