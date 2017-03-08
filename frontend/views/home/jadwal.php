<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;
use kartik\grid\GridView;

AutoTabsAsset::register($this);
$this->title = $title;
?>

<div class="wrap-content" style="color:#80b3ff;">
    <div id="jadwal-seminar">
        <ul>
            <li><a href="#seminar-proposal">Seminar Proposal</a></li>
            <li><a href="#seminar-hasil">Seminar Hasil</a></li>
            <li><a href="#sidang-ta">Sidang TA</a></li>
            <li><a href="#seminar-kmm">Seminar KMM</a></li>
        </ul>
        
        <div id="seminar-proposal">
            <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'TANGGAL',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'NAMA',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'NIM',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Penguji</a>',
                            'format' => 'raw',
                            'value' => function ($data) {
                                $alldata = "";
                                $i = 1;
                                $split = explode(";", $data->NAMA_LENGKAP);
                                foreach ($split as $value) {
                                    
                                    $alldata .=$i.". ".$value. "</br>";
                                    $i++; 
                                }
                                return $alldata;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Mulai</a>',
                            'attribute' => 'PUKUL_MULAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Selesai</a>',
                            'attribute' => 'PUKUL_SELESAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TEMPAT',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->TANGGAL < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
                                return ['class' => 'danger'];
                            } else {
                                return ['class' => 'success'];
                            }
                    },
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'before' => '<h3 style="margin-top:0;"> Seminar Proposal </h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="seminar-hasil">
             <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider1,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'TANGGAL',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'NAMA',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'NIM',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Penguji</a>',
                            'format' => 'raw',
                            'value' => function ($data) {
                                $alldata = "";
                                $i = 1;
                                $split = explode(";", $data->NAMA_LENGKAP);
                                foreach ($split as $value) {
                                    
                                    $alldata .=$i.". ".$value. "</br>";
                                    $i++; 
                                }
                                return $alldata;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Mulai</a>',
                            'attribute' => 'PUKUL_MULAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Selesai</a>',
                            'attribute' => 'PUKUL_SELESAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TEMPAT',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->TANGGAL < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
                                return ['class' => 'danger'];
                            } else {
                                return ['class' => 'success'];
                            }
                    },
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'before' => '<h3 style="margin-top:0;"> Seminar Hasil </h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="sidang-ta">
             <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'TANGGAL',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'NAMA',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'NIM',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Penguji</a>',
                            'format' => 'raw',
                            'value' => function ($data) {
                                $alldata = "";
                                $i = 1;
                                $split = explode(";", $data->NAMA_LENGKAP);
                                foreach ($split as $value) {
                                    
                                    $alldata .=$i.". ".$value. "</br>";
                                    $i++; 
                                }
                                return $alldata;
                                
                                 
                            },
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Mulai</a>',
                            'attribute' => 'PUKUL_MULAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Selesai</a>',
                            'attribute' => 'PUKUL_SELESAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TEMPAT',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->TANGGAL < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
                                return ['class' => 'danger'];
                            } else {
                                return ['class' => 'success'];
                            }
                    },
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'before' => '<h3 style="margin-top:0;"> Seminar TA </h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="seminar-kmm" style="overflow: auto;">
            <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider3,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'TANGGAL',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'NAMA',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'NIM',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Penguji</a>',
                            'attribute' => 'NAMA_LENGKAP',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Mulai</a>',
                            'attribute' => 'PUKUL_MULAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'header' => '<a href=# >Jam Selesai</a>',
                            'attribute' => 'PUKUL_SELESAI',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'TEMPAT',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->TANGGAL < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
                                return ['class' => 'danger'];
                            } else {
                                return ['class' => 'success'];
                            }
                    },
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'panel' => [
                        'type' => GridView::TYPE_DEFAULT,
                        'before' => '<h3 style="margin-top:0;"> Seminar KMM </h3>'
                    ],
                ]);
            ?>
            
        </div>
    </div>
</div>


<?php

#### Tabs Setting ####
$js = <<< JS
var tabs = $('#jadwal-seminar');
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

#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="jadwal seminar"]' ).attr('selected','');
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

    $('#jadwal-seminar').responsiveTabs('startRotation', 5000);
JS;
    $this->registerJS($js);    
}
?>