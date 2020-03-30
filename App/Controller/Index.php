<?php


class Index
{

    public $view;

    public function indexAction()
    {
        include "../Model/modelUser.php";
        $this->view->modelUser = new modelUser();
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