<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Clientes - PETSHOP</title>
</head>

<body>


<h1>Editar dados de Clientes - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
include('conexao.php');

$cpfcli = $_GET['cpfcli'];

$sql = mysqli_query($conectadb, "SELECT * FROM cliente WHERE cpfcli = '$cpfcli'");

$linha = mysqli_fetch_array($sql);

    if($linha) {
        
        echo "
        
        <form action='editarcli2.php' method='post'>
        
        <table>
        <tr>
        <form>
        <table>
        <tr>
            <td>
                <label>MATRÍCULA</label>
            </td>
            <td>
                <input type='text' name='cpfcli' value='".$linha['cpfcli']."'>
            </td>
        </tr>

        <tr>
        <td>
            <label>NOME</label>
        </td>
        <td>
            <input type='text' name='nomecli' value=".$linha['nomecli'].">
        </td>
    </tr>

    <tr>
    <td>
        <label>TELEFONE</label>
    </td>
    <td>
        <input type='text' name='telefone' value=".$linha['telefone'].">
    </td>
    </tr>

    <tr>
    <td>
        <label>E-MAIL</label>
    </td>
    <td>
        <input type='text' name='email' value=".$linha['email'].">
    </td>
    </tr>

    <tr>
    <td>
        <label>ENDEREÇO</label>
    </td>
    <td>
        <input type='text' name='endereco' value=".$linha['endereco'].">
    </td>
    </tr>

    <tr>
    <td>
    <label>SENHA</label>
    </td>
    <td>
    <input type='password' name='senha' value=".$linha['senha'].">
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


</body>
</html>