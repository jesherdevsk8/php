<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Vetores e matrizes</title>
    <style>
        *{
            margin: 0;
        }
        h3{
            color: green;
            text-align: center;
        }
        
    </style>
</head>
<body>
    
    <div>
        <pre>
            <?php
                echo "<br>";

                $v = array("A", "B", "C", "D", "E");
                $v[] = "F"; # ACRESCENTEI MAIS UM ITEM NO ARRAY
                array_push($v, "G");
                #array_pop($v); # APAGA O ÚLTIMO ITEM DO ARRAY
                array_unshift($v, "j"); # ACRESCENTA UM ITEM NO INICIO DO ARRAY
                array_shift($v); # ELIMINA O PRIMEIRO ITEM DO ARRAY
                print_r($v);
                echo "<span style='color: red;'>com total de ". count($v) ." elementos</span> <br>";
            
                echo "<br>";
                var_dump($v);
                echo "<span style='color: red;'>com total de ". count($v) ." elementos</span> <br><br>";

                $num = array(6,3,4,5,2,1,7,8,9);
                #sort($num); #ORDENA ARRAY
                rsort($num); #ORDENA ARRAY DE FORMA DECRESCENTE
                #asort($num); #ORDENA MAS NÃO MUDA A POSIÇÃO NO ARRAY
                #arsort($num); #ORDENA ARRAY DE FORMA DECRESCENTE MAS NAO MUDA A POSIÇÃO
                print_r($num);

                echo "<br>";
                $chave = array(2=>"B",5=>"G",0=>"A",4=>"T",1=>"I",3=>"S");
                #ksort($chave); #ORDENA SOMENTE OS ÍNDICES
                krsort($chave); #ORDENA OS ÍNDICES EM MODO REVERSO
                print_r($chave);
                
            ?>
        </pre>
    </div>

</body>
</html>