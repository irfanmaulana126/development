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
class AppAssetApidocEnd extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	public $js = [				 	       
			       
       	
        // 'template/apidoc/vendor/lodash.custom.min.js',
		//'http://development.kontrolgampang.com/template/apidoc/main.js',
			
        		
       
		   
		
		
		/* 'template/apidoc/vendor/path-to-regexp/index.js',			
		// 'template/apidoc/vendor/require.min.js',			
		'template/apidoc/vendor/list.min.js',			
		'template/apidoc/vendor/diff_match_patch.min.js',			
        // 'template/apidoc/main.js',	
		'template/apidoc/api_project.js',
		'template/apidoc/api_data.js',
		'template/apidoc/utils/send_sample_request.js',	
		'template/apidoc/vendor/webfontloader.js',  */
		'template/apidoc/index.html	'
    ];
    public $jsOptions = [
       'position' => View::POS_HEAD,
    ];
}
	