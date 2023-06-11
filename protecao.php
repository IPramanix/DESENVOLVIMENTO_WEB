<?php
  session_start();
  //print_r($_REQUEST);
  if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
  {
      //acessa
      include_once('conexao.php');
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      //print_r('usuario: ' . $usuario);

      $sql = "SELECT * FROM users WHERE usuario = '$usuario' and senha = '$senha'";

      $result = $mysqli->query($sql);

      if(mysqli_num_rows($result) < 1)
      {
        unset($_SESSION['usuario']);
        unset($_SESSION['usuario']);
        header('Location: index.php');
      }
      else
      {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: home.php');
      }

  }
  else
  {
    //nao acessa
    header('Location: index.php');
  }


?>