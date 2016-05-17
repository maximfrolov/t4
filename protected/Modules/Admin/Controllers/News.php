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
     * Метод-экшн вывода таблицы новостей.
     */
    public function actionTable()
    {
        $this->data->news = \App\Models\News::findAll(['order' => '__id DESC']);
    }

    /**
     * Метод-экшн вывода формы добавления новости.
     */
    public function actionForm()
    {

    }

    /**
     * Метод-экшн добавления новости.
     */
    public function actionAdd()
    {
        if (empty($this->app->request->post->__id)) {
            $item = new \App\Models\News();
            $item->fill($this->app->request->post);
            $item->save();
        }
        $this->redirect('/admin/news');
    }

    /**
     * Метод-экшн удаления новости по id
     * @param int $id
     */
    public function actionDelete(int $id)
    {
        \App\Models\News::findByPK($id)->delete();
        $this->redirect('/admin/news');
    }

}