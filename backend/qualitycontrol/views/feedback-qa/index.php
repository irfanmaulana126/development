<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\qualitycontrol\models\FeedbackQaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feedback Qas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-qa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Feedback Qa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ID_OPEN_TIKET',
            'DESKRIPSI:ntext',
            'STATUS',
            'TGL',
            //'ID_USER',
            //'USER_NM',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
