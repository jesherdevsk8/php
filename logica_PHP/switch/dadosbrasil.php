<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Switch</title>
</head>
<body>

    <div>
        <?php
            $estados = $_GET["estados"];

            switch ($estados){
                case 'Pará':
                case 'Tocantins':
                case 'Acre':
                case 'Amazonas';
                case 'Roraima';
                case 'Amapá';
                case 'Rondonia';
                    $regiao = "Você Mora no Norte do Brasil";
                    break;

                case 'Goiás';
                case 'Mato Grosso';
                case 'Mato Grosso do Sul';
                    $regiao = "Você Mora no Centro-Oeste do Brasil";
                    break;
                
                case 'Distrito Federal';
                    $regiao = "Você Mora na Capital do Brasil";
                    break;

                case 'Rio de Janeiro';
                case 'São Paulo';
                case 'Espirito Santo';
                case 'Minas Gerais';
                    $regiao = "Você Mora no Sudeste do Brasil";
                    break;

                case 'Paraná';
                case 'Santa Catarina';
                case 'Rio Grande do Sul';
                    $regiao = "Você Mora no Sul do Brasil ";
                    break;
                
                case 'Piaui';
                case 'Maranhão';
                case 'Pernambuco';
                case 'Bahia';
                case 'Sergipe';
                case 'Ceará';
                case 'Alagoas';
                case 'Paraiba';
                case 'Rio Grande do Norte';
                    $regiao = "Você Mora no Nordeste do Brasil";
                    break;

                default:
                    $regiao = "REGIÃO NÃO INFORMADA";
                    break;
            }

            echo "Parabéns $regiao";
        ?>
        <a href="javascript:history.go(-1)"><em><big>Voltar</big></em></a>
    </div>
    
</body>
</html>