<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <a href="index-adm.html"><button title="Voltar ao início">Voltar</button></a>
        <h1 class="text-center">SISTEMA RESTAURANTE</h1>
        
</header>
<?php
// Conectar ao banco de dados

$host = 'mysql-vital-db.onrender.com'; // host fornecido pela Render
$user = 'dbvital';
$pass = '1235';
$dbname = 'dbrestaurante_vital';
$port = 5432;

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    $sql = "UPDATE usuarios SET 
            nome='$nome', 
            descricao='$decricao',
            categoria='$categoria', 
            preco='$preco'
        WHERE id=$id";

    

    if ($resultado) {
        echo "Alteração atualizada com sucesso.";
    } else {
        echo "Erro ao atualizar cadastro: " . mysqli_error($conn); // Corrigido para exibir a mensagem de erro correta
    }
}

$conn->close();

?>

</body>
</html>