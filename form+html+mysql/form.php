<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>

    <div>
        <?php
            $nome = $_POST["NomeCliente"];
            $sobrenome = $_POST["SobrenomeCliente"];
            $sexo = $_POST["Sexo"];

            $strcon = mysqli_connect("localhost","jesher","123","teste");
            if (!$strcon) {
                die ("Connection failed ". mysqli_connect_error());
            }
            #echo "Connection Successfully <br>" ;
            $sql = "INSERT INTO Cadastro VALUES";
            $sql .= "('$nome', '$sobrenome', '$sexo')";
            mysqli_query($strcon,$sql) or die ("Erro ao tentar Cadastrar");
            mysqli_close($strcon);
            echo "Cliente cadastrado com Sucesso!!!";
        ?>

        <a href="index.html">Voltar</a>
    </div>
    
</body>
</html>