<?php

include('conexao.php');

$matriculacolab = $_POST['matriculacolab'];
$senhacolab = $_POST['senhacolab'];

$sql = mysqli_query($conectadb, "SELECT * FROM logincolab WHERE matriculacolab = '$matriculacolab' AND senhacolab = '$senhacolab'");

if (mysqli_num_rows($sql) > 0) {
    header('location: homecolab.php');
    exit();
} else {
    echo "Matricula ou senha incorreta.";
    exit();
}
?>