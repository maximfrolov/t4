<?php

namespace App\Modules\Admin\Controllers;

use App\Models\Article;
use T4\Mvc\Controller;

/**
 * Class News
 * @package App\Modules\Admin\Controllers
 */
class News
    extends Controller
{

    /**
     * Метод-экшн для вывода таблицы новостей.
     */
    public function actionTable()
    {
        $this->data->news = \App\Models\News::findAll(['order' => '__id DESC']);
    }

    /**
     * Метод-экшн для вывода формы добавления новости.
     */
    public function actionForm()
    {

    }

    /**
     * Метод-экшн для добавления новости.
     * @param Article $data
     */
    public function actionAdd(Article $data)
    {

    }


}