<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Pets - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>


<h1>Editar dados de Pets - PETSHOP</h1>
<hr>

<?php
include('menucolab.html');
include('conexao.php');
?>
<div class="container-conteudo">
<?php

$idpet = $_GET['idpet'];

$sql = mysqli_query($conectadb, "SELECT * FROM pet WHERE idpet = '$idpet'");

$linha = mysqli_fetch_array($sql);

    if($linha) {
        
        echo "
        
        <form action='editarpet2.php' method='post'>
        
        <table>
        <tr>
        <form>
        <table>
        <tr>
            <td>
                <label>ID do pet</label>
            </td>
            <td>
                <input type='text' name='idpet' value='".$linha['idpet']."'>
            </td>
        </tr>

        <tr>
        <td>
            <label>NOME DO PET</label>
        </td>
        <td>
            <input type='text' name='nomepet' value=".$linha['nomepet'].">
        </td>
    </tr>

    <tr>
    <td>
        <label>ESPÉCIE</label>
    </td>
    <td>
        <input type='text' name='especie' value=".$linha['especie'].">
    </td>
    </tr>

    <tr>
    <td>
        <label>RAÇA</label>
    </td>
    <td>
        <input type='text' name='raca' value=".$linha['raca'].">
    </td>
    </tr>

    <tr>
    <td>
        <label>CPF DO TUTOR </label>
    </td>
    <td>
        <input type='text' name='cpfcli' value=".$linha['cpfcli'].">
    </td>
    </tr>

    <tr>
    <td>
    <label>NOME DO CLIENTE</label>
    </td>
    <td>
    <input type='text' name='nomecli' value=".$linha['nomecli'].">
    </td>
    </tr>
    </tr>

<td><input type='submit' href='editarcli2.php 'value='Editar' class='btn btn-primary'></button></td>
    </table>
        </form>";

    } else {
        echo "Dados não encontrados.";
    }

?>

</div>
</body>
</html>