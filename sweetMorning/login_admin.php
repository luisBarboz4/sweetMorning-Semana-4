<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Sweet Morning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="img/sweetmorning.jpeg" alt="Sweet Morning" class="logo">
        <h1>Sweet Morning</h1>
        <h2>Login Administrador</h2>
        <form method="POST" action="valida_admin.php">
            <label>E-mail:</label>
            <input type="email" name="email" required>
            
            <label>Senha:</label>
            <input type="password" name="senha" required>
            
             <a href="pagina_inicial.php" class="botao">Entrar</a>

        </form>
        <p><a href="login_usuario.php">Voltar ao Login Usuário</a></p>
    </div>
</body>
</html>

