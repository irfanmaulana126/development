<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\qualitycontrol\models\OpenTicket */

$this->title = 'Update Open Ticket: ' . $model->TITLE;
$this->params['breadcrumbs'][] = ['label' => 'Open Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TITLE, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="open-ticket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
