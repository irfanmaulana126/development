<?php

namespace backend\apidocs\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
		return $this->render('apidoc/index_php');
    }
}
