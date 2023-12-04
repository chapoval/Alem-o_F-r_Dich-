<?php

error_reporting(E_ALL & ~E_WARNING);
session_start();

require "../app/core/init.php";

$app = new App();