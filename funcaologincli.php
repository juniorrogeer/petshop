<?php

include('conexao.php');

$email = $_POST['email'];
$senhacli = $_POST['senhacli'];

$sql = mysqli_query($conectadb, "SELECT * FROM logincli WHERE email = '$email' AND senhacli = '$senhacli'");

if (mysqli_num_rows($sql) > 0) {
    header('location: loja.php');
    exit();
} else {
    echo "E-mail ou senha incorreta.";
    exit();
}
?>