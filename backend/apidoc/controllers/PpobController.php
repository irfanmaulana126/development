<?php

namespace backend\apidoc\controllers;

use yii\web\Controller;

class PpobController extends Controller
{
    public function actionIndex()
    {
		return $this->render('index');
    }
}
