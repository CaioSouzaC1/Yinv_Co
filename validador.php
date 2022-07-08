<?php 
    session_start(); 
    if(!isset($_SESSION) || $_SESSION['autenticado'] != 'S'){
        header('Location: logar_conta.php?login=errosemlogin');
    } 
    ?>