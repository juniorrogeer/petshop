<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes - PetShop</title>
</head>

<body>

<h1>Cadastro de Clientes - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
?>


    <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

        <form action="" method="post" autocomplete="false">

            <input type="text" name="cpfcli" autocomplete="off" placeholder="CPF"><br>
            <input type="text" name="nomecli" autocomplete="off" placeholder="Nome do cliente"><br>
            <input type="text" name="telefone" autocomplete="off" placeholder="Telefone"><br>
            <input type="email" name="email" autocomplete="off" placeholder="E-mail"><br>
            <input type="text" name="endereco" autocomplete="off" placeholder="Endereço"><br>
            <input type="password" name="senha" autocomplete="off" placeholder="Nova senha"><br>

            <input type="submit" value="Cadastrar cliente">

        </form>

        <hr>

<!--CÓDIGO PHP QUE PERMITE A INTERAÇÃO DA PÁGINA WEB COM O BANCO DE DADOS-->

<?php

include('conexao.php');

@$cpfcli = $_POST['cpfcli'];
@$nomecli = $_POST['nomecli'];
@$telefone = $_POST['telefone'];
@$email = $_POST['email'];
@$endereco = $_POST['endereco'];
@$senhacli = $_POST['senha'];

echo "

- CPF: ".$cpfcli."<br>
- Nome do cliente: ".$nomecli."<br>
- Telefone: ".$telefone."<br>
- E-mail: ".$email."<br>
- Endereço: ".$endereco."<br>";


    $adicionar = "INSERT INTO cliente(cpfcli, nomecli, telefone, email, endereco, senha) VALUES('".$cpfcli."', '".$nomecli."', '".$telefone."', '".$email."', '".$endereco."', '".$senhacli."')";


    $inserir = mysqli_query($conectadb, $adicionar);

        if ($inserir) {
            echo "Dados do cliente ".$nomecli." cadastrados com sucesso!";
        } else {
            "Erro ao cadastrar dados.";
        }

?>

<hr>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>

</body>

</html>