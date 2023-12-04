<?php

function definir_valor($chave){

    if(!empty($_POST[$chave])){
        return $_POST[$chave];
    }

    return false;

}


function msg($msg = '', $apagar = false){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;

    }else{

        if(!empty($_SESSION['message'])){

            $msg = $_SESSION['message'];
            if($apagar){
                unset($_SESSION['message']);
                
            }
            
            return $msg;
        }

    }

    return false;

}

function redirecionar($link,$array = []){
    header("Location: ".ROOT."/".$link);
    die;
}