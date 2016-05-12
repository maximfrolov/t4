<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $this->data->projectName = $this->app->config->projectName;
    }

    public function actionAbout()
    {

    }
}