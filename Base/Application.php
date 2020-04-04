<?php


namespace Base;


class Application
{
    public function run()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);



        $controllerName = $parts[1];
        $actionName = $parts[2];

        $conrollerFileName = 'App\Controller\\' . ucfirst($controllerName);


        $controllerObj = new $conrollerFileName;



        $actionFuncName = $actionName . 'Action';

        if (!method_exists($controllerObj, $actionFuncName)) {
            echo '404';
            die;
        }
        $tpl = '../App/Templates' . ucfirst($controllerName) . '/' . $actionName . '.phtml';

        $view = new View();
        $controllerObj->view = $view;
        $controllerObj->$actionFuncName();

        $view->render($tpl);
    }
}

