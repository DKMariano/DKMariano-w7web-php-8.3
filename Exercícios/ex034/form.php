<?php 
require 'functions.php';

$error = null;
$success = null;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Formulário</h1>
        <?php if(showError($error)) : ?>
        <p style="color: red;">
            <?= $error; ?>
        </p>        
        <?php endif; ?>

        <?php if(showError($success)) : ?>
        <p style="color: green;">
            <?= $success; ?>
        </p>
        <?php endif;?>
        <form action="">
            <input type="text" name="texto" placeholder="Digite o texto"/>
        </form>
    </main>
</body>
</html>