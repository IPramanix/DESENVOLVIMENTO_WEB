<?php
  if(isset($_POST['submit']))
  {
    include_once('conexao.php');

    $nome_fornecedor = $_POST['nome_fornecedor'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "INSERT INTO fornecedores(nome_fornecedor,cnpj,telefone,endereco,email) 
    VALUES ('$nome_fornecedor', '$cnpj', '$telefone', '$endereco', '$email')");

    header('Location: ../admin/fornecedores-listar.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cadastrar fornecedor</title>

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
  
  .register-button {
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

  <form action="../home.php">
    <div class="back-background">
      <Button type="submit">Voltar</Button>
    </div>
  </form>
  

  <div class="container">
    <h1>Cadastrar fornecedor</h1>
    
    <form action="../admin/fornecedores-criar.php" method="POST">
      
      <label for="nome_fornecedor">Nome:</label>
      <input type="text" id="nome_fornecedor" name="nome_fornecedor" required>
      
      <label for="cnpj">CNPJ:</label>
      <input type="text" id="cnpj" name="cnpj" required>
      
      <label for="telefone">Número:</label>
      <input type="text" id="telefone" name="telefone" required>
      
      <label for="endereco">Endereço:</label>
      <input type="text" id="endereco" name="endereco" required>
      
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      
      <button type="submit" name="submit" id="submit" class="register-button">Cadastrar</button>
    </form>
  </div>

  <div class="final"><h6>Obrigado por usar nosso site!</h6></div>
</body>
</html>
