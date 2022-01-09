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
        <h3>Vetores de Vetores = Matrizes</h3>
        <pre>
            <?php
                $cad = array(   array("Arroz","2 unidades", "13 reais"),
                                array("Feijão","4 unidades", "4 reais"),
                                array("Pão","10 unidades", "1 real"),
                                array("Leite","3 unidades", "5 reais")                
                );

                for ($linha = 0; $linha < 4; $linha++){
                    echo "<p><strong>Item número $linha da lista</strong></p>";
                    echo "<ul>";
                        for ($coluna = 0; $coluna < 3; $coluna++){
                        echo "<li>" .$cad[$linha][$coluna]."</li>";
                        }
                    echo "</ul>";
                }
            ?>
        </pre>
    </div>

</body>
</html>