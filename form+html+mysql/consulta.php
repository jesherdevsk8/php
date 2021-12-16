<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consulta</title>
</head>
<body>

    <div>
        <?php
            # Criando tabela para consulta de dados
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>NOME</th>";
            echo "<th>SOBRENOME</th>";
            echo "<th>SEXO</th>";
            echo "</tr>";

            # Criando banco de dados
            $strcon = mysqli_connect("localhost", "jesher", "123", "teste") or die ("Erro ao conectar o banco");
            $sql = "Select * From Cadastro";
            $result = mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");

            # Obtendo os dados por meio de um loop while
            while ($registro = mysqli_fetch_array($result)){
                $nome = $registro["NomeCliente"];
                $sobrenome = $registro["SobrenomeCliente"];
                $sexo = $registro["Sexo"];

                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$sobrenome."</td>";
                echo "<td>".$sexo."</td>";
                echo "</tr>";
            }
            mysqli_close("$strcon");
            echo "</table>";
        ?>
        
    </div>
    
</body>
</html>