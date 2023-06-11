<?php
  if(!empty($_GET['id_produto']))
  {
    include_once('conexao.php');
    
    $id_produto = $_GET['id_produto'];

    $sqlSelects = "SELECT * FROM  produtos WHERE id_produto=$id_produto";

    $result = $mysqli->query($sqlSelects);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result))
      {
        $codigo = $user_data['codigo'];
        $descricao = $user_data['descricao'];
        $estoqueInicial = $user_data['estoqueInicial'];
        $estoqueAtual = $user_data['estoqueAtual'];
        $precoCompra = $user_data['precoCompra'];
        $precoVenda = $user_data['precoVenda'];
        $id_fornecedor = $user_data['id_fornecedor'];
      }      
    }
    else
    {
      header('Location: ../listar-produtos.php');
    }
  }  
  else
  {

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Editar Produto</title>

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
  
  <form action="../StorageMercancia/listar-produtos.php">
    <div class="back-background">
      <Button type="submit">Voltar</Button>
    </div>
  </form>
  
    
  <div class="container">
    <h1>Editar Produto</h1>
    
    <form action="../StorageMercancia/admin/salveEdit.php" method="POST">
      <input type="hidden" name="id_produto" value="<?php echo $id_produto ?>">

      <label for="codigo">Código:</label>
      <input type="number" id="codigo" name="codigo" value="<?php echo $codigo ?>" required>
      
      <label for="descricao">Descrição:</label>
      <input type="text" id="descricao" name="descricao" value="<?php echo $descricao ?>" required>
      
      <label for="estoqueInicial">Estoque Inicial:</label>
      <input type="number" id="estoqueInicial" name="estoqueInicial" value="<?php echo $estoqueInicial ?>" required>
      
      <label for="estoqueAtual">Estoque Atual:</label>
      <input type="number" id="estoqueAtual" name="estoqueAtual" value="<?php echo $estoqueAtual ?>" required>
      
      <label for="precoCompra">Preço de Compra:</label>
      <input type="number" id="precoCompra" name="precoCompra" value="<?php echo $precoCompra ?>" required>
      
      <label for="precoVenda">Preço de Venda:</label>
      <input type="number" id="precoVenda" name="precoVenda" value="<?php echo $precoVenda ?>" required>
      
        <?php 
        include('conexao.php');
      
        $query = "SELECT id_fornecedor, nome_fornecedor FROM fornecedores ORDER BY id_fornecedor ASC";
        $resultado = $mysqli->query($query);
        ?>

      <label for="nome_fornecedor">Fornecedor: <select id="id_fornecedor" name="id_fornecedor" required>
        <option value="<?php echo $id_fornecedor ?>">Selecione um Fornecedor</option>
        <?php WHILE($row = $resultado->fetch_assoc()) { ?>
          <option value="<?php echo $row['id_fornecedor']; ?>
          "><?php echo $row['nome_fornecedor']; ?></option>
          <?php } ?>       
      </select>
      

      <br>
      <button type="submit" name="update" id="update" class="register-button">Atualizar</button>
    </form>
  </div>

  <div class="final"><h6>Obrigado por usar nosso site!</h6></div>
  
</body>
</html>

