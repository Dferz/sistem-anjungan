<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use \stmswitcher\flipclock\FlipClock;
use frontend\assets\SistemAnjunganAsset;


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
<div class="wrap">
    <!-- #### HEADER #### -->
    <div class="navbar navbar_site">
        <!-- #### LOGO #### -->
        <div class="col-md-4 col-sm-4" style="height: inherit;">
            <div class="navbar_box">
                <?php
                    echo Html::img('@web/images/LOGO.png', ['alt'=>'logo', 'class' => 'logo', 'style' => 'max-width:100%;']);
                ?>
            </div>
        </div>
        <div class="col-md-4 col-sm-4" style="height: inherit;">
            <div class="navbar_box">
                <h1>
                    Home
                </h1>
            </div>
        </div>
        <!-- #### CLOCK #### -->
        <div class="col-md-4 col-sm-4" style="height: inherit;">
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
