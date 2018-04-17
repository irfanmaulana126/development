<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii;
use yii\web\View;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Api_Local_Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	// public $sourcePath = '@app/apidoc/views/kg';
	
    public $css = [
		['template/api_local/vendor/bootstrap.min.css','media' => 'screen'],
		['template/api_local/vendor/prettify.css','media' => 'screen'],
		['template/api_local/css/style.css','media' => 'screen, print'],		
		// ['vendor/bootstrap.min.css', 'media' => 'screen'],
		// ['vendor/prettify/prettify.css', 'media' => 'screen'],	
		// ['css/style.css','media' => 'screen, print'],			
    ];   
	public $js = [	
		'template/api_local/vendor/jquery.min.js',
		'template/api_local/vendor/polyfill.js',			
		'template/api_local/vendor/bootstrap.min.js',
		//'template/api_local/vendor/require.min.js',
	
    ]; 
	public $jsOptions = [
       'position' => View::POS_HEAD,
    ];
	public function init()
    {
        parent::init();
        // resetting BootstrapAsset to not load own css files
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => []
        ];
    }
}
	