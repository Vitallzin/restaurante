<?php
include"db_restaurante.php";
if (!$conn){
    die ("Falha na conexão: " . mysqli_connect_error());}

//Recebe os dados
$nome = $_POST[`Nome`];
$descricao = $_POST['Descricao'];
$categoria = $_POST['Categoria'];
$foto = $_POST['Foto'];
$preco = $_POST['Preco'];

//cria variaveis para inserir o registro
$sql = "INSERT INTO `pratos`(`nome`, `descricao`, `categoria`, `foto`, `preco`) VALUES
('$nome','$descricao','$categoria','$foto','$preco')";


//executa a consulta sql. Se falhar, exibe erro do banco de dados;
$query = mysqli_query (mysql: $conn,query : $sql) or
die(mysqli_error(mysql: $conn));

if ($query){
    echo"<center>";
    echo "<h1>Registro inserido com sucesso!</h1></br>";
    echo "<a href='index-adm.html'><button tittle = 'Home Page'>Voltar</button></a>";
    echo "</center>" ;
} 
else {
    echo"<center>";
    echo "<h1>Erro ao inserir registro!</h1></br>";
    echo "<a href='index.php'><button tittle = 'Home Page'>Voltar</button></a>";
    echo "</center>";
}
