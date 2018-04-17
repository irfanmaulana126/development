<?php

namespace backend\apidoc\controllers;

use yii\web\Controller;

class LoketController extends Controller
{
    public function actionIndex()
    {
		return $this->render('index');
    }
}
