<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Sweet Morning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form method="POST" action="salvar_usuario.php">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            
            <label>E-mail:</label>
            <input type="email" name="email" required>
            
            <label>Senha:</label>
            <input type="password" name="senha" required>
            
            <label>Celular:</label>
            <input type="text" name="celular" required>
            
            <button type="submit">Cadastrar</button>
            <!--adicionar junto do banco-->
        </form>
    </div>
</body>
</html>

