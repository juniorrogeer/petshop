<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pets - PETSHOP</title>
</head>

<body>

<h1>Cadastro de Pets - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');
?>


    <!--CAMPOS DE INSERÇÃO DE DADOS PARA CADASTRO-->

        <form action="" method="post" autocomplete="false">

            <input type="text" name="idpet" autocomplete="off" placeholder="ID Pet"><br>
            <input type="text" name="nomepet" autocomplete="off" placeholder="Nome do pet"><br>
            <input type="text" name="especie" autocomplete="off" placeholder="Espécie"><br>
            <input type="text" name="raca" autocomplete="off" placeholder="Raça do pet"><br>
            <input type="text" name="cpfcli" autocomplete="off" placeholder="CPF do tutor"><br>
            <input type="text" name="nomecli" autocomplete="off" placeholder="Nome do tutor"><br>

            <input type="submit" value="Cadastrar pet">

        </form>

        <hr>

<!--CÓDIGO PHP QUE PERMITE A INTERAÇÃO DA PÁGINA WEB COM O BANCO DE DADOS-->

<?php

include('conexao.php');

@$idpet = $_POST['idpet'];
@$nomepet = $_POST['nomepet'];
@$especie = $_POST['especie'];
@$raca = $_POST['raca'];
@$cpfcli = $_POST['cpfcli'];
@$nomecli = $_POST['nomecli'];

echo "

- ID Pet: ".$idpet."<br>
- Nome do pet: ".$nomepet."<br>
- Espécie: ".$especie."<br>
- Raça: ".$raca."<br>
- Nome do tutor: ".$cpfcli."<br>
- CPF do tutor: ".$nomecli."<br>";


    $adicionar = "INSERT INTO pet(idpet, nomepet, especie, raca, cpfcli, nomecli) VALUES('".$idpet."', '".$nomepet."', '".$especie."','".$raca."', '".$cpfcli."', '".$nomecli."')";


    $inserir = mysqli_query($conectadb, $adicionar);

        if ($inserir) {
            echo "Os dados do pet ".$nomepet." associados ao tutor ".$nomecli." foram cadastrados com sucesso!";
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