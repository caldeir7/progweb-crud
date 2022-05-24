<?php
require '../includes/funcoes-produtos.php';
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    //Chamando a função que ira retorna os dados de um fabricante
    excluirProduto($conexao, $id);
    header("location:listar.php");
