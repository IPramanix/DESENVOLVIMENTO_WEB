<?php 

    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id_produto = $_POST['id_produto'];
        $codigo = $_POST['codigo'];
        $descricao = $_POST['descricao'];
        $estoqueInicial = $_POST['estoqueInicial'];
        $estoqueAtual = $_POST['estoqueAtual'];
        $precoCompra = $_POST['precoCompra'];
        $precoVenda = $_POST['precoVenda'];
        $id_fornecedor = $_POST['id_fornecedor'];
        
        $sqlupdate = "UPDATE produtos SET codigo='$codigo', descricao='$descricao', estoqueInicial='$estoqueInicial', estoqueAtual='$estoqueAtual', precoCompra='$precoCompra', precoVenda='$precoVenda', id_fornecedor='$id_fornecedor' 
        WHERE id_produto='$id_produto'";

        $result = $mysqli->query($sqlupdate);
    }
    header('Location: listar-produtos.php');

?>