<?php
$host = 'localhost';
$db = 'db_restaurante'; // Nome do seu banco de dados
$user = 'root'; // Usuário do banco de dados
$pass = ''; // Senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}

?>