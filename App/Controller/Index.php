<?php

namespace App\Controller;
class Index
{

    public $view;

    public function indexAction()
    {

        $this->view->modelUser = new \App\Model\modelUser;
        var_dump($this->view->modelUser);
    }

    public function mainAction()
    {
        echo 'Mailn';
    }

    function userProfileAction()
    {
        include "../modelUser.php";
        $user = new modelUser();
        $user->load($_GET['id']);
        $this->view->user = $user;
    }

}