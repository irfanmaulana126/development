<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\admin\models\AppKtg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-ktg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KODE_KTG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESKRIPSI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
