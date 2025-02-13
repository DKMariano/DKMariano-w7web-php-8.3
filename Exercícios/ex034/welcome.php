<?php
/**
 * Deve exibir "Bem vindo [LOGIN DO USUARIO] se ele estiver logado".
 * Deve ter a opção de sair.
 * 
 */

 session_start();

// Verifica se o usuário está logado, caso contrário, redireciona para a página de login
 if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();

}

$usuario = $_SESSION['usuario'] ;

$mensagem = $_SESSION['mensagem'];

$tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'claro';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página secreta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body  class="<?= $tema?>">
    <main>
        <form action="logout.php" method="post">
            <?= $mensagem;?>
            <button type="submit">Logout</button>
        </form>
    </main>

    
</body>