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


function inserirFabricante($conexao, $nome){
    // 1) Montar String do comando SQL 
    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
    // 2) Executa o comando
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}

function excluirFabricante($conexao, $nome){
    $sql = "DELETE FROM fabricantes WHERE nome = ('$nome')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function atualizarFabricante($conexao, $nome){
    $sql = "UPDATE fabricantes SET('$nome')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}