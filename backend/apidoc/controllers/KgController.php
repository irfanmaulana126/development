<?php

namespace backend\apidoc\controllers;

use yii\web\Controller;

class KgController extends Controller
{
    public function actionIndex()
    {
		return $this->render('index');
    }
}
