<?php
    session_start();

    $usuario_id = null;
    $usuario_perfil_id = null;
    $usuario_autenticado = false;
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@servicedesk.com', 'senha' => '1234', 'usuario_perfil_id' => 1),
        array('id' => 2, 'email' => 'tecnico@servicedesk.com', 'senha' => '1234', 'usuario_perfil_id' => 1),
        array('id' => 3, 'email' => 'usuario_comum@servicedesk.com', 'senha' => '1234', 'usuario_perfil_id' => 2),
        array('id' => 4, 'email' => 'usuario_comum2@servicedesk.com', 'senha' => '1234', 'usuario_perfil_id' => 2)
    );

    foreach($usuarios_app as $user) {
        if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['usuario_perfil_id'];
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['usuario_perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['usuario_perfil_id'] = $usuario_perfil_id;
        header('Location: index.php?login=erro');
    }

?>