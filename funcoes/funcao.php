<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Função</title>
    <style>
        *{
            margin: 0;
        }
    </style>
</head>
<body>
    
    <div>
        <?php
            /*require A declaração require é idêntica a include exceto que em caso de falha também
            produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele parará o script
            enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue.*/

            #include_once se o código do arquivo já foi incluído, não o fará novamente
            
            /*require_once A declaração require_once é idêntica a requirem exceto que o
            PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá
            (exigirá) novamente.*/

            include "funcoes.php";
            echo "<h2>Testando novas funções</h2>";
            ola();

            familyName("Jesher", "1994");
            familyName("Priscilla", "1988");
            familyName("Emilly", "2016");
            familyName("Sophia", "2012");
        ?>
    </div>

</body>
</html>