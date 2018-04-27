<?php
use kartik\grid\GridView;
use backend\admin\models\OpenTicket;
use yii\helpers\ArrayHelper;
$this->registerCss("
	#gv-app-detail .kv-grid-container{
		height:300px
	}
");
?> 
<?php
	$aryStt= [
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
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'filter'=>ArrayHelper::map(OpenTicket::find()->where(['KODE_USER'=>$user])->orderBy(['STATUS'=>SORT_DESC])->all(),'KTG_NM','KTG_NM'),
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
			'filter'=>ArrayHelper::map(OpenTicket::find()->where(['KODE_USER'=>$user])->orderBy(['STATUS'=>SORT_DESC])->all(),'MODUL_NM','MODUL_NM'),
			'filterType'=>GridView::FILTER_SELECT2,
			'filterWidgetOptions'=>['pluginOptions'=>['allowClear'=>true]],	
			'filterInputOptions'=>['placeholder'=>'-Pilih-'],
			'filterOptions'=>[],		
		],				
		[
			'attribute'=>'TITLE',
			'label'=>'TITLE',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',		
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
                    return 'REVISI';
                } else if($model['STATUS']=='2'){
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
		'template' => '{view}{send}',
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
			'send' =>function ($url, $model){
				if ($model['STATUS_QA']==0) {
					# code...
					return  tombolSendQa($url, $model);
				}
			},
		],
		// 'headerOptions'=>Yii::$app->gv->gvContainHeader('center','10px',$bColor,'#ffffff'),
		// 'contentOptions'=>Yii::$app->gv->gvContainBody('center','10px',''),
	]; 
	echo $gvAllProdakHarga=GridView::widget([
		'id'=>'gv-app-detail',
		'dataProvider' => $dataProviderjobdesk,
		'filterModel' => $searchModeljobdesk,
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