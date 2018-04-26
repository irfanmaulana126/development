<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
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

   <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= $detailview ?>
    <div class="text-right">
        <p>
            <?= tombolKomen($dataProviderJobdesk) ?>
            <?= tombolCloseCase($dataProviderJobdesk) ?>
        </p>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                'DESKRIPSI:ntext',
        ],
    ]); ?>
</div>
