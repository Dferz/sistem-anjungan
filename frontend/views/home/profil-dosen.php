<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\ShuffleImageAsset;

$this->title = 'Sistem Anjungan - Home';


ShuffleImageAsset::register($this);

?>
<div class="wrap-content">
  
    

    <section class="portfolio">
      <div class="container">
        <div class="row">

          <ul class="portfolio-sorting list-inline text-center">
            <li><a href="#" data-group="all" class="active">All</a></li>
            <li><a href="#" data-group="people">People</a></li>
            <li><a href="#" data-group="simpsons">Simpsons</a></li>
            <li><a href="#" data-group="futurama">Futurama</a></li>
          </ul> <!--end portfolio sorting -->

          <div class="portfolio-items row" id="grid">

            <div class="col-sm-6 col-md-3 col-xs-6" data-groups='["simpsons"]'>
              <div class="thumbnail">
                <?php echo Html::img('@web/images/foto-dosen/pak-bams.jpg', ['class'=> 'img-rounded']);?>
                <div class="caption text-center">
                  <h3>Drs. Bambang H, M.App.Sc, PhD</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6" data-groups='["people"]'>
              <div class="thumbnail">
                <?php echo Html::img('@web/images/foto-dosen/pak-wir.jpg', ['class'=> 'img-rounded']);?>
                <div class="caption text-center">
                  <h3>Dr. Wiranto, M.Kom, MCs</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6" data-groups='["people"]'>
              <div class="thumbnail">
                <?php echo Html::img('@web/images/foto-dosen/pak-afrizal.jpg', ['class'=> 'img-rounded']);?>
                <div class="caption text-center">
                  <h3>Afrizal Doewes, M.Sc</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6" data-groups='["futurama"]'>
              <div class="thumbnail">
                <?php echo Html::img('@web/images/foto-dosen/pak-har.jpg', ['class'=> 'img-rounded']);?>
                <div class="caption text-center">
                  <h3>Haryono Setiadi, ST, M.Eng</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>

            <!-- sizer -->
            <div class="col-md-3 col-sm-6 col-xs-6 shuffle_sizer"></div>
            
          </div> <!--end portfolio grid -->


          </div> <!--end row -->
        </div> <!-- end container-->
    </section>

</div>
     
<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="profil dosen"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>