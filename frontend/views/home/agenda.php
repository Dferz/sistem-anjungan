<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Prestasi Mahasiswa';
?>

<?php
      $Event = new \yii2fullcalendar\models\Event();
      $Event->id = '2';
      $Event->title = 'tugas';
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('10 Feb 2017 12:00:00 +0100'));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime('13 Feb 2017 12:00:00 +0100'));
      $events[] = $Event;

      $Event = new \yii2fullcalendar\models\Event();
      $Event->id = '3';
      $Event->title = 'makan';
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('13 Feb 2017 9:00:00 +0100'));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime('14 Feb 2017 16:00:00 +0100'));
      $events[] = $Event;

      $Event = new \yii2fullcalendar\models\Event();
      $Event->id = '4';
      $Event->title = 'konsul';
      $Event->start = date('Y-m-d\TH:i:s\Z',strtotime('8 Feb 2017 9:00:00 +0100'));
      $Event->end = date('Y-m-d\TH:i:s\Z',strtotime('8 Feb 2017 11:00:00 +0100'));
      $events[] = $Event;
?>

<div class="wrap-content">
  <div class="row">
    <div class="col-md-9">
      <!-- #### Calendar #### -->
      <?= yii2fullcalendar\yii2fullcalendar::widget([
            'options' => [
                'lang' => 'id',
                

                    //... more options to be defined here!
            ],
            'clientOptions' => [
              'googleCalendarApiKey' => 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
            ],
            'header'=>[
                        'left'=>'prev,next today',
                        'center'=> 'title',
                        'right'=> 'month,listWeek, listMonth'
            ],
            'googleCalendar' => true,
            'theme' => true,
            'events'=> [
                        'googleCalendarId' => 'gamedferz7th@gmail.com',
                        
            ],
          

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
JS;
    $this->registerJS($js);    
}

?>
