<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Sabores da Terra</title>
    <link rel="stylesheet" href="style-login_regis.css">
</head>
<body>
    <div class="registrer-container">
        <h2>Registro</h2>
        <form action="processar_register.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Registrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.html">Faça login</a></p>
    </div>
</body>
</html>