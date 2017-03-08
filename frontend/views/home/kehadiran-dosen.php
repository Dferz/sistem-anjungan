<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Kehadiran Dosen';
?>

	<div class="wrap-content">
		<div class="row presence">
			<dl style="overflow: auto;">
				<div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 30px;">
					<div style="max-width: 80px; margin:auto; margin-bottom: 30px;">
						<?php echo Html::img('@web/images/centang-hijau.png', ['alt'=>'ADA', 'class' => 'status_kehadiran', 'style' => 'width:100%;']); ?>	
					</div>
					<div class="presence-box clearfix">
						<ul dir="rtl">
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					
					<div class="presence-box clearfix">
						<ul>
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					<div class="presence-box clearfix">
						<ul dir="rtl">
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					
					<div class="presence-box clearfix">
						<ul>
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div style="max-width: 80px; margin:auto; margin-bottom: 30px;">
						<?php echo Html::img('@web/images/centang-merah.png', ['alt'=>'TIDAK-ADA', 'class' => 'status_kehadiran', 'style' => 'width:100%;']); ?>	
					</div>

					<div class="presence-box clearfix">
						<ul>
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					<div class="presence-box clearfix">
						<ul dir="rtl">
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					<div class="presence-box clearfix">
						<ul>
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
					<div class="presence-box clearfix">
						<ul dir="rtl">
							<li>Afizal Doewes S.Kom, M.SC</br><span>(08.27)</span></li>
						</ul>
					</div>
							
				</div>
			</dl>
		</div>
    </div>


<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="kehadiran dosen"]' ).attr('selected','');
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
?>