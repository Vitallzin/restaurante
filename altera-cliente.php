
  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" type="text/css" href="style-altera.css">
</head>
<body>
    <h1>Editar Usuário</h1>
    <div class="container"> 
     <div class ="box">
     <?php


$host = 'mysql-vital-db.onrender.com'; // host fornecido pela Render
$user = 'dbvital';
$pass = '1235';
$dbname = 'dbrestaurante_vital';
$port = 3306; // porta padrão do MySQL

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $id = isset($_POST['id'])? (int)$_POST['id'] : null;
    
    if ($id > 0) {
        $sql ="select * from usuarios where id=$id";
        $resultado = mysqli_query($conn,$sql) or die ("Não foi possível realizar a consulta");
    
        $linha = mysqli_fetch_array($resultado);
    
        if (!$linha) {
            die("Registro não encontrado.");
        }
    };
    ?>
     <form action="alterar-cliente.php" method="post">
     <div>
        <label for="id"></label></br>
        <input type="number" id="id" name="id" value="<?php 
                    echo isset($linha['id']) ? htmlspecialchars($linha['id']) : '' ?>" placeholder="ID:"  />
      </div>
        <div>
        <label for="nome"></label></br>
        <input type="text" id="nome" name="nome" value="<?php 
                    echo isset($linha['Nome']) ? htmlspecialchars($linha['Nome']) : '' ?>" placeholder="Nome:" required />
      </div>
      <div>
        <label for="Categoria"></label></br>
        <input type="email" id="email" name="email" value="<?php echo isset($linha['email']) ? htmlspecialchars($linha['email']) : ''; ?>" placeholder="E-mail:" required />
      </div>
      <div>
        <label for="senha"></label></br>
        <input type="password" id="senha" name="senha" value="<?php echo isset($linha['senha']) ? htmlspecialchars($linha['senha']) : ''; ?>"placeholder="Nova Senha:" required />
      </div>
     </div>
    </div>
    <div>
    <button type="submit" value="Atualizar Usuário">Atualizar</button>
    <button type="button" onclick="excluirLeitor()">Excluir</button>
    </div>   
</body>
</html>
<a href="listar-clientes.php"><button title="Voltar ao início">Voltar</button></a>

  <script>
    function excluirLeitor() {
      if (confirm('Tem certeza que deseja excluir este cadastro?')) {
        // Aqui você pode adicionar a lógica para excluir o leitor, talvez redirecionando para uma página PHP
        window.location.href = 'exclui-leitor.php?codleitor=' + document.getElementById('codleitor').value;
      }
    }
  </script>

