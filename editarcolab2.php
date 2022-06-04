<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Colaboradores - PETSHOP</title>
</head>

<body>


<h1>Editar dados de Colaboradores - PETSHOP</h1>
<hr>

<?php
include('menucolab.html');
include('conexao.php');

$matriculacolab = $_POST['matriculacolab'];
$nomecolab = $_POST['nomecolab'];
$cpfcolab = $_POST['cpfcolab'];
$senhacolab = $_POST['senhacolab'];

$sql = mysqli_query($conectadb, "UPDATE colaborador SET matriculacolab = '$nomepet' WHERE matriculacolab = '$matriculacolab'");

$sql2 = mysqli_query($conectadb, "UPDATE colaborador SET nomecolab = '$especie' WHERE matriculacolab = '$matriculacolab'");

$sql3 = mysqli_query($conectadb, "UPDATE colaborador SET cpfcolab = '$raca' WHERE matriculacolab = '$matriculacolab'");

$sql4 = mysqli_query($conectadb, "UPDATE colaborador SET senhacolab = '$cpfcli' WHERE matriculacolab = '$matriculacolab'");

    if ($sql) {
        echo "Os dados do(a) colaborador(a) ".$nome." foram alterados com sucesso! <br><a href='listageralcli.php'>Voltar à Lista Geral de Colaboradores</p>";
    } else {
        echo "Ocorreu um erro ao alterar os dados do(a) colaborador(a). Tente novamente.";
    }

?>

</body>
</html>