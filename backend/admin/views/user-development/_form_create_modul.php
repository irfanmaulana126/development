<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
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

    <?= $form->field($model, 'KODE_KTG')->textInput(['maxlength' => true])->widget(Select2::classname(),[
            'data'=>ArrayHelper::map(AppKtg::find()->all(),'KODE_KTG','KTG_NM'),'language' => 'en',
            'options' => ['placeholder'=>'Pilih Kategori....'],
            'pluginOptions' => [
                'allowClear' => true
            ], 
        ])->label('KATEGORI') ?>

    <?= $form->field($model, 'MODUL_NM')->textInput(['maxlength' => true])->label('MODUL') ?>

    <?php
    $date1=date('Y-m-d');
    echo $form->field($model, 'TGL1')->textInput()->widget(DatePicker::classname(), [                    
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
                    ])->label('DUE DATE') ?>

    <?= $form->field($model, 'DESKRIPSI')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'edvance'
    ])->label('DESKRIPSI') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
