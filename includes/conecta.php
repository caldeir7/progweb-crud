<?php

// Parâmetros do servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_guilhermes";

// Conectando ao servidor

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitando o suporte ao charset utf8

mysqli_set_charset($conexao, "UTF-8");

// teste

// if($conexao){
//     echo "Tudo ok!";
// }