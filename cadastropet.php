<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pets - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>

<h1>Cadastro de Pets - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
?>

<div class="container-conteudo">

    <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

        <form action="cadastropet2.php" method="post" autocomplete="false">

            <input type="text" name="idpet" autocomplete="off" placeholder="ID Pet"><br>
            <input type="text" name="nomepet" autocomplete="off" placeholder="Nome do pet"><br>
            <input type="text" name="especie" autocomplete="off" placeholder="Espécie"><br>
            <input type="text" name="raca" autocomplete="off" placeholder="Raça do pet"><br>
            <input type="text" name="cpfcli" autocomplete="off" placeholder="CPF do tutor"><br>
            <input type="text" name="nomecli" autocomplete="off" placeholder="Nome do tutor"><br>

            <input type="submit" value="Cadastrar pet">

        </form>

        <hr>


<hr>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
    </div>
</body>

</html>