<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\qualitycontrol\models\FeedbackQa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-qa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_OPEN_TIKET')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESKRIPSI')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'TGL')->textInput() ?>

    <?= $form->field($model, 'ID_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USER_NM')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
