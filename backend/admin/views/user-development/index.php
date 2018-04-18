<?php
use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\web\View;
use kartik\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\admin\models\UserDevelopmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider 
'id',
            '',
            '',
            '',
            '',
            // ':email',
            // '',
            // 'created_at',
            // 'updated_at',
            // 'avatar:ntext',
            // 'TEMPLATE',
            // 'avatarImage:ntext',
*/

$this->title = 'User Developments';
$this->params['breadcrumbs'][] = $this->title;

// print_r($dataProvider->getModels);
// die();

?>
<div class="user-development-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create User Development', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <?php echo DetailView::widget([
            'id'=>'dv-info',
            'model'=>$dataProvider,
            'condensed'=>true,
            'hAlign'=>'left',
            'hover'=>true,
            'panel'=>[
                'heading'=>'<b>Detail Profile</b>',
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
</div>
