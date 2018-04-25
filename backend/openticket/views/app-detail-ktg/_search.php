<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\openticket\models\AppDetailKtgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-detail-ktg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'KODE_KTG') ?>

    <?= $form->field($model, 'KTG_NM') ?>

    <?= $form->field($model, 'MODUL_NM') ?>

    <?= $form->field($model, 'KODE_USER') ?>

    <?php // echo $form->field($model, 'USERNAME') ?>

    <?php // echo $form->field($model, 'TGL1') ?>

    <?php // echo $form->field($model, 'TGL2') ?>

    <?php // echo $form->field($model, 'DESKRIPSI') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
