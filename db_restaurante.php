<?php
$servername = "restaurante"; // seu servidor de banco de dados
$username = "dbvital"; // seu usuário do banco de dados
$password = "1235"; // sua senha do banco de dados
$dbname = "dbrestaurante_vf89"; // nome do seu banco de dados


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}

?>