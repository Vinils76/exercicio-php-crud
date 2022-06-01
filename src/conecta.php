<?php
/* SCRIPT DE CONEXÃO AO SERVIDOR BANCO DE DADOS */

//Parâmetros
$servidor = "localhost";
$usuario = "root";
$senha = ""; // String vazia somente no xampp
$banco = "crud_escola_antonio";

try {
// Criando a conexão com o MySQL (API/Driver de conexão)
$conexao = new PDO(
    "mysql:host=$servidor; dbname=$banco; charset=utf8",
    $usuario,
    $senha
);

// Habilita a verificação de erros no código
$conexao->setAttribute(
    PDO::ATTR_ERRMODE, //constante de erros em geral
    PDO::ERRMODE_EXCEPTION // constante de exceções de erro
);

} catch (Exception $erro){
    die("Erro: ".$erro->getMessage());
}

