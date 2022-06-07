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
<?php

include('menucolab.html');
?>
<h1>Cadastro de Clientes - PETSHOP</h1>
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

            $adicionar2 = "INSERT INTO logincli(email, senhacli) VALUES('".$cpfcli."', '".$senhacli."')";


            $inserir = mysqli_query($conectadb, $adicionar);

            $inserir2 = mysqli_query($conectadb, $adicionar2);

                if (($inserir) && ($inserir2)) {
                    echo "Dados do cliente ".$nomecli." cadastrados com sucesso!
                    <br><a href='cadastrocli.php'>Cadastrar novo cliente</a>";
                } else {
                    "Erro ao cadastrar dados.
                    <br><a href='cadastrocli.php'>Tentar novamente</a>";
                }

        ?>
    

    <hr>




<footer>
    <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>

</div>
</body>

</html>