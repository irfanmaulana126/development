<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetApidoc extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/bootstrap.min.css',	
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/prettify.css',	
		// 'http://development.kontrolgampang.com/template/apidoc/css/style.css',	
		'/template/apidoc/vendor/bootstrap.min.css',
		'/template/apidoc/vendor/prettify.css',
		'/template/apidoc/css/style.css',		
    ];   
	public $js = [	
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/require.min.js',	
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/polyfill.js',
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/lodash.custom.min.js',
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/semver.min.js',
		// 'http://development.kontrolgampang.com/template/apidoc/vendor/webfontloader.js',	
		
		'template/apidoc/vendor/jquery.min.js',	 			
		'template/apidoc/vendor/bootstrap.min.js',
		
		'template/apidoc/vendor/polyfill.js',	
		'template/apidoc/vendor/webfontloader.js',
		'template/apidoc/vendor/handlebars.min.js',		
		'template/apidoc/vendor/lodash.custom.min.js',		
		 
		 // 'template/apidoc/vendor/require.min.js',	
		
		'template/apidoc/vendor/semver.min.js',	
        //'template/apidoc/main.js',
		
	
    ];
    public $jsOptions = [
       'position' => View::POS_HEAD,
    ];
    // public $depends = [
		// 'yii\bootstrap\BootstrapAsset'
    // ];
}
	