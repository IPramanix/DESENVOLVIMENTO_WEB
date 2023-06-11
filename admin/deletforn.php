<?php
    if(!empty($_GET['id_fornecedor']))
    {
        include_once('conexao.php');
        
        $id_fornecedor = $_GET['id_fornecedor'];

        $sqlSelect = "SELECT * FROM  fornecedores WHERE id_fornecedor=$id_fornecedor";

        $result = $mysqli->query($sqlSelect);

            if($result->num_rows > 0)
            {
                $sqlDeletes = "DELETE FROM fornecedores WHERE id_fornecedor=$id_fornecedor";
                $resultDeletes = $mysqli->query($sqlDeletes);  
                
                header('Location: ../listar-fornecedores.php');
            }
    }
    else
    {
        header('Location: ../listar-fornecedores.php');
    }
    ?>