<?php require_once "../exercicio-php-crud/src/funcoes-alunos.php";
$listaDeAlunos = lerAlunos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->

<table>
    <caption>Alunos</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>nome</th>
            <th>Primeira nota</th>
            <th>Segunda nota</th>
            <th>Média</th>
            <th>Situação</th>
            <th colspan="2">Operações</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach($listaDeAlunos as $alunos) { ?> 

        <tr>
            <td><?=$alunos['id']?></td>
            <td><?=$alunos['nome']?></td>
            <td><?=$alunos['primeiraNota']?></td>
            <td><?=$alunos['segundaNota']?></td>
            <td><?=$alunos['media']?></td>
            <td><?=$alunos['situacao']?></td>
            <td> <a href="atualizar.php?id=<?=$alunos['id']?>">atualizar</a></td>
            <td> <a href="excluir.php?id=<?=$alunos['id']?>" class="excluir">excluir</a></td>
        </tr>

        <?php
        }
        ?>
    </tbody>
</table>

<script src="../exercicio-php-crud/js/script.js"></script>


    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>