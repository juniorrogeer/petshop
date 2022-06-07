<?php
include('conexao.php')

session_start();

    if ((!isset ($_SESSION['matriculacolab']) == true) && (!isset ($_SESSION['senhacolab']) == true)) {
        unset($_SESSION['matriculacolab']);
        unset($_SESSION['senhacolab']);

        header('location: formlogincolab.html');
    }

    $logado = $_SESSION['matriculacolab'];
    
?>