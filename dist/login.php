<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login_regis.css">
</head>
<body>
    
    <div class="login-container">
        <h2>Login</h2>
        <form action="processar_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email ou Nome de Usuário</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
            <div class="error-message">
                <!-- Mensagem de erro será exibida aqui, se necessário -->
            </div>
            <p>Ainda não tem uma conta? <a href="register.php">Registre-se</a></p>
        </form>
    </div>

    
</body>
</html>