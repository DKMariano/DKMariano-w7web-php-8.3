<?php 
// Inicia a sessão para acessar as mensagens de erro
session_start();

// Verifica se há uma mensagem de erro na sessão
$error = isset($_SESSION['login_error']) ? $_SESSION['login_error']: "";

// Limpa a variável de erro para que a mensagem não fique persistente
unset($_SESSION['login_error']);

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro no login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        if(!empty($error)){
            echo $error;
        }     
        ?>
    <button onclick="history.back();">Voltar</button>
    </main>
</body>
</html>