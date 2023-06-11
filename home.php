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

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Storage Mercancia - Home</title>

  <style>
    /* Estilos CSS */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background: url(../front/img/bkghm.jpg);
        background-size: cover;
      }
      
      header {
        backdrop-filter: blur(10px);
        padding: 20px;
        padding-left: 50px;
        font-weight: bold;
        font-style: oblique;
      }
      
      nav {
        background-color: transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      
      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      
      nav ul li {
        margin-right: 10px;
      }
      
      nav ul li a {
        text-decoration: none;
        color: lightyellow;
        padding: 25px;
      }
      
      .dropdown {
        position: relative;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background: transparent;
        border: transparent;
        border-radius: 3px;
        padding: 5px;
      }
      
      .dropdown-content a{
        align-items: center;
        color: #fff;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown a:hover{
        background-color: transparent;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      .rectangle {
        border: 0px transparent;
        background-color: rgba(1, 7, 21, 0.5);
        padding-bottom: 20px 10px;
      }


      
      .title {
        text-align: center;
        color: #fff;
        margin-top: 250px;
        text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);
      }
      
      .subtitle {
        text-align: center;
        color: #fff;
        text-shadow: -2px -2px 0 #000, 1px -1px 0 lightblue, -1px 1px 0 #000, 1px 1px 0 #000;
        margin-top: 10px;
      }
  </style>

</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="../home.php">Home</a></li>
        <li class="dropdown">
          <a href="/fornecedores-listar.php">Fornecedores</a>
          <div class="dropdown-content">
            <div class="rectangle">
              <a href="../fornecedores-criar.php">Cadastrar</a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <a href="/produtos-listar.php">Produtos</a>
          <div class="dropdown-content">
            <div class="rectangle">
              <a href="../cadastrar-produtos.php">Cadastrar</a>
            </div>
          </div>
        </li>
        <li><a href="../admin/logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="container">
    <div class="title">
      <h1>Bem-vindo ao Storage Mercancia</h1>
    </div>
  
    <div class="subtitle">
      <h2>Aqui, você encontrará soluções eficientes para gerenciar sua loja, <br> garantindo o controle e a organização de suas mercadorias</h2>
    </div>
  </div>
</body>
</html>
