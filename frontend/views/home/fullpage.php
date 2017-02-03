<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Sistem Anjungan - Home';

use mrlco\googlecharts\GoogleCharts;

?>


<?php

use edofre\sliderpro\models\Slide;
use edofre\sliderpro\models\slides\Caption;
use edofre\sliderpro\models\slides\Image;
use edofre\sliderpro\models\slides\Layer;

$slides = [

    new Slide([
        'items' => [
            new Image(['src' => '../images/slide-1.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "Left", 
                    'data-horizontal' => "10%",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "1500",
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
                    'data-show-delay' => "1800",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '../images/slide-2.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "center", 
                    'data-horizontal' => "10%",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "1500",
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
                    'data-horizontal' => "15%", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1800",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '../images/slide-3.jpg']),
            new Layer([
                'tag' => 'h3', 
                'content' => 'Lorem ipsum dolor sit amet', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "right", 
                    'data-horizontal' => "10%",
                    'data-vertical' => "-20%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "1500",
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
                    'data-show-delay' => "1800",
                    'data-hide-transition' => "left",
                    
                ]
            ]),
        ],
    ]),

];
?>

<?= \edofre\sliderpro\SliderPro::widget([
    'id'            => 'my-slider',
    'slides'        => $slides,
    'sliderOptions' => [
        'width'  => 960,
        'height' => 500,
        'arrows' => true,
        'autoplayDelay' => 5000,
        'init'   => new \yii\web\JsExpression("
            function() {
                console.log('slider is initialized');
            }
        "),
    ],
]);
?>