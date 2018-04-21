<?php
include_once ROOT. '/models/News.php';
class NewsController
{

    public function actionIndex(){

        $newsList = News::getListNews();
        require_once ROOT . '/views/news/listNews/index.php';
        return true;
    }

    public function actionView($id){

        $newsById = News::getNewsById($id);
        require_once ROOT . '/views/news/newsById/index.php';
        return true;
    }
}