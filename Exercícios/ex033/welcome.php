
<!-- Deve exibir "Bem Vindo [LOGIN DO USUÁRIO] se ele estiver logado
Deve ter a opção de sair. -->

<?php 

session_start();

if(empty($_SESSION['usuario'])){
    header('Location: index.php');
    exit();
}
$cor = '#F0FFFF';
if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];

    if($tema == 'escuro'){
        $cor = '#4F4F4F';
    }else{
        $cor = '#F0F8FF';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Secreta</title>
</head>
<body style="background-color:<?= $cor ?>">
    <?php
    echo"Bem vindo, ".$_SESSION['usuario']."!";
    echo "<br/>";
    echo '<a href="logout.php"> Sair</a>';
    ?>

</body>
</html>


    

