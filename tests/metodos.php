<?php

function show($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function t($string){
    echo "//************************************************//";
    echo "<br/>               ".$string."                 <br/>";
    echo "//************************************************//";
}

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

function f($f){
    if(!empty($f)){
        show($f);
    }
    else{
        echo "### Variavel Vazia ###";
    }
}

function redirecionar($link,$array = []){
    header("Location: ".ROOT."/".$link);
    die;
}

function c($info){
    file_put_contents('log.txt', $info);
}