<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\ShuffleImageAsset;
use rmrevin\yii\fontawesome\FA;

$this->title = 'Sistem Anjungan - Home';

rmrevin\yii\fontawesome\AssetBundle::register($this);
ShuffleImageAsset::register($this);

?>
<div class="wrap-content">
  
    <div class="container">

    <section class="portfolio">
      
        <div class="row">

          <ul class="portfolio-sorting list-inline text-center">
            <li><a href="#" data-group="all" class="active">All</a></li>
            <li><a href="#" data-group="sae">Software Architecture Engineering</a></li>
            <li><a href="#" data-group="nds">Network Domain Security</a></li>
            <li><a href="#" data-group="ids">Information Data Security</a></li>
            <li><a href="#" data-group="sc">Soft Computing</a></li>
            <li><a href="#" data-group="cs">Computational Science</a></li>
            <li><a href="#" data-group="is">Information System</a></li>
          </ul> <!--end portfolio sorting -->

          <div class="portfolio-items row-eq-height" id="grid">

            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["ids"]'>
              <div class="thumbnail" >
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-bams.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Kepala Prodi</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Drs. Bambang H, M.App.Sc, PhD</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Information and Data Security, Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>PhD :Curtin University of Technology, Australia .</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">bambang_harjito@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["sc"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-wir.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Dr. Wiranto, M.Kom, MCs</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>S3 - Ilmu Komputer Universitas Gadjah Mada.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">wiranto@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["sc"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-afrizal.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Afrizal Doewes, M.Sc</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>S2 - Hochschule für Technik und Wirtschaft, Berlin, Jerman</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">afrizal.doewes@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["is"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-har.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Haryono Setiadi, ST, M.Eng</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Information System</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p> S2 - Magister Teknologi Informasi, Universitas Gajdah Mada.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">haryonosetiadi@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["ids"]'>
              <div class="thumbnail" >
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-bams.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Kepala Prodi</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Drs. Bambang H, M.App.Sc, PhD</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Information and Data Security, Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>PhD :Curtin University of Technology, Australia .</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">bambang_harjito@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["sc"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-wir.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Dr. Wiranto, M.Kom, MCs</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>S3 - Ilmu Komputer Universitas Gadjah Mada.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">wiranto@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["sc"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-afrizal.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Afrizal Doewes, M.Sc</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Soft Computing</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>S2 - Hochschule für Technik und Wirtschaft, Berlin, Jerman</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">afrizal.doewes@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 col-md-3 col-xs-6" style="padding: 0 5px;" data-groups='["is"]'>
              <div class="thumbnail">
                <div style="position: relative;">
                  <?php echo Html::img('@web/images/foto-dosen/pak-har.jpg', ['class'=> 'img-rounded', 'style' => 'width:100%;']);?>
                  <span style="position: absolute; right: 10px; bottom: -10px; background: #80b3ff; color: #fff; padding: 5px; border-radius: 4px; font-size: small;">Dosen</span>
                </div>
                <div class="caption text-justify">
                  <h3 class="text-center">Haryono Setiadi, ST, M.Eng</h3>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-search"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p>Information System</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p> S2 - Magister Teknologi Informasi, Universitas Gajdah Mada.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                      <p style="word-break: break-all;">haryonosetiadi@staff.uns.ac.id</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            



            



            <!-- sizer -->
            <div class="col-md-3 col-sm-4 col-xs-6 shuffle_sizer"></div>
            
          </div> <!--end portfolio grid -->


          </div> <!--end row -->
    </section>
    </div>
</div>
     
<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="profil dosen"]' ).attr('selected','');
JS;
$this->registerJS($js);
?>

<?php
#### Equal Thumbnail height ####
$js = <<< JS
function equalHeight(group) {    
    var tallest = 0;    
    group.each(function() {       
        var thisHeight = $(this).height();       
        if(thisHeight > tallest) {          
            tallest = thisHeight;       
        }    
    });    
    group.each(function() { $(this).height(tallest); });
} 

equalHeight($(".thumbnail")); 

JS;
$this->registerJS($js);


?>