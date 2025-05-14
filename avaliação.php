<?php
// Configurações do banco de dados
$host = 'localhost'; // ou o endereço do seu servidor
$db = 'db_restaurante';
$user = 'root'; // substitua pelo seu usuário do MySQL
$pass = ''; // substitua pela sua senha do MySQL

// Conecta ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);


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
// Consulta para obter as avaliações
$sql = "SELECT * FROM avaliacoes ORDER BY data_avaliacao DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Avaliações de Pratos</title>
    <link rel="stylesheet" href="style-listar.css">

</head>
<body>
    <h1>Avaliações de Pratos</h1>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Prato</th>
                <th>Nome</th>
                <th>Avaliação</th>
                <th>Comentário</th>
                <th>Data da Avaliação</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['id_usuario']); ?></td>
                    <td><?php echo htmlspecialchars($row['id_prato']);echo"<p>estrelas</p>" ?></td>
                    <td><?php echo $row['estrelas']; ?></td>
                    <td><?php echo htmlspecialchars($row['comentario']); ?></td>
                    <td><?php echo $row['data_avaliacao']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <div> <a href="index-adm.html"><button title="Voltar ao início">Voltar</button></a></div>
    <?php else: ?>
        <p>Nenhuma avaliação encontrada.</p>
    <?php endif; ?>

    <?php
    // Fecha a conexão
    $conn->close();
    ?>