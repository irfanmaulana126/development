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
class LocalApidoc_Begin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	// public $sourcePath = '@app/apidoc/views/kg';
	public $js = [		
		'http://development.kontrolgampang.com/template/api_local/vendor/require.min.js',
	];
	
	public $jsOptions = [
		'position' => View::POS_BEGIN,
	];
}
	