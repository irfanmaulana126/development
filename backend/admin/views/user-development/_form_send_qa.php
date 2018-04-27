<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\admin\models\UserDevelopment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-development-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESKRIPSI')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'edvance'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
