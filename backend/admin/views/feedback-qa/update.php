<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\admin\models\FeedbackQa */

$this->title = 'Update Feedback Qa: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Feedback Qas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feedback-qa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
