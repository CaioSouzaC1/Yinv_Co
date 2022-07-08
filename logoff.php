<?php 
session_start();
    unset($_SESSION['autenticado']);
    header("Location: criar_conta.php");
 /* print_r($_SESSION);*/
?>