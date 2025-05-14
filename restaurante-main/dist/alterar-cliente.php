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
$conn = new mysqli('localhost', 'root', '', 'db_restaurante');

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Você pode querer hash a senha antes de armazená-la

    $sql = "UPDATE usuarios SET 
            nome='$nome', 
            email='$email',
            senha='$senha' 
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