<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes - PetShop</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>

<h1>Cadastro de Clientes - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
?>

<div class="container-conteudo">
        <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

        <form action="cadastrocli2.php" method="post" autocomplete="false">

            <input type="text" name="cpfcli" autocomplete="off" placeholder="CPF"><br>
            <input type="text" name="nomecli" autocomplete="off" placeholder="Nome do cliente"><br>
            <input type="text" name="telefone" autocomplete="off" placeholder="Telefone"><br>
            <input type="email" name="email" autocomplete="off" placeholder="E-mail"><br>
            <input type="text" name="endereco" autocomplete="off" placeholder="Endereço"><br>
            <input type="password" name="senha" autocomplete="off" placeholder="Nova senha"><br>

            <input type="submit" value="Cadastrar cliente">

        </form>

        <hr>




        <footer>
            <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
        </footer>
    
</div>
</body>

</html>