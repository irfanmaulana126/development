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
function tombolViewModul($url, $model){
    $title1 = Yii::t('app',' View');
    $options1 = [
        'value'=>url::to(['/openticket/app-detail-ktg/view','id'=>$model['ID']]),
        'id'=>'modul-view',
        'class'=>"btn btn-default btn-xs",    
        'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
    ];
    $icon1 = '
        <span class="fa-stack fa-xs">																	
            <i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
            <i class="fa fa-eye fa-stack-1x" style="color:black"></i>
        </span>
    ';      
    $label1 = $icon1 . '  ' . $title1;
    $content = Html::button($label1,$options1);		
    return '<li>'.$content.'</li>';
}
/*
*  BUTTON VIEW
*/
function tombolApplay($url, $model){
    $title1 = Yii::t('app',' Apply');
    $options1 = [
        'value'=>url::to(['/openticket/app-detail-ktg/apply-modul','id'=>$model['ID']]),
        'id'=>'open-ticket',
        'class'=>"btn btn-default btn-xs",    
        'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
    ];
    $icon1 = '
        <span class="fa-stack fa-xs">																	
            <i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
            <i class="fa fa-cubes fa-stack-1x" style="color:black"></i>
        </span>
    ';      
    $label1 = $icon1 . '  ' . $title1;
    $content = Html::button($label1,$options1);		
    return '<li>'.$content.'</li>';
}
function tombolCreateModul(){
    
    $title1 = Yii::t('app',' Create Modul');
    $options1 = [
        'value'=>url::to(['/openticket/app-detail-ktg/create']),
        'id'=>'create-modul',
        'class'=>"btn btn-success btn-md",
    ];
    $icon1 = '
    <span class="fa fa-credit-card"></span>
    ';      
    $label1 = $icon1 . '  ' . $title1;
    $content = Html::button($label1,$options1);		
    return $content;
}