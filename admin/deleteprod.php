<?php
    if(!empty($_GET['id_produto']))
    {
        include_once('conexao.php');
        
        $id_produto = $_GET['id_produto'];

        $sqlSelects = "SELECT * FROM  produtos WHERE id_produto=$id_produto";

        $result = $mysqli->query($sqlSelects);

            if($result->num_rows > 0)
            {
                $sqlDelete = "DELETE FROM produtos WHERE id_produto=$id_produto";
                $resultDelete = $mysqli->query($sqlDelete);  
                
                header('Location: ../listar-produtos.php');
            }
    }
    else
    {
        header('Location: ../listar-produtos.php');
    }
    ?>