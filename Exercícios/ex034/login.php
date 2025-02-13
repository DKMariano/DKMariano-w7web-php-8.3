<?php
/**
 * Usuário válido: admin
 * senha válida: admin
 */

 // Inicia a sessão para armazenar dados do usuário
session_start();

// Verifica se os campos foram preenchidos
if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    // Sanitiza os dados para evitar ataques XSS
    $usuario = htmlspecialchars($_POST['usuario']);
    $password = htmlspecialchars($_POST['password']);
    // Define o tema claro como o padrão
    $tema = isset($_POST['tema'])? htmlspecialchars($_POST['tema']) : 'claro'; 


    // Verifica se as credenciais são válidas
    if($usuario == 'admin' && $password == 'admin'){
        
        // Armazena o nome do usuário na sessão
        $_SESSION['usuario'] = $usuario;
          
       // Armazena a mensagem de boas vindas na sessão
        $_SESSION['mensagem'] = "<p>Olá, <strong>$usuario</strong>!</p><p>Seja bem vindes!</p>";

        if(!empty($_POST['tema'])){
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }
        
        // Redireciona para a página de boas-vindas
        header('Location: welcome.php');

        // Garante que o script pare a execução após o redirecionamento
        exit(); 

    }else{
       // Armazena a mensagem de erro na sessão
       $_SESSION['login_error'] = "<p><strong>Usuário</strong> e/ou <strong>senha</strong> incorreto(s).</p>";
       header('Location:login_error.php');
       exit(); 
    }
}else{
    $_SESSION['login_error'] = "<p>Por favor, <strong>preencha seus dados.</strong></p>";
    header('Location:login_error.php');
    exit(); 
}
    