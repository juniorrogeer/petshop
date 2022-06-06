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


    <h1>Login - PETSHOP</h1>
    <hr>

    <?php
include('menucolab.html');
include('conexao.php');
?>
<div class="container-conteudo">
<?php

session_start();

if ((!isset ($_SESSION['matriculacolab']) == true) and (!isset ($_SESSION['senhacolab'] == true))) {

    unset ($_SESSION['matriculacolab']);
    unset ($_SESSION['senhacolab']);

    header('location: formlogincolab.html');
}

$colab = $_SESSION['matriculacolab'];

echo "Bem-vindo, $colab";

?>
</div>
</body>
</html>