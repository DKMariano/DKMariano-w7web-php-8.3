<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'claro';
?>

<body>
    <main>
        <form method="post" action="login.php">
            <label for="username">Usuario:</label>
            <input type="text" name="usuario"><br>
            <label for="password">Senha:</label>
            <input type="password" name="password"><br>
            <label for="tema">Tema Preferido: </label>
            <select name="tema">
                <option value="escuro">escuro</option>
                <option value="claro">claro</option>
            </select> <br>
            <input type="submit" value="Login">
        </form>
    </main>
</body>

</html>