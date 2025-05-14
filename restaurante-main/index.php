<?php

$servername = "restaurante"; // seu servidor de banco de dados
$username = "dbvital"; // seu usuário do banco de dados
$password = "1235"; // sua senha do banco de dados
$dbname = "dbrestaurante_vf89"; // nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);



// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta os produtos
$sql = "SELECT nome, descricao, categoria, foto, preco FROM pratos";
$result = $conn->query($sql);

// Verifica se a consulta foi bem-sucedida
if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores da Terra</title>
    <link rel="stylesheet" href="style-index.css">
</head>
<body>
<header>
    <h1 style="text-align: left;">Sabores da Terra</h1>
    <?php if (isset($_SESSION['usuario_nome'])): ?>
        <p>Olá, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>! <a href="logout.php">Sair</a></p>
    <?php else: ?>
        <p style="text-align: right;"><a href="login.php">Login</a>   <a href="register.php">Registrar</a>  <a href="login-adm.php">Menu de Operação</a></p>
    <?php endif; ?>
</header>

        <h2>Pratos Disponíveis</h2>
<div class="container">
    <?php
    if ($result->num_rows > 0) {
        // Saída de cada produto
        while($row = $result->fetch_assoc()) {
            $imagem_path = "img/" . $row["foto"]; // Altere "imagens/" para o caminho correto se necessário
            echo "<div class='produto'>";
            echo "<img class='imagem' src='" . $imagem_path . "' alt='" . $row["nome"] . "'>";
            echo "<h2>" . $row["nome"] . "</h2>";
            echo"<p> preço: " . $row["preco"] . "<p>";
            echo "<p>Categoria: " . $row["categoria"] . "</p>";
            echo "<p>Descrição: " . $row["descricao"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum produto encontrado.</p>";
    }
    ?>
    
</div>

<?php
$conn->close(); // Fecha a conexão
?>


</body>
</html>