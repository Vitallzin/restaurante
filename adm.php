<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado'])) {
    header("Location: login-adm.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Administração</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem-vindo à Área de Administração!</h1>
    <p>Você está logado como: <?php echo htmlspecialchars($_SESSION['usuario_logado']); ?></p>
    <a href="index-adm.html"><button title="Voltar ao início">Entrar no Sistema</button></a></div>
    <a href="logoutt.php"><button title="Voltar ao início">Voltar</button></a></div>

</body>
</html>