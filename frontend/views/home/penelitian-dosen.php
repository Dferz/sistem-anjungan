<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;
use miloschuman\highcharts\Highcharts;

AutoTabsAsset::register($this);
$this->title = $title;
?>

<div class="container">
<div class="wrap-content" style="color:#80b3ff;">
    <div id="penelitian-dosen">
        <ul>
            <li><a href="#grafik-penelitian">Grafik</a></li>
            <li><a href="#data-penelitian">Data Lengkap</a></li>
        </ul>
        <div id="grafik-penelitian">
            <h3>Grafik</h3>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <?php
                        $total = 200;
                        $unassign = 60;
                        echo Highcharts::widget([
                           'scripts' => [
                                'highcharts-3d',
                                'modules/exporting',
                                'themes/grid-light',
                            ],
                            'options' => [
                                'credits' => ['enabled' => false],
                                'chart' => ['type' => 'pie',
                                    'options3d' => ['enabled' => true,
                                        'alpha' => 55, //adjust for tilt
                                        'beta' => 0, // adjust for turn
                                    ]
                                ],
                                'plotOptions' => [ // it is important here is code for change depth and use pie as donut
                                    'pie' => [
                                        'allowPointSelect' => true,
                                        'cursor' => 'pointer',
                                        'innerSize' => 100,
                                        'depth' => 45
                                    ]
                                ],
                                'title' => ['text' => 'Dealer report'],
                                'series' => [[// mind the [[ instead of [
                                    'type' => 'pie',
                                    'name' => 'customer',
                                    'data' => [
                                        ['assign', $total - $unassign],
                                        ['unassign', $unassign],
                                    ],
                                    ]], //mind the ]] instead of ] 
                            ]
                        ]);

                    ?>    
                </div>
                <div class="col-md-6 col-sm-6">
                    
                </div>    
            </div>
        </div>
        <div id="data-penelitian">
           <h3>data</h3>
        </div>
    </div>
</div>
</div>

<?php
#### Tabs Setting ####
$js = <<< JS
var tabs = $('#penelitian-dosen');
    tabs.responsiveTabs({
        rotate: false,
        startCollapsed: 'accordion',
        collapsible: 'accordion',
        setHash: true,
        animation : 'slide',
        animationQueue: 'true',
        duration : 300,
        scrollToAccordion : true,
        scrollToAccordionOffset: true,

    });

JS;
$this->registerJS($js);
?>

<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="penelitian dosen"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>
