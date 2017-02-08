<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\SeriesDataHelper;
use yii\web\JsExpression;
use kartik\grid\GridView;

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
                <div class="col-md-6">
                    <?php
                        
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
                                        'alpha' => 55,
                                        'beta' => 0, 
                                    ]
                                ],
                                'tooltip' => [
                                    'pointFormat' => '{series.name}: <b>{point.y}</b> ({point.percentage:.1f}%)'
                                ],
                                'plotOptions' => [
                                    'pie' => [
                                        'allowPointSelect' => true,
                                        'cursor' => 'pointer',
                                        'innerSize' => 100,
                                        'depth' => 45
                                    ]
                                ],
                                'title' => ['text' => 'Penelitian Dosen'],
                                'series' => [[
                                    'type' => 'pie',
                                    'name' => 'Jumlah Penelitian',
                                    'data' => new SeriesDataHelper($dataProvider2, ['nama', 'jumlah:int']),
                                    // 'data' => [
                                    //     ['asd', 1],
                                    //     ['das', 2],
                                    // ],
                                    'showInLegend' => true,
                                    'dataLabels' => [
                                        'enabled' => true,
                                    ],
                                ]], 
                            ]
                        ]);

                    ?>    
                </div>
                <div class="col-md-6">
                    <?php
                    echo GridView::widget([
                        'dataProvider' => $dataProvider2,
                        'columns' => [
                            ['class' => 'kartik\grid\SerialColumn'],
                            [
                                'header' => '<a href=# >Nama</a>',
                                'attribute' => 'nama',
                                'contentOptions' => ['class' => 'text-justify'],
                                'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            ],
                            [
                                'attribute' => 'jumlah',
                                'contentOptions' => ['class' => 'text-center'],
                                'headerOptions' => ['class' => 'text-center kv-align-middle']
                            ],

                        ],
                        'pjax' => true,
                        'bordered' => true,
                        'striped' => true,
                        'condensed' => true,
                        'responsive' => true,
                        'hover' => true,
                        'panel' => [
                            'type' => GridView::TYPE_DEFAULT,
                            'before' => '<h3> Data Penelitian </h3>'
                        ],
                    ]);
                ?>
                </div>    
            </div>
        </div>
        <div id="data-penelitian">
           <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'nama',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                        ],
                        [
                            'attribute' => 'nip',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'judul_penelitian',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'sumber',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'waktu',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],

                    ],
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'before' => '<h3> Detail Penelitian </h3>'
                    ],
                ]);
            ?>
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
