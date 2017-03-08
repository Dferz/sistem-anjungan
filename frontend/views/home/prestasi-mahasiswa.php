<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Prestasi Mahasiswa';
?>

<div class="container">
	<div class="wrap-content" style="color:#E6E9ED;">
		<div class="row">
			<div class="col-md-12">
				<div class="timeline">
					<dl>
            			<dt>Apr 2014</dt>
	            		<dd class="pos-right clearfix">
		              		<div class="circ"></div>
		              		<div class="time">Apr 14</div>
		              		<div class="events">
		                		<div class="pull-left">
		                  			<?php echo Html::img('@web/images/slider1.jpg', ['alt'=>'logo', 'class' => 'logo events-object img-rounded', 'style' => 'width:100%; width:64px; height:64px;']); ?>
		                		</div>
		                		<div class="events-body">
		                  			<h4 class="events-heading">Datamining Gemastik 9</h4>
		                  			<ol>
		                  				<li>Donny</li>
		                  				<li>Donna</li>
		                  				<li>Donne</li>
		                  			</ol>
		                  			<p>Mahasiswa A, B, C telah memenangkan lomba data mining dengan meraih juara 1 pada acara gemastik yang diselenggarakan oleh UI</p>
		                		</div>
		              		</div>

            			</dd>
            			<dd class="pos-left clearfix">
              				<div class="circ"></div>
              				<div class="time">Apr 10</div>
              				<div class="events">
				                <div class="pull-left">
				                  <?php echo Html::img('@web/images/slider1.jpg', ['alt'=>'logo', 'class' => 'logo events-object img-rounded', 'style' => 'width:100%; width:64px; height:64px;']); ?>
				                </div>
				                <div class="events-body">
		                  			<h4 class="events-heading">Datamining Gemastik 9</h4>
		                  			<ol>
		                  				<li>Donny</li>
		                  				<li>Donna</li>
		                  				<li>Donne</li>
		                  			</ol>
		                  			<p>Mahasiswa A, B, C telah memenangkan lomba data mining dengan meraih juara 1 pada acara gemastik yang diselenggarakan oleh UI</p>
		                		</div>
              				</div>
            			</dd>
            			<dt>Mar 2014</dt>
            			<dd class="pos-right clearfix">
              				<div class="circ"></div>
              				<div class="time">Mar 15</div>
              				<div class="events">
				                <div class="pull-left">
				                  <?php echo Html::img('@web/images/slider1.jpg', ['alt'=>'logo', 'class' => 'logo events-object img-rounded', 'style' => 'width:100%; width:64px; height:64px;']); ?>
				                </div>
				                <div class="events-body">
		                  			<h4 class="events-heading">Datamining Gemastik 9</h4>
		                  			<ol>
		                  				<li>Donny</li>
		                  				<li>Donna</li>
		                  				<li>Donne</li>
		                  			</ol>
		                  			<p>Mahasiswa A, B, C telah memenangkan lomba data mining dengan meraih juara 1 pada acara gemastik yang diselenggarakan oleh UI</p>
		                		</div>
              				</div>
            			</dd>
            			<dd class="pos-left clearfix">
              				<div class="circ"></div>
              				<div class="time">Mar 8</div>
              				<div class="events">
				                <div class="pull-left">
				                  <?php echo Html::img('@web/images/slider1.jpg', ['alt'=>'logo', 'class' => 'logo events-object img-rounded', 'style' => 'width:100%; width:64px; height:64px;']); ?>
				                </div>
				                <div class="events-body">
		                  			<h4 class="events-heading">Datamining Gemastik 9</h4>
		                  			<ol>
		                  				<li>Donny</li>
		                  				<li>Donna</li>
		                  				<li>Donne</li>
		                  			</ol>
		                  			<p>Mahasiswa A, B, C telah memenangkan lomba data mining dengan meraih juara 1 pada acara gemastik yang diselenggarakan oleh UI</p>
		                		</div>
              				</div>
            			</dd>

          			</dl>
        		</div>
      		</div>
    	</div>
    </div>
	
</div>

<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="prestasi mahasiswa"]' ).attr('selected','');
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
