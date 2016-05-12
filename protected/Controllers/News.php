<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class News
    extends Controller
{

    public function actionAll()
    {
        $news = new \App\Models\News(ROOT_PATH_PROTECTED . DS . 'dbNews.php');
        $this->data->news = $news->findAll();
    }

    public function actionOne($id)
    {
        $article = new \App\Models\News(ROOT_PATH_PROTECTED . DS . 'dbNews.php');
        $this->data->article = $article->findOne($id);
    }

}