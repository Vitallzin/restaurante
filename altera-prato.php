  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" type="text/css" href="style-altera.css">
</head>
<body>
    <h1>Editar Prato</h1>
    <div class="container"> 
     <div class ="box">
     <?php
 // Conectar ao banco de dados

$host = 'mysql-vital-db.onrender.com'; // host fornecido pela Render
$user = 'dbvital';
$pass = '1235';
$dbname = 'dbrestaurante_vital';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
    $id = isset($_POST['id'])? (int)$_POST['id'] : null;
    
    if ($id > 0) {
        $sql ="select * from pratos where id=$id";
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
        <label for="descricao"></label></br>
        <input type="password" id="descricao" name="descricao" value="<?php echo isset($linha['descricao']) ? htmlspecialchars($linha['descricao']) : ''; ?>"placeholder="Descrição:" required />
      </div>
      <div>
        <label for="email"></label></br>
        <label for="categoria">Categoria:</label><br>
            <select type="categoria" id="categoria" name="categoria" value="<?php echo isset($linha['categoria']) ? htmlspecialchars($linha['categoria']) : ''; ?>" placeholder="Categoria:" required />>
                <option value="entrada">Entrada</option>
                <option value="prato_principal">Prato Principal</option>
                <option value="sobremesa">Sobremesa</option>
            </select>
      </div>
      <div>
        <label for="preco"></label></br>
        <input type="number" id="preco" name="preco" value="<?php echo isset($linha['preco']) ? htmlspecialchars($linha['preco']) : ''; ?>"placeholder="Preço::" required />
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