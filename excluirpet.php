<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de dados - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>
<?php
include('menucolab.html');
include('conexao.php');
?>
<h1>Exclusão de dados</h1>
<hr>


<div class="container-conteudo">
<?php

$idpet = $_GET['idpet'];

echo "Deletando os dados do pet cujo ID é <b>".$idpet."</b></br></br>";

    $query = "DELETE FROM pet WHERE idpet = '$idpet'";

    $apaga = $conectadb -> query($query);

        if ($apaga) {
            echo "<b>Os dados foram deletados com sucesso.</b><br>
            <a href='pesquisarpet.php'>Nova pesquisa</a> | <a href='listageralpet.php'>Voltar à Lista Geral de Pets</a>";
        } else {
            echo "Erro ao excluir dados do funcionário.<br>
            <a href='pesquisarpet.php'>Nova pesquisa</a>";
        }

?>
</div>
</body>
</html>