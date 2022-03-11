<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC PHP</title>
    <style>
        body{
            background-color: black;
        }

        label ,h1{
            text-align: center;
            color: burlywood;
            margin-top: 280px ;
            
        }
        h2, p{
            text-align: center;
            color: burlywood;
            /* margin: 0; */
        }

        .formulario{
            text-align: center;
        }

        .btnCalc{
            background-color: rgb(87, 65, 36);
            color: #fff;
            padding: 5px 10px;
            font-size: 15px;
            height: bold;
        }      

    </style>
</head>
<body>
<h1>O Calculo do teu IMC é:</h1>
    <?php    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso/($altura ** 2);
    $imc = number_format($imc,1);

    $dicionario = [
        "18.5" => "Abaixo do peso",
        "24.9" => "Peso normal",
        "29.9" => "Sobrepeso",
        "34.9" => "Obesidade grau 1",
        "39.9" => "Obesidade grau 2",
        "40.0" => "Obesidade grau 3"
    ];

    foreach($dicionario as $key => $value){
        if($key < 40.0){
            if($imc <= $key){
                echo PHP_EOL."$value";
                break;
            }
        }else{
            echo PHP_EOL."$value";
        }
    }
    echo "<h2> $imc </h2>";   
    echo "<h2><span style='color: red;'>Você está com $value</span></h2>"
    
    ?>
    <a class="link" href='index.html'><p>Voltar</p></a>
</body>
</html>