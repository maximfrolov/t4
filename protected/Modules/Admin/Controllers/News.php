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
     * Метод-экшн вывода формы добавления и редактирования новости.
     * @param null $id
     */
    public function actionEdit($id = null)
    {
        if (null !== $id) {
            $this->data->article = \App\Models\News::findByPK($id);
            if (empty($this->data->article)) {
                $this->redirect('/admin/news');
            }
        } else {
            $this->data->article = new \App\Models\News();
        }
    }

    /**
     * Метод-экшн сохранения новости.
     */
    public function actionSave()
    {
        if (!empty($this->app->request->post->id)) {
            $article = \App\Models\News::findByPK($this->app->request->post->id);
        } else {
            $article = new \App\Models\News();
        }
        $article->fill($this->app->request->post);
        $article->save();
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