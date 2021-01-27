<?php 

    session_start();

    if(!isset($_SESSION['autenticado']) AND $_SESSION['autenticado'] != 'SIM') {
        header('Location: index.php?login=erro2');
    }

?>