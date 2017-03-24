<?php

use yii\helpers\Html;
use frontend\assets\FullCalendarAsset;
use frontend\assets\SlickAsset;

SlickAsset::register($this);
FullCalendarAsset::register($this);
$this->title = $title;
?>

<div class="wrap-content">
  <div class="row">
    <div class="col-md-9">
      <div id="agenda"></div>
    </div>
    <div class="col-md-3">
      <div id="ketAgenda">
        <ul class="list-group">
          <li class="list-group-item">
            <h3 class="text-center">Keterangan :</h3>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: blue"></div>
            </div>
            <p class="mini-box-text">Drs. Bambang H, M.App.Sc, PhD</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: red"></div>
            </div>
            <p class="mini-box-text">Afrizal Doewes, M.Sc</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: purple"></div>
            </div>
            <p class="mini-box-text">Haryono Setiadi, ST, M.Eng</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: blue"></div>
            </div>
            <p class="mini-box-text">Drs. Bambang H, M.App.Sc, PhD</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: red"></div>
            </div>
            <p class="mini-box-text">Afrizal Doewes, M.Sc</p>
          </li>
          <li class="list-group-item" style="margin-right: 5px;">
            <div class="pull-left">
              <div class="mini-box" style="background: purple"></div>
            </div>
            <p class="mini-box-text">Haryono Setiadi, ST, M.Eng</p>
          </li>
        </ul>
        <ul class="list-group">
          <li class="list-group-item">
            <h3 class="text-center">Keterangan :</h3>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: green"></div>
            </div>
            <p class="mini-box-text">Drs. YS. Palgunadi, M.Sc</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: pink"></div>
            </div>
            <p class="mini-box-text">Dr. Wiranto, M.Kom, MCs</p>
          </li>
          <li class="list-group-item">
            <div class="pull-left" style="margin-right: 5px;">
              <div class="mini-box" style="background: yellow"></div>
            </div>
            <p class="mini-box-text">Ristu Saptono, SSi, MT</p>
          </li>
        </ul>
      </div>
          
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

    // AutoPlay Calendar depend on button
    var arrayButton = ["button.fc-month-button", "button.fc-listWeek-button", "button.fc-agendaWeek-button"]
    var arrayCounter = 1;
    var timeOut = 8000;
    setInterval(function (){
      $(arrayButton[arrayCounter]).trigger('click');
      arrayCounter = arrayCounter == 2 ? 0 : (arrayCounter + 1);
    },timeOut);
JS;
    $this->registerJS($js);    
}

$js = <<< JS
$('#agenda').fullCalendar({
    theme: true,
    header: {
        left:   'prev,next today',
        center: 'title',
        right:  'month,listWeek,agendaWeek',
    },
    locale: 'id',
    navLinks: true,
    googleCalendarApiKey: 'AIzaSyCWPNuus3yDQfyY4ofPXC6vzPLzHtvNRU0',
    eventSources: [
      {
          googleCalendarId: 'gamedferz7th@gmail.com',
          color: 'red',
      },
      {
          googleCalendarId: 'senamkebugarandata@gmail.com',
          
      }
  ]
});

JS;
$this->registerJS($js);

#### Slide Agenda Sidebar ####
$js = <<< JS
$('#ketAgenda').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
});
JS;
$this->registerJS($js);

?>
