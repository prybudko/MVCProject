<?php

class HomeController
{
    public function actionStart()
    {
        require_once ROOT . '/views/home/index.php';
        return true;
    }
}