<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\SlickAsset;

SlickAsset::register($this);

$this->title = 'Sistem Anjungan - maps';
?>

<div class="row">
	<div class="col-xs-9">
		<?= Html::img('@web/images/peta-informatika.png', ['class'=> 'img-rounded', 'style' => 'width:100%;height:calc(100vh - 101px);']);?>
	</div>
	<div class="col-xs-3">
        <div id="risetGroup">
            <div id='rg_is' style="margin: 30px 0;">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3 class="text-center">RG Information System (IS)</h3>
                    </li>
                    <li class="list-group-item">
                        <p>Haryono Setiadi, ST, M.Eng</p>
                    </li>
                    <li class="list-group-item">
                        <p>Rini Anggrainingsih, ST, MT</p>
                    </li>
                    <li class="list-group-item">
                        <p>Dewi Wisnu Wardani, S.Si , MS</p>
                    </li>
                </ul>
            </div>
            <div id='rg_cs' style="margin: 30px 0;">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3 class="text-center">RG Computer Science (CS)</h3>
                    </li>
                    <li class="list-group-item">
                        <p>Drs. YS. Palgunadi, M.Sc</p>
                    </li>
                    <li class="list-group-item">
                        <p>Esti Suryani, SSi, M.Kom</p>
                    </li>
                </ul>
            </div>
            <div id='rg_ids' style="margin: 30px 0;">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3 class="text-center">RG Information and Data Security (IDS)</h3>
                    </li>
                    <li class="list-group-item">
                        <p>Drs. Bambang H, M.App.Sc, PhD</p>
                    </li>
                </ul>
            </div>
        </div>
        
	</div>
</div>


<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="maps"]' ).attr('selected','');
JS;
$this->registerJS($js);

#### AutoPlay / Auto Changing Page ####
if(strtolower(Yii::$app->request->get('autoplay')) == 'true'){
    $js = <<< JS
    console.log('autoplay: success');
    $(window).load(function () {
        window.setTimeout(function () {
        	
            window.location.href = "$url";
        }, $timer)
    });
JS;
    $this->registerJS($js);    
}

#### Slide Riset Group ####
$js = <<< JS
$('#risetGroup').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
});
JS;
$this->registerJS($js);

?>