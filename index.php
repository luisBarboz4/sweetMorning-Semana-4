<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sweet Morning - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>☕ Sweet Morning</h1>
        <h2>Login</h2>
        <form method="POST" action="valida_login.php">
            <label>E-mail:</label>
            <input type="email" name="email" required>
            
            <label>Senha:</label>
            <input type="password" name="senha" required>
            
            <button type="submit">Entrar</button>
        </form>
        <p><a href="cadastro.php">Não tem conta? Cadastre-se</a></p>
        <p><a href="admin.php">Login de Administrador</a></p>
    </div>
</body>
</html>
