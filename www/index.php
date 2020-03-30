<?php

//var_dump($_SERVER);
$parts = explode('/', $_SERVER['REQUEST_URI']);

//var_dump($parts);

$controllerName = $parts[1];
$actionName = $parts[2];

$conrollerFileName = ucfirst($controllerName);
var_dump($conrollerFileName);
var_dump(getcwd());
include '../App/Controller/$conrollerFileName.php';

$controllerObj = new $controllerName;

//var_dump($controllerObj);

$actionFuncName = $actionName . 'Action';

if (!method_exists($controllerObj, $actionFuncName))
{
    echo '404';
    die;
}
$tpl = '../App/Templates' . $conrollerFileName . '/' . $actionName . '.phtml';
include "../Base/View.php";
$view = new View();
$controllerObj->view = $view;
$controllerObj->$actionFuncName();

$view->render($tpl);