<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login - Storage Mercancia</title>

  <style>
    /* Estilos CSS */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background: url(../front/img/loginbkg.jpg);
        background-size: cover;
    }

    .container {
        width: 400px;
        margin: 100px auto;
        padding: 50px;
        background: transparent;
        backdrop-filter: blur(8px);
        border-radius: 10px;
        box-shadow: 0 10px 5px rgba(0, 0, 0, 0.3);
    }

    h1 {
        color: #fff;
        text-align: center;
        font-weight: bold;
        padding-bottom: 40px;
    }

    label {
        color: #fff;
        display: block;
        margin-top: 20px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #404467;
        border-radius: 5px 0px;
        background: #fffaac;
    }

    .remember-me {
        color: #fff;
        margin-top: 10px;
        margin-bottom: 15px;
    }

    .login-button {
        display: block;
        width: 100%;
        margin-top: 30px;
        padding: 10px;
        background-color: #404467;
        color: #fff;
        border: none;
        border-radius: 3px;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="/admin/protecao.php" method="POST"> 
      <label for="usuario">Usuário:</label>
      <input type="text" id="usuario" name="usuario" required>
      
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
      
      <div class="remember-me">
        <input type="checkbox" id="remember" name="remember">Lembre-me
      </div>
      
      <input type="submit" value="Entrar" name="submit" class="login-button">
    </form>
  </div>
</body>
</html>
