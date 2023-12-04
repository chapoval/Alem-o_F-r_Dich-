<?php

spl_autoload_register(function($classe){

    require "../app/models/".$classe.".php";

});

require "config.php";
require "metodos.php";
require "database.php";
require "model.php";
require "controller.php";
require "app.php";
