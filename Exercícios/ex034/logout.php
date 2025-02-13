<?php

/**
 * Deve excluir o cooki e a session
 */

// Inicia a sessão
session_start();

// Remove todas as variáveis da sessão
session_unset();

// Destrói a sessão completamente
session_destroy();

// Redireciona para a página de login
header("Location: index.php");

// Deleta o cookie "tema"
setcookie('tema', '', time() - 3600, "/");

// Garante que o script pare a execução após o redirecionamento
exit();
?>