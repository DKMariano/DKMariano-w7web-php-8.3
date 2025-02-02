<?php 

if (!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    $mensagem = "";

    if($login =='ADMIN' && $senha == 'ADMIN'){
        $mensagem = 'Login efetuado com sucesso';    
    } else{
        $mensagem = 'Falha no login';
    }
} else {
    $mensagem = 'Preencha todos os campos';
}   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Digite o login" value="<?= $login ?>"/>
        <input type="password" name="senha" placeholder="Digite a senha" value="<?= $senha ?? '' ?>"/>
        <input type="submit" value="Enviar"/>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
             echo $mensagem;
        }
        ?>

    </form>
</body>
</html>