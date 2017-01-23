<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class HomeController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAgenda()
    {
        return $this->render('index');
    }

    public function actionKehadiranDosen()
    {
        return $this->render('kehadiran-dosen');
    }

    public function actionPrestasiMahasiswa()
    {
        return $this->render('prestasi-mahasiswa');
    }

    public function actionJadwal()
    {
        return $this->render('jadwal');
    }

    public function actionProfilDosen()
    {
        return $this->render('index');
    }

    public function actionPenelitianDosen()
    {
        return $this->render('index');
    }

   
}
