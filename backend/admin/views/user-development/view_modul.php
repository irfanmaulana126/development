<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\helpers\Url;
?>
<div class="app-detail-ktg-view">
<?php
echo DetailView::widget([
            'id'=>'dv-info',
            'model' => $model,
            'condensed'=>true,
            'hAlign'=>'left',
            'hover'=>true,
            'panel'=>[
                'heading'=>'<b>Detail MODUL</b>',
                'type'=>DetailView::TYPE_INFO,
            ],
            'mode'=>DetailView::MODE_VIEW,
            'buttons1'=>'',
            'buttons2'=>'{view}{save}',		
            'attributes' =>[
                [
                    'columns' => [
                        [
                            'attribute'=>'KODE_KTG',
                            'label'=>'KODE KATEGORI',
                            'value'=>(empty($model['KODE_KTG']))?'':$model['KODE_KTG'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'KTG_NM',
                            'label'=>'KATEGORI',
                            'value'=>(empty($model['KTG_NM']))?'':$model['KTG_NM'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'MODUL_NM',
                            'label'=>'MODUL',
                            'value'=>(empty($model['MODUL_NM']))?'':$model['MODUL_NM'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'STATUS',
                            'label'=>'STATUS',
                            'value'=>(empty($model['STATUS']))?'':$model['STATUS'],
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
                            'value'=>(empty($model['TGL1']))?'':$model['TGL1'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'TGL2',
                            'label'=>'END',
                            'value'=>(empty($model['TGL2']))?'':$model['TGL2'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'DESKRIPSI',
                            'label'=>'DESKRIPSI',
                            'value'=>(empty($model['DESKRIPSI']))?'':$model['DESKRIPSI'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'format'=>'html',
                            'valueColOptions'=>['style'=>'width:80%']
                        ],
                    ],
                ],
            ]
        ]);?>
        
</div>
<div class="form-group text-right">
        <?php
        $title= Yii::t('app','');
        $url = Url::toRoute(['/admin/user-development/pdf?id='.$model['ID']]);
        $options1 = [
                    'id'=>'pdf',
                    'class'=>"btn btn-xs",
                    'title'=>'Print PDF',
                    'target' => '_blank',	
        ];
        $icon1 = '<span class="fa-stack fa-lg text-left">
                    <b class="fa fa-circle fa-stack-2x" style="color:red"></b>
                    <b class="fa fa fa fa-file-pdf-o fa-stack-1x" style="color:white"></b>
                    </span>
                    ';
                    $label1 = $icon1.' '.$title ;
                    echo $content = Html::a($label1,$url,$options1); ?>
    </div>