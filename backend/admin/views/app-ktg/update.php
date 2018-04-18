<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\admin\models\AppKtg */

$this->title = 'Update App Ktg: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'App Ktgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-ktg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
