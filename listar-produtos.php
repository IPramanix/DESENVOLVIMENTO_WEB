<?php
  session_start();

  include_once('../conexao.php');
  //print_r($_SESSION);
  if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']);
    unset($_SESSION['usuario']);
    header('Location: ../index.php');
  }
  $logado = $_SESSION['usuario'];

  $sql = "SELECT * FROM produtos ORDER BY id_produto ASC";

  $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Listar Produtos - Storage Mercancia</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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
              <a class='btn btn-sm' href='produtos-editar.php?id_produto=$user_data[id_produto]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 15 15'>
              <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
              <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
              </svg>
              </a>
              <a class='btn btn-sm' href='deleteprod.php?id_produto=$user_data[id_produto]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-backspace' viewBox='0 0 15 15'>
              <path d='M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z'/>
              <path d='M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z'/>
              </svg>
              </a>
            </td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
