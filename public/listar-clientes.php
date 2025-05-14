<?php
// Conectar ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'db_restaurante');

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Buscar usuários
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="style-listar.css">
</head>
<body>
    <header>
        
    <h1>Lista de Clientes</h1> 
    <table border="1"> 
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>
                            <a href='altera-cliente.php?id=" . $row['id'] . "'>Editar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário encontrado</td></tr>";
        }
        ?>
        
        
    </table>
    <div> <a href="index-adm.html"><button title="Voltar ao início">Voltar</button></a></div>
        
   
</body>
</html>

<?php
$conn->close();
?>
