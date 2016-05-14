<?php

namespace App\Controllers;

use App\Models\Article;
use T4\Mvc\Controller;

/**
 * Class News
 * @package App\Controllers
 */
class News
    extends Controller
{

    /**
     * Метод-экшн для получения всех новостей от модели
     * в обратном порядке и передачи представлению.
     */
    public function actionAll()
    {
        $this->data->news = \App\Models\News::findAllDesc();
    }

    /**
     * Метод-экшн для получения одной новости по id,
     * пришедшему от пользователя, и передачи представлению.
     * @param int $id
     */
    public function actionOne(int $id)
    {
        $this->data->article = \App\Models\News::findOne($id);
    }

    /**
     * Метод-экшн для получения последней новости
     * и передачи представлению.
     */
    public function actionLast()
    {
        $this->data->article = \App\Models\News::getLast();
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