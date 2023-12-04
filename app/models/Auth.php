<?php

class Auth{

    public static function login($info){
        $_SESSION['USER_DATA'] = $info;
    }

    public static function checkLogin(){
        
        if(!empty($_SESSION['USER_DATA'])){
            return true;
        }
        
        return false;
    }

    public static function logout(){
        unset($_SESSION['USER_DATA']);
    }

}