<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;
use kartik\field\FieldRange;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;
use backend\admin\models\AppKtg;
use kartik\select2\Select2;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\admin\models\AppDetailKtg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-detail-ktg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KODE_KTG',[					
					'addon' => [
						'prepend' => [
							'content'=>'<span><b>KATEGORI</b></span>',
							'options'=>['style' =>'border-radius: 5px 0px 0px 5px;background-color: rgba(21, 175, 213, 0.14);text-align:right;width:150px']
						]
					]
				])->textInput(['maxlength' => true])->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(AppKtg::find()->all(),'KODE_KTG','KTG_NM'),'language' => 'en',
            'options' => ['placeholder'=>'Pilih Kategori....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ])->label(false); ?>

    <?= $form->field($model, 'MODUL_NM',[					
					'addon' => [
						'prepend' => [
							'content'=>'<span><b>MODUL</b></span>',
							'options'=>['style' =>'border-radius: 5px 0px 0px 5px;background-color: rgba(21, 175, 213, 0.14);text-align:right;width:150px']
						]
					]
				])->textInput(['maxlength' => true,'style'=>'width:420px'])->label(false); ?>

    <?php
    $date1=date('Y-m-d');
    echo $form->field($model, 'TGL1',[					
        'addon' => [
            'prepend' => [
                'content'=>'<span><b>DUE DATE</b></span>',
                'options'=>['style' =>'border-radius: 5px 0px 0px 5px;background-color: rgba(21, 175, 213, 0.14);text-align:right;width:150px']
            ]
        ]
    ])->textInput()->widget(DatePicker::classname(), [                    
                    'attribute2' => 'TGL2',
                        'options' => ['placeholder' => 'Tanggal Awal','value'=>$date1],
                        'options2' => ['placeholder' => 'END'],
                        'type' => DatePicker::TYPE_RANGE,
                        'form' => $form,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            "startDate" => $date1,
                            'style'=>'border-radius: 0px 5px 5px 0px;'
                        ]
                    ])->label(false); ?>

    <?= $form->field($model, 'DESKRIPSI')->widget(CKEditor::className(), [
        'options' => ['rows' => 2],
        'preset' => 'edvance'
    ])->label('DESKRIPSI') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
