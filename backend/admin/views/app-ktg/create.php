<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\admin\models\AppKtg */

$this->title = 'Create App Ktg';
$this->params['breadcrumbs'][] = ['label' => 'App Ktgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-ktg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
