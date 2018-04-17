<?php

namespace backend\apidoc\controllers;

use yii\web\Controller;

class VaController extends Controller
{
    public function actionIndex()
    {
		return $this->render('index');
    }
}
