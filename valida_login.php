<?php 
    session_start();

    //variavel que identifica se o usuário foi autenticado
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
    //array de usuários do app estática
    $usuarios_app = array(
        array('id' => 1,'email' => 'a@a.a', 'senha' => 'a', 'perfil_id' =>1),
        array('id' => 2,'email' => 'b@b.b', 'senha' => 'b', 'perfil_id' =>1),
        array('id' => 3,'email' => 'c@c.c', 'senha' => 'c', 'perfil_id' =>2),
        array('id' => 4,'email' => 'd@d.d', 'senha' => 'd', 'perfil_id' =>2),
    );
    //verificação dos dados recebidos pelo formulário
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    //redirecionamento para o destino se o usuário for ou não autenticado
    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro1');
    }

?>