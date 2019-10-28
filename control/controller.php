<?php

sleep(1);
ob_start();
session_start();
require '../funcoes/banco/conexao.php';
require '../funcoes/crud/login.php';

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

$login = filter_input(INPUT_POST,'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);

switch ($acao) {
    
    case 'login':        
        if (login($login, $senha)) {               
            $_SESSION['logado'] = pegaLogin($login);
            echo "success";
        }
        break;
    case '':
    default:
        break;
}

// ADMINISTRADOR LOGADO
function logado($sessao) {
    if ($sessao == null || !isset($sessao)):
        header("Location: index.php");
        echo 'chegou aki 1';
    else:
        //  echo 'chegou aki 2';

        return TRUE;
    endif;
}

ob_end_flush();
