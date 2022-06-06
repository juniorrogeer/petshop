<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Geral de Clientes - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>
<h1>Lista Geral de Clientes - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
?>

<div class="container-conteudo">

<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM cliente");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];
        $telefone = $dado['telefone'];
        $email = $dado['email'];
        $endereco = $dado['endereco'];
        $senha = $dado['senha'];

        echo "CPF: $cpfcli<br>";
        echo "NOME: $nomecli<br>";
        echo "TELEFONE: $telefone<br>";
        echo "E-MAIL: $email<br>";
        echo "ENDEREÇO: $endereco<br>";
        echo "<a href='editarcli.php?cpfcli=".$dado['cpfcli']."'>Editar dados</a>";
        echo " | <a href='excluircli.php?cpfcli=".$dado['cpfcli']."'>Excluir dados</a>";
        echo "<hr>";
        echo "<hr>";

    }

?>

<footer>
<p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>
</div>
</body>
</html>