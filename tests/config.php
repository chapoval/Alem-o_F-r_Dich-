<?php

define('APP_NAME', 'Alemão Fur Dich');
define('APP_DESC', 'Plataforma EAD de Cursos de Idiomas.');
define('ROOT','http://localhost/public');
define('ROOT_A', 'http://localhost/app/views/userpage/');

if($_SERVER['SERVER_NAME'] == 'localhost'){
    
    define('DBHOST','localhost');
    define('DBNAME','teste');
    define('DBDRIVER','mysql');
    define('DBUSER','root');
    define('DBPASSWD','root');

}else{

}