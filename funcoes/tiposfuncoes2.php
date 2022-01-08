<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Usando Funções</title>
    <style>
        * {
            margin: 0;
        }
    </style>
</head>
<body>
    
    <div>
        <?php

            $nome = "JESHER MINELLI ALVES";
            $nome1 = "jesher minelli alves";
            $nome2 = "jesher MINELLI ALVES";
            $nome3 = "jesher MINELLI ALVES";
            $frase = "Estou aprendendo PHP para meu TCC <br> pretendo ser pro em PHP";

            echo "Meu nome é ". strtolower($nome); # strtolower() Letras para minúsculas
            echo "<br> Meu nome é ". strtoupper($nome1); # strtoupper() Letras para maiúsculas
            echo "<br> Meu nome é ". ucfirst(strtolower($nome2)); #ucfirst() Primeira letra em maiúscula.
            echo "<br> Meu nome é ". ucwords(strtolower($nome3)); #ucwords() Primeira letra de cada palavra em maiúscula.
            echo "<br> Meu nome é ". strrev(strtoupper($nome1)); #strrev() Exibe a string ao contrário

            $pos = stripos($frase, "tcc"); # stripos() Ignora maiúsculas ou minúsculas.
            #$pos = strpos($frase, "TCC");
            echo "<br><br> $frase <br>A string TCC foi encontrada na posição $pos";

            $sub = substr($frase, 0, 20); # Fatiamento de string.
            $sub1 = substr($frase, -42, 14);
            print("<br><br> <span style='color: #004080;'>Usando a função substr(frase, 0, 20)</span> <br>$sub");
            print("<br><br> <span style='color: #004080;'>Usando a função substr(frase, -42, 14)</span> <br>$sub1");

            $cont = substr_count($frase, "PHP"); #Contagem de aparições de uma palavra.
            print("<br><br> A palavra PHP foi encontrado $cont vezes");

            $new = strtolower(str_pad($nome, 30, "_", STR_PAD_BOTH)); #String em comprimento e espaçador personalizados
            # STR_PAD_RIGHT - STR_PAD_LEFT
            print("<br><br> O nome $new é muito daora!");

            $new2 = str_repeat("$nome", 2); # Repete string.
            print("<br><br> Frase foi gerada 2 vezes <br> $new2 ");
            echo "<br>";
            print(str_repeat("-", 10));
            echo "<br>";

            $nome4 = "Priscilla Faria Ferreira";
            echo "<span style='color: #004080;'>Mundando $nome4 para</span> ";
            $novonome = str_ireplace("ferreira", "Minelli", $nome4); #str_ireplace() Ignorando maiúsculas ou minúsculas
            #str_replace() <- Substitui uma string por outra.
            print("<br><span style='color: red;'>$novonome</span>");
            echo "<br> com str_ireplace para ignorar Case sensitivity";


        ?>
    </div>

</body>
</html>