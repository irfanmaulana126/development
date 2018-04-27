<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\openticket\models\AppDetailKtg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-detail-ktg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KODE_KTG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KTG_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODUL_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODE_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL1')->textInput() ?>

    <?= $form->field($model, 'TGL2')->textInput() ?>

    <?= $form->field($model, 'DESKRIPSI')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
