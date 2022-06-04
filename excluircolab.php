<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de dados - PETSHOP</title>
</head>

<body>
<h1>Exclusão de dados - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
include('conexao.php');

$matricula = $_GET['matriculacolab'];

echo "Matrícula do colaborador: ".$matricula."</b></br></br>";

    $query = "DELETE FROM colaborador WHERE matriculacolab = '$matricula'";

    $apaga = $conectadb -> query($query);

        if ($apaga) {
            echo "<b>Os dados vinculados a matrícula ".$matricula." foram deletados com sucesso.</b><br>
            <a href='pesquisarcolab.php'>Nova pesquisa</a><br>";
        } else {
            echo "Erro ao excluir dados do colaborador.<br>
            <a href='pesquisarcolab.php'>Nova pesquisa</a>";
        }

?>

    </body>
    </html>