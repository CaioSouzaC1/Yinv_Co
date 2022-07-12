 <?php 
 session_start();
include "conexao.php";

$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim($_POST['senha']));

$query = "SELECT * FROM `table_yinv_co` WHERE email = '{$email}' AND senha = md5('$senha')";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);


if ($row == 1) {
    $_SESSION['autenticado'] = 'S';
    header('Location: meu_perfil.php?login=Logado');  
    exit;
} else {
    $_SESSION['autenticado'] = 'N';   
    echo ($row);
    header('location: logar_conta.php?login=FalhaLogin');
}

 ?>