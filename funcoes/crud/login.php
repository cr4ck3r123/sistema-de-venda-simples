<?php

function login($login, $senha){
    
    $pdo = conecta();
      try {
        $logar = $pdo->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ? limit 1");
        $logar->bindValue(1, $login, PDO::PARAM_STR);
        $logar->bindValue(2, $senha, PDO::PARAM_STR);
        $logar->execute();

        if ($logar->rowCount() == 1):           
            return TRUE;
        else :            
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
    
}

//PEGA LOGIN
function pegaLogin($login) {
    $pdo = conecta();
    try {
        $bylogin = $pdo->prepare("SELECT * FROM usuario WHERE login = ?");
        $bylogin->bindValue(1, $login, PDO::PARAM_STR);
        $bylogin->execute();

        if ($bylogin->rowCount() == 1):
            return $bylogin->fetch(PDO::FETCH_OBJ);
        else :
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}