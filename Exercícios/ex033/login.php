<?php 
/**
 * Usuário válido: admin
 * senha válida: admin
 * 
 */
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['password'])){
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    if($usuario == 'admin' &&  $senha == 'admin'){
        $_SESSION['usuario'] = $usuario;
        if(!empty($_POST['tema'])) {
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }

        header('Location: welcome.php');
        exit();
    }else{
        echo 'Usuário ou senha incorreto. ';
        echo '<a href="logout.php"> Tente novamente. </a>';
    }
} else {
    echo 'Preencha todos os dados. ';
    echo '<a href="logout.php"> Sair</a>';
}

?>