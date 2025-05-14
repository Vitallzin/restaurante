<?php
session_start(); // Inicia a sessão

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina as credenciais de login
    $usuario_correto = "admin"; // Substitua pelo seu usuário
    $senha_correta = "123"; // Substitua pela sua senha

    // Obtém os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica as credenciais
    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $_SESSION['usuario_logado'] = $usuario; // Armazena o usuário na sessão
        header("Location: adm.php"); // Redireciona para a página de administração
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Área de Administração</title>
    <link rel="stylesheet" href="style-altera.css">
</head>
<body>
<h1>Login - Área de Administração</h1>
    <div class="container">
        <div class="box">
            
            <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
            <form action="" method="POST">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit" value="Entrar">Entrar</button>
                <a href="index.php"><button title="Voltar ao início">Voltar</button></a></div>  
                
            </form>
        </div>
    </div>
    
</body>
</html>