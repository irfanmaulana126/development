<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCss("
	/**
	 * CSS - Border radius Sudut.
	 * piter novian [ptr.nov@gmail.com].
	 * 'clientOptions' => [
	 *		'backdrop' => FALSE, //Static=disable, false=enable
	 *		'keyboard' => TRUE,	// Kyboard 
	 *	]
	*/
	.modal-content { 
		border-radius: 5px;
	}
	
");
/*
*  BUTTON VIEW
*/
function tombolKomen($model){
    if($model['STATUS']==2){
        $disabled = true;
    }else{
        $disabled = false;
    }
    $title1 = Yii::t('app',' Komentar');
    $options1 = [
        'value'=>url::to(['/admin/feedback-qa/komen','id' => $model['ID']]),
        'id'=>'komentar',
        'class'=>"btn btn-success btn-ms",    
        'disabled'=>$disabled
    ];
    $content = Html::button($title1,$options1);		
    return $content;
}