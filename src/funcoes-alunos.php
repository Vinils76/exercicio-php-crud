<?php

function lerAlunos(PDO $conexao):array {
    $sql = "SELECT id, nome, primeiraNota, segundaNota, media, situacao FROM alunos";
    try{
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die ("Erro: ".$erro->getMessage());
    }
    return $resultado;
};

function inserirAluno(PDO $conexao, string $nome, float $primeira, float $segunda, float $media, string $situacao):void {
    $sql = "INSERT INTO alunos(nome, primeiraNota, segundaNota, media, siuacao) VALUES (:nome, :primeira, :segunda, :media, :situacao)";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
        $consulta->bindParam(':segunda', $segunda, PDO::PARAM_STR);
        $consulta->bindParam(':media', $media, PDO::PARAM_STR);
        $consulta->bindParam(':situacao', $situacao, PDO::PARAM_STR);
        
        $consulta->execute();

    } catch (Exception $erro) {
        die ("Erro: ".$erro->getMessage());
    }
};

