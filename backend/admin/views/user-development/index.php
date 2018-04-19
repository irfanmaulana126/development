<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\web\View;
use kartik\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\admin\models\UserDevelopmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Developments';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs($this->render('modal_user.js'),View::POS_READY);
echo $this->render('button_user');
echo $this->render('modal_user');
// print_r($dataProvider->getModels);
// die();

$detailview=$this->render('detail_view',[
    'dataProvider' => $dataProvider,
]);
$gridview=$this->render('grid_view',[    
    'dataProviderKtg' => $dataProviderKtg,
    'searchModelKtg' => $searchModelKtg,
]);
?>
<div class="user-development-index">

    <div class="pull-right">
        <?=tombolCreateModul($dataProvider)?>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        echo $detailview;
        echo $gridview;
    ?>
</div>
