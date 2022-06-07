<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Geral de Colaboradores - PETSHOP</title>
    <link rel="stylesheet" href="reset.css">
</head>

<body>
<?php

include('menucolab.html');

?>
<h1>Lista Geral de Colaboradores - PETSHOP</h1>
<hr>



<div class="container-conteudo">

<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM colaborador");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $matriculacolab = $dado['matriculacolab'];
        $nomecolab = $dado['nomecolab'];
        $cpfcolab = $dado['cpfcolab'];
        $senhacolab = $dado['senhacolab'];

        echo "MATRÍCULA: $matriculacolab<br>";
        echo "NOME: $nomecolab<br>";
        echo "CPF: $cpfcolab<br>";
        echo "<a href='editarcolab.php?matriculacolab=".$dado['matriculacolab']."'>Editar dados</a>";
        echo " | <a href='excluircolab.php?matriculacolab=".$dado['matriculacolab']."'>Excluir dados</a>";
        echo "<hr>";
        

    }

?>

<footer>
<p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
</footer>
</div>
</body>
</html>