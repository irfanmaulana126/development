<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\admin\models\OpenTicket;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
$this->registerCss("
	#gv-app-detail .kv-grid-container{
		height:300px
	}
");
/* @var $this yii\web\View */
/* @var $searchModel backend\qualitycontrol\modelsOpenTicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quality Control / Quality Assurance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="open-ticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $aryStt= [
		['STATUS' => 0, 'STT_NM' => 'OPEN'],		  
		['STATUS' => 1, 'STT_NM' => 'REVISI'],
		['STATUS' => 2, 'STT_NM' => 'CLOSE'],
		['STATUS' => 3, 'STT_NM' => 'REMOVE'],
	];
	$user = (empty(Yii::$app->user->identity->id)) ? '' : Yii::$app->user->identity->id;
	$pageNm='<b>JOB DESK</b>';
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
            'value'=>function($model){return Html::tag('div', $model->KTG_NM, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'filter'=>ArrayHelper::map(OpenTicket::find()->where(['KODE_USER'=>$user])->orderBy(['STATUS'=>SORT_DESC])->all(),'KTG_NM','KTG_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
            'filterOptions'=>[],	
            'format'=>'raw'
		],		
		[
			'attribute'=>'MODUL_NM',
			'label'=>'MODUL',
			'value'=>function($model){return Html::tag('div', $model->MODUL_NM, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'filter'=>ArrayHelper::map(OpenTicket::find()->where(['KODE_USER'=>$user])->orderBy(['STATUS'=>SORT_DESC])->all(),'MODUL_NM','MODUL_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
			'filterOptions'=>[],	
            'format'=>'raw'		
		],				
		[
			'attribute'=>'TITLE',
			'label'=>'TITLE',
			'value'=>function($model){return Html::tag('div', $model->TITLE, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',	
            'format'=>'html'		
		],				
		[
			'attribute'=>'TGL1',
			'value'=>function($model){return Html::tag('div', $model->TGL1, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
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
            'format'=>'raw'	
		],
		[
			'attribute'=>'TGL2',
			'label'=>'END',
			'value'=>function($model){return Html::tag('div', $model->TGL2, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
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
            'format'=>'raw'
        ],
        [
			'attribute'=>'DESKRIPSI',
			'value'=>function($model){return Html::tag('div', $model->DESKRIPSI, ['data-toggle'=>'tooltip','data-placement'=>'left','title'=>'Double click to Outlet Items ','style'=>'cursor:default;']);},
			'label'=>'DESKRIPSI',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
            'format'=>'html',		
		],
	];
	
	echo $gvAllProdakHarga=GridView::widget([
		'id'=>'gv-app-detail',
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns'=>$gvAttProdakHargaItem,				
        'pjax'=>true,
        'rowOptions'   => function ($model, $key, $index, $grid) {
            if($model['STATUS_QA']==1){
                $btnclick= ['ondblclick' => '
				document.cookie="STORE_ID" + "=" +'.$model->ID.';
				$.pjax.reload({
					url: "'.Url::to(["/master/store/"]).'",
					container: "#w20",
					timeout: 1000,
				});	'];
                return ['class' => 'success','ondblclick' => 'location.href="'.Url::to(["/qualitycontrol/feedback-qa"]).'?id='.$model->ID.'"'];
            }else{			
			$btnclick= ['ondblclick' => 'location.href="'.Url::to(["/qualitycontrol/feedback-qa"]).'?id='.$model->ID.'"'];
            return $btnclick;
            }
		},
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
