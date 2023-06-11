<?php 

    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id_fornecedor = $_POST['id_fornecedor'];
        $nome_fornecedor = $_POST['nome_fornecedor'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        
        $sqlUpdate = "UPDATE fornecedores SET nome_fornecedor='$nome_fornecedor', cnpj='$cnpj', telefone='$telefone', endereco='$endereco', email='$email' 
        WHERE id_fornecedor='$id_fornecedor'";

        $result = $mysqli->query($sqlUpdate);
    }
    header('Location: listar-fornecedores.php');

?>