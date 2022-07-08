<?php 

    session_start();

    $autentica_user = false;
    
    $usuarios = array(
       array('email' => 'caio@teste.com.br', 'senha' => '123456'),
       array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    );

    foreach ($usuarios as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $autentica_user = true;
        } 
    }

    if ($autentica_user) {
        header('Location: meu_perfil.php');
        $_SESSION['autenticado'] = 'S';
    } else {
        header('Location: criar_conta.php?login=errologin');
        $_SESSION['autenticado'] = 'N';
    }

  

 ?>