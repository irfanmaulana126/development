<?php

namespace backend\assets;

use yii;
use yii\web\View;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/site.css',
		//'template/simple_admin/assets/css/custom.css',       
        // 'template/simple_admin/assets/css/bootstrap.css',		
        'template/simple_admin/assets/css/font-awesome.css',
    ];
    public $js = [
		//'template/simple_admin/assets/js/jquery-1.10.2.js',
		//'template/simple_admin/assets/js/bootstrap.min.js',
		//'template/simple_admin/assets/js/custom.js',
    ];
	
	public $jsOptions = [
       'position' => View::POS_END,
    ];
    // public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    // ];
}
