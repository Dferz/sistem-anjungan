<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use \stmswitcher\flipclock\FlipClock;
use frontend\assets\SistemAnjunganAsset;
use frontend\assets\PageTransitionAsset;

PageTransitionAsset::register($this);
SistemAnjunganAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="animsition" style="height: inherit;">
    <div class="wrap">
        <!-- #### HEADER #### -->
        <div class="navbar navbar_site">
            <!-- #### LOGO #### -->
            <div class="row">
                
                <div class="col-md-4 col-sm-4" style="height: inherit; background: inherit;">
                    <div class="navbar_box">
                        <?php
                            echo Html::img('@web/images/LOGO.png', ['alt'=>'logo', 'class' => 'logo', 'style' => 'max-width:100%;']);
                        ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4" style="height: inherit; background: inherit;">
                    <div class="navbar_box" style="width: 100%; height: 100%;">
                        <!-- #### Menu #### -->
                        <select id="cd-dropdown" class="cd-select">
                            <option value='-1' data-title-id= 'error' data-uclass='animsition-link' data-url='error' selected>Error</option>
                            <option data-title-id= 'home' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home'; ?>'>Home</option>
                            <option data-title-id='agenda' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/agenda'; ?>'>Agenda</option>
                            <option data-title-id='kehadiran dosen' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/kehadiran-dosen'; ?>'>Kehadiran Dosen</option>
                            <option data-title-id = 'prestasi mahasiswa' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/prestasi-mahasiswa'; ?>'>Prestasi</option>
                            <option data-title-id = 'jadwal seminar' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/jadwal'; ?>'>Jadwal Seminar</option>
                            <option data-title-id = 'profil dosen' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/profil-dosen'; ?>'>Profil Dosen</option>
                            <option data-title-id = 'penelitian dosen' data-uclass='animsition-link' data-url='<?php echo Yii::$app->homeUrl.'/home/penelitian-dosen'; ?>'>Penelitian Dosen</option> 
                        </select>
                    </div>
                </div>
                <!-- #### CLOCK #### -->
                <div class="col-md-4 col-sm-4" style="height: inherit; background: inherit;">
                    <div class="navbar_box">    
                        <div class="clock">
                            <div id="Date"></div>

                            <ul>
                                <li id="hours"> </li>
                                <li id="point">:</li>
                                <li id="min"> </li>
                               
                            </ul>
                        </div>   
                    </div>      
                </div>
            </div>    
        </div>
        <!-- #### END HEADER #### -->
        
        <!-- #### CONTENT #### -->
        <div class="content" style="clear:both;">
            <?= $content ?>        
        </div>
        <!-- #### END CONTENT #### -->
    </div>

    <!-- #### FOOTER #### -->
    <div class="footer">
        <div class="container">
            <p class="pull-left">&copy; Informatika UNS <?= date('Y') ?></p>
            <p class="pull-right">Sistem Anjungan Informasi</p>
        </div>
    </div>
    <!-- #### END FOOTER #### -->
</div>





<?php 
$js = <<< JS
$( '#cd-dropdown' ).dropdown( {
                    gutter : 5,
                    stack : false,
                    delay : 100,
                    slidingIn : 100
                } );
JS;
$this->registerJS($js);
?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
