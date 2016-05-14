<?php

namespace App\Models;

use T4\Core\Config;

/**
 * Class News
 * @package App\Models
 */
class News
    extends Config
{

    /**
     * Константа класса - Путь к данным.
     */
    const PATH_TO_DB = ROOT_PATH_PROTECTED . DS . 'dbNews.php';

    /**
     * Метод для нахождения всех новостей.
     * @return array
     */
    public static function findAll()
    {
        return (new self(self::PATH_TO_DB))->news->toArray();
    }

    /**
     * Метод для сортировки всех новостей в обратном порядке.
     * @return array
     */
    public static function findAllDesc()
    {
        $arrayNews = self::findAll();
        krsort($arrayNews);
        return $arrayNews;
    }

    /**
     * Метод для нахождения одной новости по id.
     * @param int $id
     * @return Article
     */
    public static function findOne(int $id)
    {
        return new Article(self::findAll()[$id - 1]);
    }

    /**
     * Метод для получения последней новости.
     * @return Article
     */
    public static function getLast()
    {
        return new Article(end(self::findAll()));
    }

}