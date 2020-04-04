<?php

//spl_autoload_register(function ($className) {
//    include '../App/Controller/$className.php';
//});
require '../Base/init.php';

$app = new \Base\Application();
$app->run();