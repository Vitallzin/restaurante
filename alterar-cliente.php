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