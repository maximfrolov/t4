<?php

namespace App\Modules\Admin\Controllers;

use T4\Mvc\Controller;
use App\Models\Category;

/**
 * Class Categories
 * @package App\Modules\Admin\Controllers
 */
class Categories
    extends Controller
{

    public function actionDefault()
    {
        $cat = new Category();
        $cat->title = 'Учебная литература';
        $cat->save();

        var_dump($cat);
        die;
    }

}