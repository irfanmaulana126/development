<?php

use kartik\detail\DetailView;
echo DetailView::widget([
            'id'=>'dv-info',
            'model'=>$dataProviderJobdesk,
            'condensed'=>true,
            'hAlign'=>'left',
            'hover'=>true,
            'panel'=>[
                'heading'=>'<div class="pull-right"></div><b>Job Desk</b>',
                'type'=>DetailView::TYPE_INFO,
            ],
            'mode'=>DetailView::MODE_VIEW,
            'buttons1'=>'',
            'buttons2'=>'{view}{save}',		
            'attributes' =>[
                [
                    'columns' => [
                        [
                            'attribute'=>'KTG_NM',
                            'label'=>'NAMA KATEGORI',
                            'value'=>(empty($dataProviderJobdesk['KTG_NM']))?'':$dataProviderJobdesk['KTG_NM'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'MODUL_NM',
                            'label'=>'MODUL',
                            'value'=>(empty($dataProviderJobdesk['MODUL_NM']))?'':$dataProviderJobdesk['MODUL_NM'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'TGL1',
                            'label'=>'START',
                            'value'=>(empty($dataProviderJobdesk['TGL1']))?'':$dataProviderJobdesk['TGL1'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],                        
                        [
                            'attribute'=>'TGL2',
                            'label'=>'END',
                            'value'=>(empty($dataProviderJobdesk['TGL2']))?'':$dataProviderJobdesk['TGL2'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                        'attribute'=>'TITLE',
                        'label'=>'TITLE',
                        'value'=>(empty($dataProviderJobdesk['TITLE']))?'':$dataProviderJobdesk['TITLE'],
                        'enableEditMode'=>false,
                        'displayOnly'=>true,
                        'valueColOptions'=>['style'=>'width:80%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'DESKRIPSI',
                            'label'=>'DESKRIPSI',
                            'value'=>(empty($dataProviderJobdesk['DESKRIPSI']))?'':$dataProviderJobdesk['DESKRIPSI'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:80%']
                        ],
                    ],
                ],
            ]
        ]);?>