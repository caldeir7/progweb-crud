<?php
    require "conecta.php";
function lerProdutos($conexao){
    // $sql = 'SELECT id,nome,preco,quantidade,descricao, fabricante_id FROM produtos ORDER BY nome';

    $sql = 'SELECT produtos.id, produtos.nome AS produto, produtos.preco, produtos.quantidade, produtos.descricao, fabricantes.nome AS fabricante FROM produtos INNER JOIN fabricantes ON fabricante_id = fabricantes.id ORDER BY produto';

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $produtos = [];

    while($produto = mysqli_fetch_assoc($query)){
        array_push($produtos, $produto);
    }

    return $produtos;
}   

// Inicio função inserirProduto
function inserirProduto($conexao, $nome, $preco, $quantidade, $descricao, $fabricanteID){
    // 1) Montar String do comando SQL 
    $sql = "INSERT INTO produtos(nome, preco,quantidade,descricao, fabricante_id) VALUES('$nome', $preco, $quantidade, '$descricao', $fabricanteID)";
    // 2) Executa o comando
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}

//Fim Função inserirProduto

// Inicio função excluirFabricante
function excluirProduto($conexao, $id){
    $sql = "DELETE FROM produtos WHERE id = '$id' ";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Fim função excluirProduto


// Inicio função atualizarProduto
function atualizarProduto($conexao, $id, $nome ,$preco, $quantidade, $descricao, $fabricanteID){
    $sql = "UPDATE produtos SET nome  = '$nome', preco = '$preco', quantidade = '$quantidade', descricao = '$descricao', fabricante_id = '$fabricanteID' FROM produtos  WHERE id = '$id' ";
    // UPDATE, DELECT INSERT não precisa de retorno pois nao retorna dado nenhum
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


}

// Fim função atualizarProduto

//Inicio lerUmProduto
function lerUmProduto($conexao, $id){
    $sql = "SELECT id, nome, preco, quantidade, descricao, fabricante_id FROM produtos WHERE id = '$id'";
    
    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($query);


}
// Fim lerUmProduto