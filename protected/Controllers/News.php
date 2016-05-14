<?php

namespace App\Controllers;

use App\Models\Article;
use T4\Mvc\Controller;

class News
    extends Controller
{

    public function actionAll()
    {
        $this->data->news = \App\Models\News::findAllDesc();
    }

    public function actionOne(int $id)
    {
        $this->data->article = \App\Models\News::findOne($id);
    }

    public function actionLast()
    {
        $this->data->article = \App\Models\News::getLast();
    }

    public function actionForm()
    {

    }

    public function actionAdd(Article $data)
    {

    }

}