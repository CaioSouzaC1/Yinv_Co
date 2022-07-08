<?php 
session_start();
    unset($_SESSION['autenticado']);
    header("Location: logar_conta.php");
 /* print_r($_SESSION);*/
?>