<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class CobaAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl = '@web';
    
    public $css=[
        'css/site.min.css',
        'css/dropdowneffects/dropdown.css',
    ];
    
    public $js=[
        'js/site.min.js',
        'js/dropdowneffects/modernizr.custom.63321.js',
        'js/dropdowneffects/jquery.dropdown.js',
    ];

    public $jsOptions = [
        'async' => 'async',
    ];
    
    public $img=[
    ]; 
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}