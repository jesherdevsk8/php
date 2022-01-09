<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Vetores e matrizes</title>
</head>
<body>
    
    <div>
        <pre>
            <?php
                $array = array(3,5,8,2);
                print_r($array);

                echo "<br>";
                $range = range(0,10,2);
                print_r($range);

                $age = array("Jesher"=>"27", "Prih"=>"33", "Nick"=>"14", "Emy"=>"5", "Sophia"=>"8");
                echo "<br>";
                foreach($age as $x => $x_valor){
                    echo "Nome ". $x . ", Idade ". $x_valor . ".";
                    echo "<br>";
                }

                $cad = array( "Nome" => "Jesher",
                              "Idade" => "27",
                              "Peso" => "96Kg",
                );
                $cad["Não Fuma"] = false;
                echo "<br>";
                foreach($cad as $k => $c){
                    echo "$k: $c <br>";
                }
            ?>
        </pre>
    </div>

</body>
</html>