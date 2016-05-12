<?php

namespace App\Models;

use T4\Core\Config;

class News
    extends Config
{

    public function findAll()
    {
        $arrayObjectsNews = $this->news->__data;
        krsort($arrayObjectsNews);
        foreach ($arrayObjectsNews as $item => $objectArticle) {
            $arrayObjectsNews[$item] = new Article($objectArticle->toArray());
        }
        return $arrayObjectsNews;
    }

    public function findOne($id)
    {
        return new Article($this->news[$id - 1]->toArray());
    }

    public function getLast()
    {
        return new Article($this->findOne(count($this->news)));
    }

}