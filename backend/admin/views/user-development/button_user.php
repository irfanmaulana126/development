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
        'value'=>url::to(['/admin/user-development/view-modul','id'=>$model['ID']]),
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
function tombolOpen($url, $model){
    $title1 = Yii::t('app',' Open Ticket');
    $options1 = [
        'value'=>url::to(['/admin/user-development/open-ticket','id'=>$model['ID']]),
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
function tombolCreateModul($model){
    
    $title1 = Yii::t('app',' Create Modul');
    $options1 = [
        'value'=>url::to(['/admin/user-development/create-modul','id' => $model['id']]),
        'id'=>'create-modul',
        'class'=>"btn btn-success btn-xs",
    ];
    $icon1 = '
    <span class="fa fa-credit-card"></span>
    ';      
    $label1 = $icon1 . '  ' . $title1;
    $content = Html::button($label1,$options1);		
    return $content;
}
function tombolChange($model){
    $title1 = Yii::t('app',' Chnage Password');
    $options1 = [
        'value'=>url::to(['/admin/user-development/change','id' => $model['id']]),
        'id'=>'change',
        'class'=>"btn btn-warning btn-xs",    
    ];
    $icon1 = '<span class="fa fa-key fa-lg"></span>';      
    $label1 = $icon1 . '  ' . $title1;
    $content = Html::button($label1,$options1);		
    return $content;
}