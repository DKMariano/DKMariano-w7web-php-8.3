<?php 

$login = "";
$senha = "";

if(!empty($_POST['login']) &&!empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);
}

    echo "Sei login é: $login e a senha: $senha";

?>