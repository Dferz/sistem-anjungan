<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use mrlco\googlecharts\GoogleCharts;
$this->title = 'Sistem Anjungan - Home';

?>
<h1>halo</h1>

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
     