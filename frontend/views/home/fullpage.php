<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Home';

use rmrevin\yii\fontawesome\FA;
rmrevin\yii\fontawesome\AssetBundle::register($this);
?>

<div style="color: blue;">
    

<?php

use kartik\grid\GridView;

// echo GridView::widget([
//     'dataProvider'=> $dataProvider,
//     // 'columns' => [
        

//     //     // 'tanggal',
//     //     // 'nama',
//     //     // 'nim',
//     //     // 'penguji',
//     //     // 'jam_mulai',
//     //     // 'jam_selesai',
//     //     // 'tempat',
//     // ],
//     // 'responsive'=>true,
//     // 'hover'=>true
// ]);
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
        'heading' => 'Seminar KMM',
    ],
]);

?>

</div>