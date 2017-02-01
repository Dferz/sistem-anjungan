<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SistemAnjunganAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl = '@web';
    
    public $css=[

        #### SITE ####
        'css/site.css',
        'css/fonts.css',
        'css/site.min.css',
        'css/dropdowneffects/dropdown.css',
        'css/sistem-anjungan.css',
        'css/clock/clock.css',
    ];
    
    public $js=[

        #### SITE ####
        // 'js/site.min.js',
        'js/clock/clock.js',
        'js/dropdowneffects/modernizr.custom.63321.js',
        'js/dropdowneffects/jquery.dropdown.js',
    ];
    
    public $img=[
    ]; 
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];
}