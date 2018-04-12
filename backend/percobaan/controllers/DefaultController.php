<?php

namespace backend\percobaan\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
		return $this->render('apidoc/index_php');
    }
}
