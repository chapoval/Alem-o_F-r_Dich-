<?php

class Controller{

    protected function view($view, $array = []){

        $arquivo = "../app/views/".$view.".php";
        $this->checkView($arquivo);
        
    }

    protected function checkView($arquivo){

        if(file_exists($arquivo)){
            require $arquivo;
        }else{
            echo "Não foi possível encontrar o arquivo ".$arquivo;
        }

    }

}