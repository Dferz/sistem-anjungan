<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Home';

?>

<div style="margin: 2em;">
<?= yii2fullcalendar\yii2fullcalendar::widget([
        'options' => [
            'lang' => 'id',
            //... more options to be defined here!
        ],
    ]);
?>
</div>

