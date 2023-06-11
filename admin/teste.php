<?php 
    require('conexao.php');

    $query = "SELECT id_fornecedor, nome_fornecedor FROM fornecedores ORDER BY id_fornecedor ASC";
    $resultado = $mysqli->query($query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="joga.php" method="POST">
    <div>Selecione um Fornecedor: <select>
        <option value="">SELECIONE SEU FORNECEDOR</option>
        <option value="">Selecione um Fornecedor</option>
        <?php WHILE($row = $resultado->fetch_assoc()) { ?>
          <option value="<?php echo $row['id_fornecedor']; ?>
          "><?php echo $row['nome_fornecedor']; ?></option>
          <?php } ?>  
    </select>

    </div>
    </form>
</body>
</html>