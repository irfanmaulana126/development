<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\web\View;
use kartik\widgets\Alert;
use yii\widgets\Breadcrumbs;
use kartik\tabs\TabsX;

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
if (!empty($dataProvider)) {
$detailview=$this->render('detail_view',[
    'dataProvider' => $dataProvider,
]);
}else{
    $detailview='';
}

$gridview=$this->render('grid_view',[    
    'dataProviderjobdesk' => $dataProviderjobdesk,
    'searchModeljobdesk' => $searchModeljobdesk,
]);
$gridviewpesan=$this->render('grid_view_pesan',[    
    'dataProviderpesan' => $dataProviderpesan,
    'searchModelpesan' => $searchModelpesan,
]);
// print_r(count($dataProviderpesan));die();
if($notifuser>0){	
   $notif ='<span class="label label-success">'.$notifuser.'</span>';
 }else{
    $notif ='';
 }
$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> JOB DESK',
        'content'=>$gridview,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-envelope"></i> PESAN '.$notif,
        'content'=>$gridviewpesan
    ],
];

$tabIndex=TabsX::widget([
    'items'=>$items,
	'enableStickyTabs'=>true,
    'encodeLabels'=>false
]);
?>
<div class="user-development-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    if (!empty($detailview)) {
        echo $detailview;
    }
        echo $tabIndex;
    ?>
</div>
