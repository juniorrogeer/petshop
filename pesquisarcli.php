<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Refinada - Base de Clientes - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <!--CÓDIGO PHP - INCLUSÃO DO MENU-->
<?php

include('menucolab.html');

?>


<!--TÍTULO NA PÁGINA-->
<h1>Pesquisa Refinada - Base de Clientes</h1>
<hr>




<div class="container-conteudo">


<!--FORMULÁRIO DE PESQUISA REFINADA-->
    <form class="d-flex" action="" method="post">
        
        <input type="text" autocomplete="off" name="cpfcli" placeholder="CPF do cliente">

        <input class="btn btn-outline-dark" type="submit" value="Buscar dados">

    </form>


    </div>

    <!--CÓDIGO PHP - LISTAR DADOS DE TODOS OS CLIENTES-->
<?php

include('conexao.php');

@$cpfcli = $_POST['cpfcli'];

$sql = mysqli_query($conectadb, "SELECT * FROM cliente WHERE cpfcli = '$cpfcli'");

    while ($dado = mysqli_fetch_array($sql)) {

        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];
        $telefone = $dado['telefone'];
        $email = $dado['email'];
        $endereco = $dado['endereco'];

        echo "<br>";
        echo "CPF: $cpfcli<br>";
        echo "NOME: $nomecli<br>";
        echo "TELEFONE: $telefone<br>";
        echo "E-MAIL: $email<br>";
        echo "ENDEREÇO: $endereco<br>";

    echo "<a href='editarcli.php?cpfcli=".$cpfcli."'>Editar dados do cliente ".$nomecli."?</a>";
    echo " | ";
    echo "<a href='excluircli.php?cpfcli=".$cpfcli."'>Excluir dados do cliente ".$nomecli."?</a>";
    echo "<hr>";
    }



?>


<br>
<hr>
    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
</body>
</html>