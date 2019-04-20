<?php

    session_start();
    unset($_SESSION['user']);

    $_SESSION['isLogged'] = false;

    header('location: ../home');
    exit();

?>