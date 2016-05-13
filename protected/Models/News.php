<?php

namespace App\Models;

use T4\Core\Config;

class News
    extends Config
{

    public function findAll()
    {
        $arrayNews = $this->news->toArray();
        krsort($arrayNews);
        foreach ($arrayNews as $item => $Article) {
            $arrayNews[$item] = new Article($Article);
        }
        return $arrayNews;
    }

    public function findOne(int $id)
    {
        $arrayNews = $this->news->toArray();
        return new Article($arrayNews[$id - 1]);
    }

    public function getLast()
    {
        return new Article(end($this->news->toArray()));
    }

}