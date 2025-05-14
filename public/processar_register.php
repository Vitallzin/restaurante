<?php
require 'db_restaurante.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    if ($stmt->execute([$nome, $email, $senha])) {
        echo "Registro realizado com sucesso! <a href='login.php'>Faça login</a>";
    } else {
        echo "Erro ao registrar. Tente novamente.";
    }
}
?>