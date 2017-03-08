<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;
use edofre\sliderpro\models\Slide;
use edofre\sliderpro\models\slides\Caption;
use edofre\sliderpro\models\slides\Image;
use edofre\sliderpro\models\slides\Layer;

rmrevin\yii\fontawesome\AssetBundle::register($this);
$this->title = 'Sistem Anjungan - Home';
?>

<?php
#### add slider ####
$slides = [

    new Slide([
        'items' => [
            new Image(['src' => 'images/slide-1.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "Left", 
                    'data-horizontal' => "10%",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => 'consectetur adipisicing elit', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-width' => "200",
                    'data-position' => "left", 
                    'data-horizontal' => "15%", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => 'images/slide-2.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "center", 
                    'data-horizontal' => "0",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => 'consectetur adipisicing elit', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-width' => "200",
                    'data-position' => "center", 
                    'data-horizontal' => "0", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => 'images/slide-3.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "right", 
                    'data-horizontal' => "10%",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => 'consectetur adipisicing elit', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-width' => "200",
                    'data-position' => "right", 
                    'data-horizontal' => "15%", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

];
?>


<?= 
  #### Slider Setting ####
  \edofre\sliderpro\SliderPro::widget([
    'id'            => 'slider-home',
    'slides'        => $slides,
    'sliderOptions' => [
        'width'  => 'inherit',
        'height' => 'calc(100vh - 101px)',
        'arrows' => true,
        'autoplayDelay' => 3500,

        'init'   => new \yii\web\JsExpression("
            function() {
                console.log('slider is initialized');
            }
        "),
    ],
  ]);
?>

<?php 
#### Change menu title ####
$js = <<< JS
$( '#cd-dropdown option[data-title-id="home"]' ).attr('selected','');
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
JS;
    $this->registerJS($js);    
}

?>