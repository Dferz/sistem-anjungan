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


<div class="wrap-content" style="color:#80b3ff;">
    <div id="p2m-dosen">
        <ul>
            <li><a href="#grafik-jurnal">Grafik Jurnal</a></li>
            <li><a href="#arsip-jurnal">Arsip Jurnal</a></li>
            <li><a href="#grafik-pengabdian">Grafik Pengabdian</a></li>
            <li><a href="#arsip-pengabdian">Arsip Pengabdian</a></li>
            <li><a href="#grafik-penelitian">Grafik Penelitian</a></li>
            <li><a href="#arsip-penelitian">Arsip Penelitian</a></li>
        </ul>
        <div id="grafik-jurnal">
            <h3>Grafik</h3>
            <div class="row">
                <div class="col-md-7">
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
                                'title' => ['text' => 'Arsip Jurnal Dosen'],
                                'legend' => [
                                    'layout' => 'horizontal',
                                    'align' => 'center',
                                    'x' => 0,
                                    'verticalAlign' => 'bottom',
                                    'y' => 0,
                                    'width' => 500,
                                    'itemWidth' => 250,
                                    'floating' => false,
                                    'backgroundColor' => new JsExpression("(Highcharts.theme && Highcharts.theme.background2) || 'white'"),
                                    'borderColor' => '#CCC',
                                    'borderWidth' => 1,
                                    'borderRadius' => 10,
                                    'shadow' => false
                                ],
                                'series' => [[
                                    'type' => 'pie',
                                    'name' => 'Jumlah Jurnal',
                                    'data' => new SeriesDataHelper($dataProvider01, ['NAMA', 'jumlah:int']),
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
                <div class="col-md-5">
                    <?php
                    echo GridView::widget([
                        'dataProvider' => $dataProvider01,
                        'columns' => [
                            ['class' => 'kartik\grid\SerialColumn'],
                            [
                                'header' => '<a href=# >Nama</a>',
                                'attribute' => 'NAMA',
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
                            'before' => '<h3 style="margin-top:0;"> Data Jurnal </h3>'
                        ],
                    ]);
                ?>
                </div>    
            </div>
        </div>
        <div id="arsip-jurnal">
           <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'value' => function ($data) {
                                
                                return $data->GELAR_DEPAN." ".$data->NAMA." ".$data->GELAR_BELAKANG;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NIP',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'JUDUL_JURNAL',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NAMA_JURNAL',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'VOLUME',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NOMOR',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TAHUN',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'HALAMAN',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'class'=>'kartik\grid\ActionColumn',
                            'header' => '<a href=# >Link Jurnal</a>',
                            'headerOptions'=>['class'=>'kartik-sheet-style'],
                            'template' => '{link}', 
                            'buttons' => [
                                'link' => function ($url, $model, $key) {
                                    return Html::a('Link Jurnal', $model->WEBSITE, ['class' => ['btn', 'btn-primary'], 'target' => '_blank']);
                                },
                            ],
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
                        'before' => '<h3 style="margin-top:0;">Arsip Jurnal</h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="grafik-pengabdian">
            <h3>Grafik</h3>
            <div class="row">
                <div class="col-md-7">
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
                                'legend' => [
                                    'layout' => 'horizontal',
                                    'align' => 'center',
                                    'x' => 0,
                                    'verticalAlign' => 'bottom',
                                    'y' => 0,
                                    'width' => 500,
                                    'itemWidth' => 250,
                                    'floating' => false,
                                    'backgroundColor' => new JsExpression("(Highcharts.theme && Highcharts.theme.background2) || 'white'"),
                                    'borderColor' => '#CCC',
                                    'borderWidth' => 1,
                                    'borderRadius' => 10,
                                    'shadow' => false
                                ],
                                'title' => ['text' => 'Arsip Pengabdian Dosen'],
                                'series' => [[
                                    'type' => 'pie',
                                    'name' => 'Jumlah Pengabdian',
                                    'data' => new SeriesDataHelper($dataProvider02, ['NAMA', 'jumlah:int']),
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
                <div class="col-md-5">
                    <?php
                    echo GridView::widget([
                        'dataProvider' => $dataProvider02,
                        'columns' => [
                            ['class' => 'kartik\grid\SerialColumn'],
                            [
                                'header' => '<a href=# >Nama</a>',
                                'attribute' => 'NAMA',
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
                            'before' => '<h3 style="margin-top:0;"> Data Pengabdian </h3>'
                        ],
                    ]);
                ?>
                </div>    
            </div>
        </div>
        <div id="arsip-pengabdian">
           <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'TANGGAL',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'value' => function ($data) {
                                
                                return $data->GELAR_DEPAN." ".$data->NAMA." ".$data->GELAR_BELAKANG;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NIP',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NAMA_PENGABDIAN',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'LOKASI',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NOMOR_SK',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TAHUN',
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
                        'before' => '<h3 style="margin-top:0;">Arsip Jurnal</h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="grafik-penelitian">
            <h3>Grafik</h3>
            <div class="row">
                <div class="col-md-7">
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
                                'legend' => [
                                    'layout' => 'horizontal',
                                    'align' => 'center',
                                    'x' => 0,
                                    'verticalAlign' => 'bottom',
                                    'y' => 0,
                                    'width' => 500,
                                    'itemWidth' => 250,
                                    'floating' => false,
                                    'backgroundColor' => new JsExpression("(Highcharts.theme && Highcharts.theme.background2) || 'white'"),
                                    'borderColor' => '#CCC',
                                    'borderWidth' => 1,
                                    'borderRadius' => 10,
                                    'shadow' => false
                                ],
                                'title' => ['text' => 'Arsip Jurnal Dosen'],
                                'series' => [[
                                    'type' => 'pie',
                                    'name' => 'Jumlah Penelitian',
                                    'data' => new SeriesDataHelper($dataProvider01, ['NAMA', 'jumlah:int']),
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
                <div class="col-md-5">
                    <?php
                    echo GridView::widget([
                        'dataProvider' => $dataProvider03,
                        'columns' => [
                            ['class' => 'kartik\grid\SerialColumn'],
                            [
                                'header' => '<a href=# >Nama</a>',
                                'attribute' => 'NAMA',
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
                            'before' => '<h3 style="margin-top:0;"> Data Penelitian </h3>'
                        ],
                    ]);
                ?>
                </div>    
            </div>
        </div>
        <div id="arsip-penelitian">
           <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider3,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'value' => function ($data) {
                                
                                return $data->GELAR_DEPAN." ".$data->NAMA." ".$data->GELAR_BELAKANG;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'NIP',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'JUDUL_PENELITIAN',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TAHUN_PENELITIAN',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'SUMBER_PENDANAAN',
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'JANGKA_WAKTU',
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
                        'before' => '<h3 style="margin-top:0;">Arsip Jurnal</h3>'
                    ],
                ]);
            ?>
        </div>
        
    </div>
    
</div>

<?php
#### Tabs Setting ####
$js = <<< JS
var tabs = $('#p2m-dosen');
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
$( '#cd-dropdown option[data-title-id="p2m dosen"]' ).attr('selected','');
JS;
$this->registerJS($js);

#### AutoPlay / Auto Changing Page ####
if(strtolower(Yii::$app->request->get('autoplay')) == 'true'){
    $js = <<< JS
    console.log('autoplay: success');
    $(window).load(function () {
        window.setTimeout(function () {
            $('#out-transition').trigger('click');
            window.location.href = "$url";
        }, $timer)
    });

    $('#p2m-dosen').responsiveTabs('startRotation', 5000);
JS;
    $this->registerJS($js);    
}



?>
