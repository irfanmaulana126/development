<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\backend\sistem\models\UserAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'currentPassword')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newPassword',[					
					'addon' => [
						'prepend' => [
							'content'=>'<span><b>New Password</b></span>',
							'options'=>['style' =>'border-radius: 5px 0px 0px 5px;background-color: rgba(21, 175, 213, 0.14);text-align:right;width:150px']
						]
					]
				])->passwordInput(['maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'newPasswordConfirm',[					
					'addon' => [
						'prepend' => [
							'content'=>'<span><b>Password Confirm</b></span>',
							'options'=>['style' =>'border-radius: 5px 0px 0px 5px;background-color: rgba(21, 175, 213, 0.14);text-align:right;']
						]
					]
				])->passwordInput(['maxlength' => true])->label(false); ?>
    

    <div class="form-group text-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
