<?php
require '../includes/funcoes-fabricantes.php';
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    //Chamando a função que ira retorna os dados de um fabricante
    excluirFabricante($conexao, $id);
    header("location:listar.php");


