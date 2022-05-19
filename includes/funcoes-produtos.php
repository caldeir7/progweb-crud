<?php
    require "conecta.php";
function lerProdutos($conexao){
    $sql = 'SELECT id,nome,preco,quantidade,descricao, fabricante_id FROM produtos ORDER BY nome INNER JOIN fabricantes  ON produtos.fabricante_id = fabricantes.nome';

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $produtos = [];

    while($produto = mysqli_fetch_assoc($query)){
        array_push($produtos, $produto);
    }

    return $produtos;
}   



// Inicio função inserirProduto
function inserirProduto($conexao, $nome){
    // 1) Montar String do comando SQL 
    $sql = "";
    // 2) Executa o comando
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}

//Fim Função inserirProduto

// Inicio função excluirFabricante
function excluirProduto($conexao, $id){
    $sql = "";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Fim função excluirProduto


// Inicio função atualizarProduto
function atualizarProduto($conexao, $id, $nome){
    $sql = "";
    // UPDATE, DELECT INSERT não precisa de retorno pois nao retorna dado nenhum
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


}

// Fim função atualizarProduto

//Inicio lerUmProduto
function lerUmProduto($conexao, $id){
    $sql = "";
    
    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($query);


}
// Fim lerUmProduto