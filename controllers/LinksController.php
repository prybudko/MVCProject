<?php

class LinksController
{
    public function actionLinks()
    {
        require_once ROOT . '/views/links/index.php';
        return true;
    }
}