<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Geral de Pets - PETSHOP</title>
</head>

<body>
<h1>Lista Geral de Pets - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');

?>

<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM pet");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $idpet = $dado['idpet'];
        $nomepet = $dado['nomepet'];
        $especie = $dado['especie'];
        $raca = $dado['raca'];
        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];

        echo "MATRÍCULA: $idpet<br>";
        echo "NOME: $nomepet<br>";
        echo "CPF: $especie<br>";
        echo "MATRÍCULA: $raca<br>";
        echo "NOME: $cpfcli<br>";
        echo "CPF: $nomecli<br>";

        echo "<a href='editarpet.php?idpet=".$dado['idpet']."'>Editar dados</a>";
        echo " | <a href='excluirpet.php?idpet=".$dado['idpet']."'>Excluir dados</a>";
        echo "<hr>";
        

    }

?>

<footer>
<p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>

</body>
</html>