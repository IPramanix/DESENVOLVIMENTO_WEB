<?php
  if(isset($_POST['submit']))
  {
    include_once('conexao.php');
    
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $estoqueInicial = $_POST['estoqueInicial'];
    $estoqueAtual = $_POST['estoqueAtual'];
    $precoCompra = $_POST['precoCompra'];
    $precoVenda = $_POST['precoVenda'];
    $id_fornecedor = $_POST['id_fornecedor'];

    $aresult = mysqli_query($mysqli, "INSERT INTO produtos(codigo, descricao, estoqueInicial, estoqueAtual, precoCompra, precoVenda, id_fornecedor) 
    VALUES ('$codigo', '$descricao', '$estoqueInicial', '$estoqueAtual', '$precoCompra', '$precoVenda', '$id_fornecedor')");

    header('Location: ../listar-produtos.php');

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Cadastrar Produto</title>

  <style>
    /* Estilos CSS */
*{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

body{
    background: url(../front/img/Frncdbck.jpg);
    background-size: cover;
    backdrop-filter: blur(5px);
    z-index: 10;
  }

  button{
    width: 100px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #551bb3;
    background: transparent;
    color: #fff;
    cursor: pointer;
    overflow: hidden;
  }

  button:hover{
    border-color: #fff;
    border-radius: 25px;
    background: #551bb3;
    transition: .3s ease;
  }

  .container {
    width: 400px;
    margin: 100px auto;
    padding: 30px;
    background: url(../front/img/prdtbkg.jpg);
    background-size: cover;
    border-radius: 15px 0px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  }
  
  h1 {
    text-align: center;
    color: #fff;
    font-weight: bold;
    padding-bottom: 30px;
  }
  
  label {
    display: block;
    margin-top: 10px;
    color: #fff;
  }
  
  input[type="text"],
  input[type="number"],
  input[type="email"] {
    width: 95%;
    padding: 8px;
    border: 1px solid #551bb3;
    border-radius: 3px;
  }

    input[type="email"],
    input[type="submit"] {
      padding: 8px;
      margin-bottom: 10px;
    }
  
  .register-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #551bb3;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
  }

  h6{
    color: rgba(209, 194, 194, 0.1);
  }
  </style>

</head>
<body>
  
  <form action="../home.php">
    <div class="back-background">
      <Button type="submit">Voltar</Button>
    </div>
  </form>
  
    
  <div class="container">
    <h1>Cadastrar Produto</h1>
    
    <form action="../cadastrar-produtos.php" method="POST">
      
      <label for="codigo">Código:</label>
      <input type="number" id="codigo" name="codigo" required>
      
      <label for="descricao">Descrição:</label>
      <input type="text" id="descricao" name="descricao" required>
      
      <label for="estoqueInicial">Estoque Inicial:</label>
      <input type="number" id="estoqueInicial" name="estoqueInicial" required>
      
      <label for="estoqueAtual">Estoque Atual:</label>
      <input type="number" id="estoqueAtual" name="estoqueAtual" required>
      
      <label for="precoCompra">Preço de Compra:</label>
      <input type="number" id="precoCompra" name="precoCompra" required>
      
      <label for="precoVenda">Preço de Venda:</label>
      <input type="number" id="precoVenda" name="precoVenda" required>
      
        <?php 
        include('conexao.php');
      
        $query = "SELECT id_fornecedor, nome_fornecedor FROM fornecedores ORDER BY id_fornecedor ASC";
        $resultado = $mysqli->query($query);
        ?>

      <label for="nome_fornecedor">Fornecedor: <select id="id_fornecedor" name="id_fornecedor" required>
        <option value="">Selecione um Fornecedor</option>
        <?php WHILE($row = $resultado->fetch_assoc()) { ?>
          <option value="<?php echo $row['id_fornecedor']; ?>
          "><?php echo $row['nome_fornecedor']; ?></option>
          <?php } ?>       
      </select>
      

      <br>
      <button type="submit" name="submit" id="submit" class="register-button">Cadastrar</button>
    </form>
  </div>

  <div class="final"><h6>Obrigado por usar nosso site!</h6></div>
  
</body>
</html>

