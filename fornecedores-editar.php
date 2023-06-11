<?php
  if(!empty($_GET['id_fornecedor']))
  {
    include_once('conexao.php');

    $id_fornecedor = $_GET['id_fornecedor'];

    $sqlSelect = "SELECT * FROM  fornecedores WHERE id_fornecedor=$id_fornecedor";

    $result = $mysqli->query($sqlSelect);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result))
      {
        $nome_fornecedor = $user_data['nome_fornecedor'];
        $cnpj = $user_data['cnpj'];
        $telefone = $user_data['telefone'];
        $endereco = $user_data['endereco'];
        $email = $user_data['email'];
      }      
    }
    else
    {
      header('Location: ../fornecedores-listar.php');
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

  <title>Editar fornecedor</title>

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
    background: url(../front/img/container.jpg);
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
  
  #update {
    display: block;
    width: 94%;
    height: 40px;
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

  <form action="../admin/fornecedores-listar.php">
    <div class="back-background">
      <Button type="submit">Voltar</Button>
    </div>
  </form>
  

  <div class="container">
    <h1>Editar fornecedor</h1>
    
    <form action="../admin/salvar-edit.php" method="POST">
      <input type="hidden" name="id_fornecedor" value="<?php echo $id_fornecedor ?>">

      <label for="nome_fornecedor">Nome:</label>
      <input type="text" id="nome_fornecedor" name="nome_fornecedor" value="<?php echo $nome_fornecedor ?>" required>
      
      <label for="cnpj">CNPJ:</label>
      <input type="text" id="cnpj" name="cnpj" value="<?php echo $cnpj ?>" required>
      
      <label for="telefone">Número:</label>
      <input type="text" id="telefone" name="telefone" value="<?php echo $telefone ?>" required>
      
      <label for="endereco">Endereço:</label>
      <input type="text" id="endereco" name="endereco" value="<?php echo $endereco ?>" required>
      
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="<?php echo $email ?>" required>
      <br><br>
      
      <input type="submit" name="update" id="update" value="Atualizar">
   </form>
  </div>

  <div class="final"><h6>Obrigado por usar nosso site!</h6></div>
</body>
</html>
