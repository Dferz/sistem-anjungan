<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;
use kartik\grid\GridView;

AutoTabsAsset::register($this);
$this->title = $title;
?>

<div class="container">
<div class="wrap-content" style="color:#80b3ff;">
    <div id="jadwal-seminar">
        <ul>
            <li><a href="#seminar-kmm">Seminar KMM</a></li>
            <li><a href="#seminar-proposal">Seminar Proposal</a></li>
            <li><a href="#seminar-hasil">Seminar Hasil</a></li>
            <li><a href="#seminar-ta">Seminar TA</a></li>
        </ul>
        <div id="seminar-kmm" style="overflow: auto;">
            <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'tanggal',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'nama',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'nim',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'penguji',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'jam_mulai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'jam_selesai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                        [
                            'attribute' => 'tempat',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center kv-align-middle']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->tanggal < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
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
                        'before' => '<h3> Seminar KMM </h3>'
                    ],
                ]);
            ?>
            
        </div>
        <div id="seminar-proposal">
            <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'tanggal',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'nama',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'nim',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'penguji',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_mulai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_selesai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'tempat',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->tanggal < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
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
                        'before' => '<h3> Seminar Proposal </h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="seminar-hasil">
             <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'tanggal',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'nama',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'nim',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'penguji',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_mulai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_selesai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'tempat',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->tanggal < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
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
                        'before' => '<h3> Seminar Hasil </h3>'
                    ],
                ]);
            ?>
        </div>
        <div id="seminar-ta">
             <?php
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute' => 'tanggal',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center'],
                            'format' => ['date', 'php:d-m-Y']


                        ],
                        [
                            'header' => '<a href=# >Nama</a>',
                            'attribute' => 'nama',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center'],
                            'label' => 'tetel'
                        ],
                        [
                            'attribute' => 'nim',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'penguji',
                            'contentOptions' => ['class' => 'text-justify'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_mulai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'jam_selesai',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                        [
                            'attribute' => 'tempat',
                            'contentOptions' => ['class' => 'text-center'],
                            'headerOptions' => ['class' => 'text-center']
                        ],
                    ],
                    'rowOptions'=>function($model){
                            if($model->tanggal < Yii::$app->formatter->asDate('now', 'php:Y-m-d')){
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
                        'before' => '<h3> Seminar TA </h3>'
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
?>