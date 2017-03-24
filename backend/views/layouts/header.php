<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">'. Html::img('@web/images/logo-mini.png') .'</span><span class="logo-lg">Anjungan-IF</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li>


                    <?= Html::a(
                                '<i class="fa fa-power-off" style="width:20px;"></i> <span>Logout('.Yii::$app->user->identity->username.')</span>',
                                ['/dashboard/logout'],
                                ['data-method' => 'post', ]
                            ) ?>
                </li>
                
            </ul>
        </div>
    </nav>
</header>
