<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\openticket\models\AppDetailKtg */

$this->title = 'Create App Detail Ktg';
$this->params['breadcrumbs'][] = ['label' => 'App Detail Ktgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-detail-ktg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
