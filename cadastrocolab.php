<!--TELA DE CADASTRO DE COLABORADORES-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Colaboradores - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>

<!--TÍTULO DA PÁGINA-->
<!--CÓDIGO PHP - MENU DA PÁGINA-->
<?php

include('menucolab.html');

?>
<h1>Cadastro de Colaboradores - PETSHOP</h1>
<hr>



<div class="container-conteudo">

<!--FORMULÁRIO DE CADASTRO DE COLABORADORES-->
        <form action="cadastrocolab2.php" method="post">

            <input type="text" name="matriculacolab" autocomplete="off" placeholder="Nova matrícula"><br>
            <input type="text" name="nomecolab" autocomplete="off" placeholder="Nome do novo colaborador"><br>
            <input type="text" name="cpfcolab" autocomplete="off" placeholder="CPF"><br>
            <input type="password" name="senhacolab" autocomplete="off" placeholder="Senha"><br>

            <input type="submit" value="Cadastrar funcionário">

        </form>




<hr>
<br>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
    </div>
</body>
</html>