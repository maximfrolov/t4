<?php

namespace App\Models;

use T4\Core\Config;

class News
    extends Config
{

    const PATH_TO_DB = ROOT_PATH_PROTECTED . DS . 'dbNews.php';

    public static function findAll()
    {
        return (new self(self::PATH_TO_DB))->news->toArray();
    }

    public static function findAllDesc()
    {
        $arrayNews = self::findAll();
        krsort($arrayNews);
        return $arrayNews;
    }

    public static function findOne(int $id)
    {
        return new Article(self::findAll()[$id - 1]);
    }

    public static function getLast()
    {
        return new Article(end(self::findAll()));
    }

}