

<?php

session_start();

$matriculacolab = $_POST['matriculacolab'];
$senhacolab = $_POST['senhacolab'];

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM colaborador WHERE matriculacolab = '$matriculacolab' AND senhacolab = '$senhacolab'");

    if (mysqli_num_rows($sql) > 0) {

        $_SESSION['matriculacolab'] = $matriculacolab;
        $_SESSION['senhacolab'] = $senhacolab;
        header('location: homecolab.php');
    
    } else {

        unset($_SESSION['matriculacolab']);
        unset($_SESSION['senhacolab']);
        header('location: formlogincolab.html');
    }

?>