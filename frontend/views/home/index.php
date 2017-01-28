<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\SliderAsset;
use rmrevin\yii\fontawesome\FA;

SliderAsset::register($this);
rmrevin\yii\fontawesome\AssetBundle::register($this);
$this->title = 'Sistem Anjungan - Home';
?>

 <!-- Responsive slider - START -->
    <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
    <div class="slides" data-group="slides">
        <ul>
            <li>
          <div class="slide-body" data-group="slide">
            <?php echo Html::img('@web/images/slide-1.jpg'); ?>
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
              <h2>Responsive slider</h2>
              <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">With one to one swipe movement!</div>
            </div>
            
          </div>
            </li>
            <li>
          <div class="slide-body" data-group="slide">
            <?php echo Html::img('@web/images/slide-2.jpg'); ?>
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
              <h2>Twitter Boostrap</h2>
              <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">Compatible!</div>
            </div>
            
          </div>
            </li>
            <li>
          <div class="slide-body" data-group="slide">
            <?php echo Html::img('@web/images/slide-3.jpg'); ?>
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
              <h2>Custom animations</h2>
              <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">For any caption you use!</div>
            </div>
           
          </div>
            </li>
        </ul>
    </div>
    <a class="slider-control left" href="#" data-jump="prev"><?php echo FA::icon('arrow-left');?></a>
    <a class="slider-control right" href="#" data-jump="next"><?php echo FA::icon('arrow-right');?></a>
    <div class="pages">
      <a class="page" href="#" data-jump-to="1">1</a>
      <a class="page" href="#" data-jump-to="2">2</a>
      <a class="page" href="#" data-jump-to="3">3</a>
    </div>
    </div>
  <!-- Responsive slider - END -->

