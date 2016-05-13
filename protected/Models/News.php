<?php

namespace App\Models;

use T4\Core\Config;

class News
    extends Config
{

    public function findAll()
    {
        return $this->news->toArray();
    }

    public function findAllDesc()
    {
        $arrayNews = $this->findAll();
        krsort($arrayNews);
        return $arrayNews;
    }

    public function findOne(int $id)
    {
        return new Article($this->findAll()[$id - 1]);
    }

    public function getLast()
    {
        return new Article(end($this->findAll()));
    }

}