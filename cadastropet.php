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
<?php

include('menucolab.html');
?>
<h1>Cadastro de Pets</h1>
<hr>



<div class="container-conteudo">

    <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

        <form action="cadastropet2.php" method="post" autocomplete="false">

            <input type="text" required="required" name="idpet" autocomplete="off" placeholder="ID Pet"><br>
            <input type="text" required="required" name="nomepet" autocomplete="off" placeholder="Nome do pet"><br>
            <input type="text" required="required" name="especie" autocomplete="off" placeholder="Espécie"><br>
            <input type="text" required="required" name="raca" autocomplete="off" placeholder="Raça do pet"><br>
            <input type="text" required="required" name="cpfcli" autocomplete="off" placeholder="CPF do tutor"><br>
            <input type="text" required="required" name="nomecli" autocomplete="off" placeholder="Nome do tutor"><br>

            <button type="submit">Cadastrar</button>

        </form>


<hr>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
    </div>
</body>

</html>