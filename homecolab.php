<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>

<?php
include('menucolab.html');
?>
    
    
    <header><h1>Administrativo - PETSHOP</h1></header>
    <hr>


<?php
    include('logado.php');
    include('conexao.php');
        echo "Bem-vindo, colaborador Matrícula $logado";
?>

</body>
</html>