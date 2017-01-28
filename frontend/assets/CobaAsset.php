<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class CobaAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl = '@web';
    
    public $css=[
        'css/site.min.css',
    ];
    
    public $js=[
        'js/site.min.js',
    ];
    
    public $img=[
    ]; 
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}