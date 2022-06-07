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
<h1>Cadastro de Pets - PETSHOP</h1>
<hr>

<div class="container-conteudo">
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
- CPF do tutor: ".$cpfcli."<br>
- Nome do tutor: ".$nomecli."<br>";


    $adicionar = "INSERT INTO pet(idpet, nomepet, especie, raca, cpfcli, nomecli) VALUES('".$idpet."', '".$nomepet."', '".$especie."','".$raca."', '".$cpfcli."', '".$nomecli."')";


    $inserir = mysqli_query($conectadb, $adicionar);

        if ($inserir) {
            echo "Os dados do pet ".$nomepet." associados ao tutor ".$nomecli." foram cadastrados com sucesso!
            <br><a href='cadastropet.php'>Cadastrar novo pet</a>";
        } else {
            "Erro ao cadastrar dados.
            <br><a href='cadastropet.php'>Tentar novamente</a>";
        }

?>
<hr>

<footer>
    <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>
</div>
</body>

</html>