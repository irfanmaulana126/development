<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\admin\models\UserDevelopment */
/* @var $form yii\widgets\ActiveForm */
$this->registerCss("
    #cke_1_contents{
        height:100px;
    }");
?>

<div class="user-development-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESKRIPSI')->widget(CKEditor::className(), [
        'options' => ['rows' => 2, 'style'=>['height:120px']],
        'preset' => 'edvance',
    ]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
