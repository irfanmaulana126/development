<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\admin\models\AppKtgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Ktgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-ktg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Ktg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'KODE_KTG',
            'KTG_NM',
            'DESKRIPSI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
