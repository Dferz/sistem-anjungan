<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class FullCalendarAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl = '@web';
    
    public $css=[
        'css/fullcalendar/jquery-ui.min.css',
        'css/fullcalendar/fullcalendar.min.css',
    ];
    
    public $js=[
        'js/fullcalendar/moment.min.js',
        'js/fullcalendar/fullcalendar.min.js',
        'js/fullcalendar/gcal.min.js',
        'js/fullcalendar/locale-all.js',
        
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}