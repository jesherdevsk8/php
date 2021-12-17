<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média Escolar</title>
</head>
<body>

    <div>
        <?php
              $nota1 = isset($_GET["nota01"])?$_GET["nota01"]:["Não informado"];
              $nota2 = isset($_GET["nota02"])?$_GET["nota02"]:["Não informado"];
              $nota3 = isset($_GET["nota03"])?$_GET["nota03"]:["Não informado"];
              $nota4 = isset($_GET["nota04"])?$_GET["nota04"]:["Não informado"];

              $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

              if ($media < 5){
                $situacao = "Reprovado";
              }
              elseif ($media >= 5 && $media < 7){
                $situacao = "Recuperação";
              }
              elseif ($media >= 7 && $media <= 10){
                $situacao = "Aprovado";
              }
              else{
                
              }
              
              echo "Sua média foi <strong style='color: red;'> $media </strong>, média arredondada para ". floor($media);
              echo "<br>Situação do aluno: <strong style='color: red;'> $situacao </strong>";

        ?>
    </div>
    
</body>
</html>