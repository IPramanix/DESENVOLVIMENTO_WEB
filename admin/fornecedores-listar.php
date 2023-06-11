<?php
  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']);
    unset($_SESSION['usuario']);
    header('Location: ../index.php');
  }
  $logado = $_SESSION['usuario'];

  $sql = "SELECT * FROM fornecedores ORDER BY id_fornecedor ASC";

  $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Listar Fornecedores</title>

  <style>
    /* Estilos CSS */
    *{
      margin: 3px;
    }

    body {
      font-family: Arial, sans-serif;
      padding: 0;
      background: url(../front/img/bkglstfcn.jpg);
      background-size: cover;
    }
    
    .tbl{
      border: 2px solid #000;
      backdrop-filter: blur(5px);
    }

    .container {
      width: 800px;
      margin: 100px auto;
    }
    
    h1 {
      text-align: start;
      font-weight: bold;
      color: #000;
    }
    
    table {
      color: rgba(25, 1, 1, 5);
      font-weight: bolder;
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }
    
    .actions {
      text-align: right;
    }
    
    .actions button {
      border: none;
      background: none;
      cursor: pointer;
    }

    button{
    width: 100px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #27191c;
    background: transparent;
    color: #fff;
    cursor: pointer;
    overflow: hidden;
  }

  button:hover{
    border-color: #fff;
    border-radius: 25px;
    background: #27191c;
    transition: .3s ease;
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
    <h1>Listar Fornecedores</h1>
    <table class="tbl">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CNPJ</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereco</th>
          <th>...</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          while($user_data = mysqli_fetch_assoc($result))
          {
            echo "<tr>";
            echo "<td>".$user_data['id_fornecedor']."</td>";
            echo "<td>".$user_data['nome_fornecedor']."</td>";
            echo "<td>".$user_data['cnpj']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['endereco']."</td>";
            echo "<td>

            </td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

