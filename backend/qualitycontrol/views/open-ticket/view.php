<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\qualitycontrol\models\OpenTicket */

$this->title = $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Open Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="open-ticket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'KODE_MODUL',
            'MODUL_NM',
            'KODE_USER',
            'USERNAME',
            'TGL1',
            'TGL2',
            'STATUS',
            'DESKRIPSI:ntext',
            'API_KEY',
            'KODE_KTG',
            'KTG_NM',
            'TITLE',
            'STATUS_QA',
        ],
    ]) ?>

</div>
