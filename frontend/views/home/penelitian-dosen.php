<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AutoTabsAsset;
use mrlco\googlecharts\GoogleCharts;

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
            <?php 
              // PieChart
echo GoogleCharts::widget([
    'visualization' => 'PieChart',
    'containerId' => 'chart-container',
    'data' => [
        ['Task', 'Hours per Day'],
        ['Work', 11],
        ['Eat', 2],
        ['Commute', 2],
        ['Watch TV', 2],
        ['Sleep', 7]
    ],
    'options' => ['title' => 'My Daily Activity']
]);
            ?>
        </div>
        <div id="data-penelitian">
           <h3>data</h3>
        </div>
    </div>
</div>
</div>

<?php
$this->registerJsFile(
    '@web/js/tabs/tab-penelitian.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="penelitian dosen"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>
