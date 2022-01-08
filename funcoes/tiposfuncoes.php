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

            echo "<p style='color: red;'> <strong>Usando printf</strong> </p><br>";
            $prod = "leite";
            $preco = "4.5";
            #echo "O $prod está custando R$ ". number_format($preco,2); 
            printf("O %s está custando R$ %.2f", $prod, $preco);
            echo "<hr><br>";

            echo "<p style='color: red;'> <strong>Usando print_r - recomendado usar para testes</strong> </p><br>";
            $valor[0] = 4;
            $valor[1] = 8;
            $valor[2] = 2;
            print_r($valor);

            echo "<hr>";
            echo "<br><span style='color: red;'><strong>Segundo array - (vetores)</strong></span><br>";
            $valor2 = array (4.2,2,4,5,6,7);
            #print_r($valor2);
            #var_dump($valor2); #esse parâmetro mostra tamanho do array e se é int ou double etc .....
            var_export($valor2); #esse parâmetro mostra ex            

            echo "<p style='color: red;'><br> <strong>Testando a função wordwrap</strong> </p>";
            $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum laboriosam nisi necessitatibus consequatur dolor";
            #$rs = wordwrap($text, 10); # dessa forma muda somento no código fonte da página
            #$rs = wordwrap($text, 10); # dessa naneira somente faz as quebras no código fonte da pagina
            #$rs = wordwrap($text, 10, "<br>"); # faz a quebra somente na parte visual do site e mantém
            $rs = wordwrap($text, 10, "<br>", false); # com parâmetro "true" ele quebra linha mesmo se a palavra não acabou
            echo "$rs";

            echo "<p style='color: red;'><br> <strong>Função strlen</strong> </p>";
            $m = "Mãe";
            echo "$m <br>";
            $tamanho = mb_strlen("$m","utf-8"); #Usando mb_strlen($string, "utf-8"); Resolvê-se o problema de contar a mais strings com acentuação.
            $tamanho2 = strlen($m); #strlen conta tbm caracteres de acentuação como letras 
            var_export($tamanho); echo " <- com mb_strlen(var)";
            echo "<br>";
            var_export($tamanho2); echo " <- com strlen(var)";

            echo "<p style='color: red;'><br> <strong>Função trim</strong> </p>";
            $nome = "  Ronaldo Nazário dos Santos   "; # contém 2 espaços no inicio e tres no final da frase
            echo "$nome <br>";
            var_export(mb_strlen("$nome", "utf-8")); # conta a quantidade de caracteres de uma string, incluindo os espaços
            $novo = trim($nome);
            #$novo = ltrim($nome); # ignora os espaços da esquerda da string
            #$novo = rtrim($nome); # ignora os espaços da direira da string
            echo "<br>";
            var_export(mb_strlen("$novo", "utf-8"));
            
            echo "<p style='color: red;'><br> <strong>Função str_word_count<br><span style='color: green;'>Usado para contar a quantidade de palavras</span></strong> </p>";
            $frase = "EU ESTOU ESTUDANDO PHP PARA MEU TCC";
            echo "<p> <br><span style='color: blue;'>frase na variável</span> <br></p> ". $frase;
            $cont = str_word_count($frase, 0);
            print($cont);

            echo "<br>";
            echo "<p style='color: red;'><strong><br>Posições da string no array</strong></p>";
            $cont1 = str_word_count($frase, 2);
            print_r($cont1);
            
            echo "<p style='color: red;'><strong><br>Função Explode</strong></p>";
            $vetor = explode(" ",$frase); #Separa palavras em vetores [defino separador]
            print_r($vetor);

            echo "<p style='color: red;'><strong><br>Função str_split</strong></p>";
            $word = "Maria";
            $vetor1 = str_split($word);
            print_r($vetor1); #Cria um vetor para cada caractere de um texto.

            echo "<p style='color: red;'><strong><br>Função implode</strong></p>";
            $v[1] = "Jesher";
            $v[2] = "Minelli";
            $v[3] = "Alves";
            $full = implode("-", $v); # ou join() - 0 implode() Junta valores de um array com separador personalizado.
            print($full);

            echo "<p style='color: red;'><strong><br>Função ord() e chr()</strong></p>";
            $letra = "C";
            $cod = ord($letra); #Cada caractere é um código do teclado.
            $cod1 = chr(74); #Cada código do teclado é um caractere. Inverso ord().
            print("A letra $letra tem o código $cod");
            echo "<br>";
            print("O letra de código 74 é $cod1");

        ?>
    </div>

</body>
</html>