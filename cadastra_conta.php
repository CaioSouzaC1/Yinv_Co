<?php 
session_start();
include "conexao.php";

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));

$query = "SELECT 'email' FROM `table_yinv_co` WHERE email = '{$email}'";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    header('Location: logar_conta.php?login=Email');  
    exit;
}

$sql = "INSERT INTO `table_yinv_co`(`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";

    if ($conexao->query($sql) === TRUE) {
    $_SESSION['Cadastrado'] = true;
    
}
$conexao->close();
if ($row == 0) {
    header('Location: logar_conta.php?login=CadastroCriado');  
    exit;
}
?>