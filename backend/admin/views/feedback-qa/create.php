<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\admin\models\FeedbackQa */

$this->title = 'Create Feedback Qa';
$this->params['breadcrumbs'][] = ['label' => 'Feedback Qas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-qa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
