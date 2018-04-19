<?php

use kartik\detail\DetailView;
if (Yii::$app->user->identity->username=='superadmin') {
    $tombo=tombolCreateModul($dataProvider);
}

echo DetailView::widget([
            'id'=>'dv-info',
            'model'=>$dataProvider,
            'condensed'=>true,
            'hAlign'=>'left',
            'hover'=>true,
            'panel'=>[
                'heading'=>'<div class="pull-right">'.$tombo.' '.tombolChange($dataProvider).'</div><b>Detail Profile</b>',
                'type'=>DetailView::TYPE_INFO,
            ],
            'mode'=>DetailView::MODE_VIEW,
            'buttons1'=>'',
            'buttons2'=>'{view}{save}',		
            'attributes' =>[
                [
                    'columns' => [
                        [
                            'attribute'=>'username',
                            'value'=>(empty($dataProvider['username']))?'':$dataProvider['username'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'auth_key',
                            'value'=>(empty($dataProvider['auth_key']))?'':$dataProvider['auth_key'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'email',
                            'value'=>(empty($dataProvider['email']))?'':$dataProvider['email'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                        [
                            'attribute'=>'status',
                            'value'=>(empty($dataProvider['status']))?'':$dataProvider['status'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:30%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'password_hash',
                            'value'=>(empty($dataProvider['password_hash']))?'':$dataProvider['password_hash'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:80%']
                        ],
                    ],
                ],
                [
                    'columns' => [
                        [
                            'attribute'=>'password_reset_token',
                            'value'=>(empty($dataProvider['password_reset_token']))?'':$dataProvider['password_reset_token'],
                            'enableEditMode'=>false,
                            'displayOnly'=>true,
                            'valueColOptions'=>['style'=>'width:80%']
                        ],
                    ],
                ],
            ]
        ]);?>