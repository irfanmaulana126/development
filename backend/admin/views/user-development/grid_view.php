<?php
use kartik\grid\GridView;
$this->registerCss("
	#gv-app-detail .kv-grid-container{
		height:200px
	}
");
?> 
        <?php
        $pageNm='<b>Modul</b>
';
    $gvAttProdakHargaItem=[
		[
			'class'=>'kartik\grid\SerialColumn',
			'contentOptions'=>['class'=>'kartik-sheet-style'],
			'width'=>'10px',
			'header'=>'No.',
		],
		[
			'attribute'=>'KODE_KTG',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',	
		],		
		[
			'attribute'=>'KTG_NM',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',		
		],		
		[
			'attribute'=>'MODUL_NM',
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',		
		],				
		[
			'attribute'=>'TGL1',
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
			'label'=>'TGL AKHIR',
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
			'filterType'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',
            'format'=>'html',		
		],
	];
	
	$gvAttProdakHargaItem[]=[			
		//ACTION
		'class' => 'kartik\grid\ActionColumn',
		'template' => '{view}{open}',
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
			'open' =>function ($url, $model){
				return  tombolOpen($url, $model);
			},
		],
		// 'headerOptions'=>Yii::$app->gv->gvContainHeader('center','10px',$bColor,'#ffffff'),
		// 'contentOptions'=>Yii::$app->gv->gvContainBody('center','10px',''),
	]; 
	echo $gvAllProdakHarga=GridView::widget([
		'id'=>'gv-app-detail',
		'dataProvider' => $dataProviderKtg,
		'filterModel' => $searchModelKtg,
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