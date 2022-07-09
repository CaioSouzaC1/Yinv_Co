<?php 

    session_start();

    $autentica_user = false;
    
    $usuarios = array(
       array('email' => 'caio@teste.com.br', 'senha' => '123456', 'id' => 1),
       array('email' => 'adm@teste.com.br', 'senha' => '123456', 'id' => 2),
    );

    foreach ($usuarios as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $autentica_user = true;
            $usuario_id = $user['id'];
        } 
    }

    if ($autentica_user) {
        $_SESSION['autenticado'] = 'S';
        $_SESSION['id'] = $usuario_id;
        header('Location: meu_perfil.php');
    } else {
        $_SESSION['autenticado'] = 'N';
        header('Location: logar_conta.php?login=errologin');
    }

  

 ?>