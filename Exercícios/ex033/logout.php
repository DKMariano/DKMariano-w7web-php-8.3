<?php 
/**
 * Deve excluir o cookie e a session
 */
session_start();

unset($_SESSION['usuario']);

setcookie('tema', '', time() - 3600, "/");

header('Location: index.php');
exit();
?>