<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SistemAnjunganAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl = '@web';
    
    public $css=[
        #### PLUGIN ####
        'css/easy-responsive-tabs.css',

        #### SITE ####
        'css/site.css',
        'css/fonts.css',
        'css/site.min.css',
        'css/responsive-tabs.css',
        'css/sistem-anjungan.css',
    ];
    
    public $js=[
        #### PLUGIN ####
        'js/jquery.responsiveTabs.min.js',
        // 'js/easyResponsiveTabs.js',
        'js/coba.js',

        #### SITE ####
        'js/site.min.js',
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