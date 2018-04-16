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
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
	public $sourcePath = '@app/apidoc/views/kg';
	//public $js = [		
		//data-main'=>'main.js','src' => 'vendor/require.min.js'],
		//'vendor/diff_match_patch.min.js',
		
		
		// 'vendor/lodash.custom.min.js',
		// 'vendor/path-to-regexp/index.js',
		// 'vendor/prettify/prettify.js',
		// 'vendor/semver.min.js',
		
		// 'vendor/webfontloader.js',
		// 'vendor/list.min.js',
		// 'vendor/list.min.js',
		// 'vendor/handlebars.min.js',
				
		// 'utils/handlebars_helper.js',
		//'vendor/jquery.min.js',
		// 'vendor/jquery.min.js',		
		
		// 'main.js',
		// 'vendor/require.min.js',
		
		
		//'utils/send_sample_request.js',
		
		
		//'locales/locale.js',
		
		// 'vendor/webfontloader.js',
		// 'vendor/prettify/prettify.js',
		
		

	   
	   
        // 'template/apidoc/vendor/lodash.custom.min.js',
		//'http://development.kontrolgampang.com/template/apidoc/main.js',
			
        		
       
		   
		
		
		/* 'template/apidoc/vendor/path-to-regexp/index.js',			
		// 'template/apidoc/vendor/require.min.js',			
		'template/apidoc/vendor/list.min.js',			
		'template/apidoc/vendor/diff_match_patch.min.js',			
        // 'template/apidoc/main.js',	
		
		'template/apidoc/utils/send_sample_request.js',	
		'template/apidoc/vendor/webfontloader.js',  */
		//'template/apidoc/index.html'
   // ];
	
	public function init()
    {
        parent::init();
		// $this->js[] ='vendor/path-to-regexp/index.js';
		// $this->js[] ='main.js';
		// $this->js[] ='vendor/semver.min.js';
		
		
		//$this->js[] =['data-main'=>'main.js','src' => 'vendor/require.min.js'];
       // $this->js[] = 'i18n/' . Yii::$app->language . '.js'; // dynamic file added
	    
		$this->js[] ='vendor/bootstrap.min.js';
 		$this->js[] ='vendor/diff_match_patch.min.js';
		$this->js[] ='vendor/handlebars.min.js';
		
		
		// $this->js[] ='vendor/jquery.min.js';
		
		$this->js[] ='vendor/lodash.custom.min.js';
		$this->js[] ='vendor/path-to-regexp/index.js';
		$this->js[] ='vendor/prettify/prettify.js';
		$this->js[] ='vendor/semver.min.js';
		$this->js[] ='utils/send_sample_request.js';
		$this->js[] ='vendor/webfontloader.js';
		$this->js[] ='vendor/list.min.js';
     
	  
		$this->js[] ='locales/locale.js';
		$this->js[] ='locales/ca.js';
		$this->js[] ='locales/de.js';
		$this->js[] ='locales/ne.js';
		$this->js[] ='locales/es.js';
		$this->js[] ='locales/fr.js';
		$this->js[] ='locales/it.js';
		$this->js[] ='locales/nl.js';
		$this->js[] ='locales/pl.js';
		$this->js[] ='locales/pt_br.js';
		$this->js[] ='locales/ro.js';
		$this->js[] ='locales/ru.js';
		$this->js[] ='locales/tr.js';
		$this->js[] ='locales/vi.js';
		$this->js[] ='locales/zh.js';
		$this->js[] ='locales/zh_cn.js';
	   
		$this->js[] ='api_project.js';
		$this->js[] ='api_data.js';
		// $this->js[] ='vendor/require.min.js';
    }
	
    public $jsOptions = [
       'position' => View::PH_BODY_END,
    ];
}
	