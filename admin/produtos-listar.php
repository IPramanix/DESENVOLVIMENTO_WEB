<?php
  require('conexao.php');
  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']);
    unset($_SESSION['usuario']);
    header('Location: ../index.php');
  }
  $logado = $_SESSION['usuario'];
  $logado = $_SESSION['usuario'];

  $sql = "SELECT * FROM produtos ORDER BY id_produto ASC";

  $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Listar Produtos - Storage Mercancia</title>
  

  <style>
    /* Estilos CSS */
    *{
      margin: 0px;
      padding: 0px;
    }

    body {
      font-family: Arial, sans-serif;
      padding: 0;
      background: url(../front/img/bcklstprd.jpg)no-repeat;
      background-size: cover;
    }
    
    .tbl{
      border: 2px solid #4c5e91;
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
      color: #000;
      font-weight: bolder;
      width: 100%;
      border-collapse: collapse;
      align-items: center;
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
    border: 2px solid #4c5e91;
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
    <h1>Listar Produtos</h1>
    
    <table class="tbl">
      <thead>
        <tr>
          <th>ID</th>
          <th>Codigo</th>
          <th>Descricão</th>
          <th>Estoque Inicial</th>
          <th>Estoque Atual</th>
          <th>Preco Compra</th>
          <th>Preco Venda</th>
          <th>Fornecedor</th>
          <th>          </th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($user_data = mysqli_fetch_assoc($result))
          {
            echo "<tr>";
            echo "<td>".$user_data['id_produto']."</td>";
            echo "<td>".$user_data['codigo']."</td>";
            echo "<td>".$user_data['descricao']."</td>";
            echo "<td>".$user_data['estoqueInicial']."</td>";
            echo "<td>".$user_data['estoqueAtual']."</td>";
            echo "<td>".$user_data['precoCompra']."</td>";
            echo "<td>".$user_data['precoVenda']."</td>";
            echo "<td>".$user_data['id_fornecedor']."</td>";
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
