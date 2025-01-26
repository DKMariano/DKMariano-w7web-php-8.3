<?php 

if(!empty($_GET['login'] &&!empty($_GET['senha']))){
    $login = $_GET['login'];
    $senha = $_GET['senha'];
}

    echo "Sei login é: $login e a senha: $senha";

?>