<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Refinada - Base de Pets - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>

<!--TÍTULO NA PÁGINA-->
<h1>Pesquisa Refinada - Base de Pets - PETSHOP</h1>
<hr>


<!--CÓDIGO PHP - INCLUSÃO DO MENU-->
<?php

include('menucolab.html');

?>

<div class="container-conteudo">

<!--FORMULÁRIO DE PESQUISA REFINADA-->
    <form class="d-flex" action="" method="post">
        
        <input type="text" autocomplete="off" name="idpet" placeholder="ID do pet">

        <input class="btn btn-outline-primary" type="submit" value="Buscar dados">

    </form>

</div>


    <!--CÓDIGO PHP - LISTAR DADOS DE TODOS OS CLIENTES-->
<?php

include('conexao.php');

@$idpet = $_POST['idpet'];

$sql = mysqli_query($conectadb, "SELECT * FROM pet WHERE idpet = '$idpet'");

    while ($dado = mysqli_fetch_array($sql)) {

        $idpet = $dado['idpet'];
        $nomepet = $dado['nomepet'];
        $especie = $dado['especie'];
        $raca = $dado['raca'];
        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];

        echo "<br>";
        echo "ID DO PET: $idpet<br>";
        echo "NOME DO PET: $nomepet<br>";
        echo "ESPÉCIE: $especie<br>";
        echo "RAÇA: $raca<br>";
        echo "CPF: $cpfcli<br>";
        echo "NOME: $nomecli<br>";

    echo "<a href='editarpet.php?idpet=".$idpet."'>Editar dados do pet ".$nomepet." associado ao tutor ".$nomecli."?</a>";
    echo " | ";
    echo "<a href='excluirpet.php?idpet=".$idpet."'>Excluir  dados do pet ".$nomepet." associado ao tutor ".$nomecli."?</a>";
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