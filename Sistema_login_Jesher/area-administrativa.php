<?php

// definição de timezone
date_default_timezone_set('America/Sao_Paulo');

// recebendo dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// simular informações do banco de dados
$email_bd = "jesher@etec.com.br";
$senha_bd = "123456";

// if(){

// }else{

// }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include('include/header.php'); ?>
    <title>Área Administrativa</title>
  </head>
  <body>
    
    <div class="container-fluid">

        <?php if( ($email == $email_bd) && ($senha == $senha_bd) ): ?>
            
            <!-- Login não realizado -->
            <?php include('include/area-administrativa.php'); ?>

        <?php else: ?>
            
            <!-- Login não realizado -->
            <?php include('include/erro-area-administrativa.php'); ?>

        <?php endif; ?>
        
        <?php include('include/footer.php'); ?>

    </div>
    <!-- Scripts JS -->
    <?php include('include/scripts.php'); ?>    
    
  </body>
</html>