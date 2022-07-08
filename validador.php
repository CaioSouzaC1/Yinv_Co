<?php 
    session_start(); 
    if(!isset($_SESSION) || $_SESSION['autenticado'] != 'S'){
        header('Location: criar_conta.php?login=errosemlogin');
    } 
    ?>