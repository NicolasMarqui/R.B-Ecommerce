<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if(!$_SESSION['isLogged']){
        header('location: ../home');
        exit();
    }
?>