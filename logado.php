
<?php

session_start();

if ((!isset ($_SESSION['matriculacolab']) == true) and (!isset ($_SESSION['senhacolab'] == true))) {

    unset ($_SESSION['matriculacolab']);
    unset ($_SESSION['senhacolab']);

    header('location: formlogincolab.html');
}

$colab = $_SESSION['matriculacolab'];

echo "Bem-vindo, $colab";

?>

<?php

session_start();

    if ((!isset ($_SESSION['matriculacolab']) == true) and (!isset ($_SESSION['senhacolab']) == true)) {
        unset($_SESSION['matriculacolab']);
        unset($_SESSION['senhacolab']);

        header('location: formlogincolab.html');
    }

    $logado = $_SESSION['matriculacolab'];
    
?>