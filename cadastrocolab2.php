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
<h1>Cadastro de Colaboradores - PETSHOP</h1>
<hr>

<!--CÓDIGO PHP - MENU DA PÁGINA-->
<?php

include('menucolab.html');

?>

<div class="container-conteudo">

<!--CÓDIGO PHP - CADASTRO DE COLABORADORES-->
<?php

include('conexao.php');

@$matricula = $_POST['matriculacolab'];
@$nome = $_POST['nomecolab'];
@$cpf = $_POST['cpfcolab'];
@$senhacolab = $_POST['senhacolab'];

echo "

- Matrícula: ".$matricula."<br>
- Nome do funcionário: ".$nome."<br>
- CPF: ".$cpf."<br>";

$adicionar = "INSERT INTO colaborador(matriculacolab, nomecolab, cpfcolab, senhacolab) VALUES('".$matricula."', '".$nome."', '".$cpf."', '".$senhacolab."')";

$adicionar2 = "INSERT INTO logincolab(matriculacolab, senhacolab) VALUES('".$matricula."', '".$senhacolab."')";

$inserir = mysqli_query($conectadb, $adicionar);

$inserir2 = mysqli_query($conectadb, $adicionar2);

if (($inserir) && ($inserir2)) {
    echo "Colaborador ".$nome." cadastrado com sucesso!
    <br><a href='cadastrocolab.php'>Cadastrar novo colaborador</a>";
} else {
    "Erro ao cadastrar colaborador.
    <br><a href='cadastrocolab.php'>Tentar novamente</a>";
}

?>
<hr>
<br>

    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
    </div>
</body>
</html>