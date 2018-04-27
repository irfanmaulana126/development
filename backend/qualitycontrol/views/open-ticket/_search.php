<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\qualitycontrol\modelsOpenTicketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="open-ticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'KODE_MODUL') ?>

    <?= $form->field($model, 'MODUL_NM') ?>

    <?= $form->field($model, 'KODE_USER') ?>

    <?= $form->field($model, 'USERNAME') ?>

    <?php // echo $form->field($model, 'TGL1') ?>

    <?php // echo $form->field($model, 'TGL2') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'DESKRIPSI') ?>

    <?php // echo $form->field($model, 'API_KEY') ?>

    <?php // echo $form->field($model, 'KODE_KTG') ?>

    <?php // echo $form->field($model, 'KTG_NM') ?>

    <?php // echo $form->field($model, 'TITLE') ?>

    <?php // echo $form->field($model, 'STATUS_QA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
