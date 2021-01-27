<?php 
    $usuario_autenticado = false;
    $usuarios_app = array(
        array('email' => 'adm@servicedesk.com', 'senha' => '1234'),
        array('email' => 'tecnico@servicedesk.com', 'senha' => '1234')
    )

    foreach($usuarios_app as $user) {
        if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Autenticado com sucesso.';
    } else {
        echo 'Não autenticado.';
    }

?>