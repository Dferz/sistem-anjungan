<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Prestasi Mahasiswa';
?>

<?php
      $Event = new \yii2fullcalendar\models\Event();
      $Event->id = '2';
      $Event->title = 'fapfap';
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('2 Feb 2017 12:00:00 +0100'));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime('3 Feb 2017 12:00:00 +0100'));
      $events[] = $Event;

      $Event = new \yii2fullcalendar\models\Event();
      $Event->id = '3';
      $Event->title = 'makan';
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('3 Feb 2017 9:00:00 +0100'));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime('4 Feb 2017 16:00:00 +0100'));
      $events[] = $Event;
?>

<div class="wrap-content">
  <div class="row">
    <div class="col-md-9">
      <!-- #### Calendar #### -->
      <?= yii2fullcalendar\yii2fullcalendar::widget([
            'options' => [
                'lang' => 'id',
                'header'=>[
                        'left'=>'prev,next today',
                        'center'=> 'title',
                        'right'=> 'month,agendaWeek,agendaDay'
                ],
                    //... more options to be defined here!
                ],
            'events'=> $events,
          ]);
        
      ?>
    </div>
    <div class="col-md-3">
      
    </div>
  </div>
</div>

<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="agenda"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>
