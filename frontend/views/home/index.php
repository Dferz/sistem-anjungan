<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Home';
?>
<div class="jumbotron">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
	    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	      	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	      	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	      	<div class="item active"><?php echo Html::img('@web/images/slider1.jpg', ['alt'=>'logo', 'class' => 'logo', 'style' => 'width:100%;']); ?></div>
	      	<div class="item"><?php echo Html::img('@web/images/slider2.jpg', ['alt'=>'logo', 'class' => 'logo', 'style' => 'width:100%;']); ?></div>
	      	<div class="item"><?php echo Html::img('@web/images/slider3.jpg', ['alt'=>'logo', 'class' => 'logo', 'style' => 'width:100%;']); ?></div>
	    </div>
	    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	      	<span class="glyphicon glyphicon-chevron-left"></span>
	    </a>
	    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	      	<span class="glyphicon glyphicon-chevron-right"></span>
	    </a>
	</div>
</div>

