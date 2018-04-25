<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\web\View;
use kartik\widgets\Alert;
use yii\widgets\Breadcrumbs;
use backend\openticket\models\AppDetailKtg;

/* @var $this yii\web\View */
/* @var $searchModel backend\openticket\models\AppDetailKtgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Open Ticket';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs($this->render('modal_openticket.js'),View::POS_READY);
echo $this->render('button_openticket');
echo $this->render('modal_openticket');
?>
<div class="app-detail-ktg-index">

<div class="text-right">
    <p>
        <?= tombolCreateModul() ?>
    </p>
</div>
<?php
$aryStt= [
    ['STATUS' => 0, 'STT_NM' => 'OPEN'],		  
    ['STATUS' => 1, 'STT_NM' => 'CLOSE'],
    ['STATUS' => 2, 'STT_NM' => 'REMOVE'],
];
    $pageNm='<b>MODUL</b>';
    $gvAttProdakHargaItem=[
		[
			'class'=>'kartik\grid\SerialColumn',
			'contentOptions'=>['class'=>'kartik-sheet-style'],
			'width'=>'10px',
			'header'=>'No.',
		],	
		[
			'attribute'=>'KTG_NM',
			'label'=>'NAMA KATEGORI',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',	
			'filter'=>ArrayHelper::map(AppDetailKtg::find()->orderBy(['STATUS'=>SORT_DESC])->all(),'KTG_NM','KTG_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
			'filterOptions'=>[],	
		],		
		[
			'attribute'=>'MODUL_NM',
			'label'=>'MODUL',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',		
			'filter'=>ArrayHelper::map(AppDetailKtg::find()->orderBy(['STATUS'=>SORT_DESC])->all(),'MODUL_NM','MODUL_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
			'filterOptions'=>[],
		],				
		[
			'attribute'=>'TGL1',
			'label'=>'START',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'mergeHeader'=>false,
			'noWrap'=>false,
			'filterType'=>GridView::FILTER_DATE,
			'filterWidgetOptions'=>['pluginOptions' => [				
                    'format' => 'yyyy-mm-dd',					 
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'autoWidget' => false,
                ]
            ],	
		],
		[
			'attribute'=>'TGL2',
			'label'=>'END',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'mergeHeader'=>false,
			'noWrap'=>false,
			'filterType'=>GridView::FILTER_DATE,
			'filterWidgetOptions'=>['pluginOptions' => [				
                    'format' => 'yyyy-mm-dd',					 
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'autoWidget' => false,
                ]
            ],
        ],
        [
			'attribute'=>'DESKRIPSI',
			'label'=>'DESKRIPSI',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
            'format'=>'html',		
        ],
        [
			'attribute'=>'STATUS',
			'label'=>'STATUS',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
            'format'=>'html',
			'filter'=>ArrayHelper::map($aryStt,'STATUS','STT_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
			'filterOptions'=>[],
            'value'=>function ($model)
            {
                if ($model['STATUS']=='0') {
                    return 'OPEN';
                } else if($model['STATUS']=='1'){
                    return 'CLOSE';
                }elseif($model['STATUS']=='3'){
                    return 'REMOVE';
                }
            }		
		],
	];
	
	$gvAttProdakHargaItem[]=[			
		//ACTION
		'class' => 'kartik\grid\ActionColumn',
		'template' => '{view}{apply}',
		'header'=>'ACTION',
		'dropdown' => true,
		'dropdownOptions'=>[
			'class'=>'pull-right dropdown',
			'style'=>'width:100%;background-color:#E6E6FA'				
		],
		'dropdownButton'=>[
			'label'=>'ACTION',
			'class'=>'btn btn-info btn-xs',
			'style'=>'width:100%'		
		],
		'buttons' => [
			'view' =>function ($url, $model){
				return  tombolViewModul($url, $model);
			},
			'apply' =>function ($url, $model){
				return  tombolApplay($url, $model);
			},
		],
		// 'headerOptions'=>Yii::$app->gv->gvContainHeader('center','10px',$bColor,'#ffffff'),
		// 'contentOptions'=>Yii::$app->gv->gvContainBody('center','10px',''),
	]; 
	echo $gvAllProdakHarga=GridView::widget([
		'id'=>'gv-app-detail',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'columns'=>$gvAttProdakHargaItem,				
		'pjax'=>true,
		'pjaxSettings'=>[
			'options'=>[
				'enablePushState'=>false,
				'id'=>'gv-app-detail',
		    ],						  
		],
		'hover'=>true,
		'responsive'=>true,
		'responsiveWrap'=>true,
		'bordered'=>true,
		'striped'=>true,
		'autoXlFormat'=>true,
		'export' => false,
		'panel'=>[''],
		'toolbar' => false,
		'panel' => [
			'heading'=>$pageNm,
			'type'=>'success',
			'before'=>false,
			'showFooter'=>false,
		],
	]); ?>
</div>
