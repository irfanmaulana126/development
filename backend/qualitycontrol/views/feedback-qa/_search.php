<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\qualitycontrol\models\FeedbackQaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-qa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ID_OPEN_TIKET') ?>

    <?= $form->field($model, 'DESKRIPSI') ?>

    <?= $form->field($model, 'STATUS') ?>

    <?= $form->field($model, 'TGL') ?>

    <?php // echo $form->field($model, 'ID_USER') ?>

    <?php // echo $form->field($model, 'USER_NM') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
