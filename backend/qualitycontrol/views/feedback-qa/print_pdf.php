<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\web\View;
use yii\helpers\Url;
$this->registerJs($this->render('modal_feedback.js'),View::POS_READY);
echo $this->render('button_feedback');
echo $this->render('modal_feedback');
/* @var $this yii\web\View */
/* @var $searchModel backend\qualitycontrol\models\FeedbackQaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feedback Qas';
$this->params['breadcrumbs'][] = $this->title;
if (!empty($dataProviderJobdesk)) {
    $detailview=$this->render('detail_view',[
        'dataProviderJobdesk' => $dataProviderJobdesk,
    ]);
    }else{
        $detailview='';
    }
?>
<div class="feedback-qa-index">

    <?= $detailview ?>
    <?php 
$user = (empty(Yii::$app->user->identity->id)) ? '' : Yii::$app->user->identity->id;
$gvAttProdakHargaItem=[
    [
        'class'=>'kartik\grid\SerialColumn',
        'contentOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'10px',
        'header'=>'No.',
    ],
    [
        'attribute'=>'USER_NM',
        'label'=>'USER',
        'filterType'=>true,
        'hAlign'=>'left',
        'vAlign'=>'middle',
        'format'=>'raw',		
    ],
    [
        'attribute'=>'DESKRIPSI',
        'label'=>'DESKRIPSI',
        'filterType'=>true,
        'hAlign'=>'left',
        'vAlign'=>'middle',
        'format'=>'html',		
    ],
]; 
echo $gvAllProdakHarga=GridView::widget([
    'id'=>'gv-app-komen',
    'dataProvider' => $dataProvider,
    // 'filterModel' => $searchModel,
    'columns'=>$gvAttProdakHargaItem,				
    'pjax'=>true,
    'pjaxSettings'=>[
        'options'=>[
            'enablePushState'=>false,
            'id'=>'gv-app-komen',
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
        'type'=>'success',
        'before'=>false,
        'showFooter'=>false,
    ],
]); ?>
</div>
