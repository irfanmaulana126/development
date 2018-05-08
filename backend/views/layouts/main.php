<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\web\View;
AppAsset::register($this);

// header("Strict-Transport-Security max-age=31536000");
// echo "<b>HSTS Enabled!</b>";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <!--<meta  http-equiv="Content-Type"  http-equiv="Content-Type" content="text/html" charset="<?=Yii::$app->charset ?>"> !-->
    <meta  http-equiv="Content-Type"  http-equiv="Content-Type" content="application/json" charset="<?=Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
   <meta http-equiv="Content-Security-Policy" content="default-src http://btob.kontrolgampang.com">!-->
    <?=Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<?php if (Yii::$app->user->isGuest) { ?>
		<?php $this->beginBody() ?>
			<div>
				<!-- NAV BAR !-->
				<?php //=$this->render('main-navbarNologin')?>
				<!-- BODY CONTAINER !-->
					<?= $content ?>
				<!-- FOOTER !-->
				<?php //=$this->render('main-footer_noLogin')?>
			</div>
			
		<?php $this->endBody() ?>
	<?php }; ?>
	<?php if (!Yii::$app->user->isGuest) { ?>
		<div class="wrap">
			<?php
			NavBar::begin([
				//'brandLabel' =>'<img src="'.Yii::$app->request->baseUrl.'/logo-dashboard3.png" class="navbar-header page-scroll" style="width:110px; height:40px"/>',
				'brandLabel' =>'PT. KOGAM ARTHA SEJAHTERA',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);
			$menuItems = [
				['label' => 'Home', 'url' => ['/site/index']],
			];
			if (Yii::$app->user->isGuest) {
				$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
			} else {
				$menuItems[] = '<li>'
					. Html::beginForm(['/site/logout'], 'post')
					. Html::submitButton(
						'Logout (' . Yii::$app->user->identity->username . ')',
						['class' => 'btn btn-link logout']
					)
					. Html::endForm()
					. '</li>';
			}
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => $menuItems,
			]);
			NavBar::end();
			?>

			<div class="container">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
				<?= Alert::widget() ?>
				<?= $content ?>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<p class="pull-left">&copy; KontrolGampang <?= date('Y') ?></p>

				<p class="pull-right">Dokumentasi</p>
			</div>
		</footer>
	<?php }; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
