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
            new Image(['src' => '@web/images/slider-1.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'KULIAH TAMU OLEH : VIDYASAGAR POTDAR, CURTIN UNIVERSITY, AUSTRALIA', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-horizontal' => "40",
                    'data-vertical' => "32%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    'data-width' => '30%',

                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '“Cyber Physical System and Internet of Things with Application to SMART GRID”', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-horizontal' => "40", 
                    'data-vertical' => "50%", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-hide-delay' => "200",
                    'data-width' => '30%',
                    
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '@web/images/slider-2.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'SEMINAR SOFT COMPUTING 2016', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "center",
                    'data-horizontal' => "0",
                    'data-vertical' => "-18%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '"MACHINE LEARNING & ROBOTICS” Oleh Prof Pitoyo Hartono | Dept. of Electrical and Electric Engineering, School of Engineering, Chukyo University."', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-position' => "center", 
                    'data-horizontal' => "0", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-hide-delay' => "200",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '@web/images/slider-3.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'KUNJUNGAN & KULIAH TAMU OLEH DR. RUUD PELLIKAAN', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding text-right', 
                    'data-horizontal' => "60%",
                    'data-vertical' => "36%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    'data-width' => '30%',
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '“CODING THEORY, CRYPTOGRAPHY AND SECURITY”', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding text-right', 
                    'data-horizontal' => "60%", 
                    'data-vertical' => "50%", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-width' => '30%',
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '@web/images/slider-4.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'SEMINAR BIG DATA 2015', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-horizontal' => "40",
                    'data-vertical' => "38%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    'data-width' => '30%',

                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '“BIG DATA BOOST BUSINESS PRODUCTIVITY” Pembicara : Ir. Beno Kunto Pradekso M.Sc | Chief Executive Officer SOLUSI247"', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-horizontal' => "40", 
                    'data-vertical' => "46%", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-hide-delay' => "200",
                    'data-width' => '30%',
                    
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '@web/images/slider-5.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'SEMINAR & WORKSHOP SOFT COMPUTING 2014', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "center",
                    'data-horizontal' => "0",
                    'data-vertical' => "-18%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '“Program Studi Informatika UNS Bersama dengan ASEAN SOCIETY OF SOFT-COMPUTING.”', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-position' => "center", 
                    'data-horizontal' => "0", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-hide-delay' => "200",
                    
                ]
            ]),
        ],
    ]),

    new Slide([
        'items' => [
            new Image(['src' => '@web/images/slider-6.png']),
            new Layer([
                'tag' => 'h2', 
                'content' => 'KULIAH TAMU', 
                'htmlOptions' => [
                    'class' => 'sp-black sp-padding', 
                    'data-position' => "center",
                    'data-horizontal' => "0",
                    'data-vertical' => "-18%", 
                    'data-show-transition' => "left",  
                    'data-show-delay' => "700",
                    'data-hide-transition' => "right",
                    
                ]
            ]),
            new Layer([
                'tag' => 'p', 
                'content' => '“Technopreneurship Bidang IT” Oleh Prof. Dr. Richardus Eko Indrajit M.Sc., M.B.A”', 
                'htmlOptions' => [
                    'class' => 'sp-white sp-padding', 
                    'data-position' => "center", 
                    'data-horizontal' => "0", 
                    'data-vertical' => "0", 
                    'data-show-transition' => "right",
                    'data-show-delay' => "1000",
                    'data-hide-transition' => "left",
                    'data-hide-delay' => "200",
                    
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
        'autoSlideSize'=>true,
        'waitForLayers' => true,
        'forceSize'=>'fullWindow',


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