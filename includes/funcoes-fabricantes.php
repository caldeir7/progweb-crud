<?php
// funcoes-fabricantes.php

require "conecta.php";

function lerFabricantes($conexao){
    // 1) Montar String do comando SQL
    $sql = "SELECT id, nome FROM fabricantes";

    // 2) Executar o comando (mysqli_query) função de execução
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // 3) Criar um array vazio para receber os resultados
    $fabricantes = []; //ARRAYZAO  

    // 4) Loop iterando em cada resultado e a cada (fabricante) que for localizado, ele é acrescentado ao array fabricantes.
    while($fabricante = mysqli_fetch_assoc($resultado) ){
        //array_push Colocar dentro do Array(nome do array principal, nome do array individual)
        array_push($fabricantes, $fabricante);
    }

    // 5) Retornando para fora da função os fabricantes
    return $fabricantes; // Lista de fabricantes(Matriz)
}

// var_dump(lerFabricantes($conexao));

// Inicio 
function inserirFabricante($conexao, $nome){
    // 1) Montar String do comando SQL 
    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
    // 2) Executa o comando
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}

//Fim Função inserirfabricante

// Inicio função excluirFabricante
function excluirFabricante($conexao, $id){
    $sql = "DELETE FROM fabricantes WHERE id = $id";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Fim função excluirFabricante


// Inicio função atualizarFabricantes
function atualizarFabricantes($conexao, $id, $nome){
    $sql = "UPDATE fabricantes SET nome = '$nome' WHERE id = $id";
    // UPDATE, DELECT INSERT não precisa de retorno pois nao retorna dado nenhum
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


}

// Fim função atualizarFabricantes

function lerUmFabricante($conexao, $id){
    $sql = "SELECT id, nome FROM fabricantes WHERE id = $id";
    
    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($query);


}