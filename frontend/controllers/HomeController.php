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
        $title = 'Sistem Anjungan - Home ';
        return $this->render('index',  array('title' => $title));
    }

    public function actionAgenda()
    {
        $title = 'Sistem Anjungan - Agenda ';
        return $this->render('index', array('title' => $title));
    }

    public function actionKehadiranDosen()
    {
        $title = 'Sistem Anjungan - Kehadiran Dosen ';
        return $this->render('kehadiran-dosen',  array('title' => $title));
    }

    public function actionPrestasiMahasiswa()
    {
        $title = 'Sistem Anjungan - Prestasi Mahasiswa ';
        return $this->render('prestasi-mahasiswa',  array('title' => $title));
    }

    public function actionJadwal()
    {
        $title = 'Sistem Anjungan - Jadwal Seminar ';
        return $this->render('jadwal',  array('title' => $title));
    }

    public function actionProfilDosen()
    {
        $title = 'Sistem Anjungan - Profil Dosen ';
        return $this->render('index', array('title' => $title));
    }

    public function actionPenelitianDosen()
    {
        $title = 'Sistem Anjungan - Penelitian Dosen ';
        
        return $this->render('penelitian-dosen', array('title' => $title));
    }

    public function actionAutoPlay()
    {
        $this->layout = 'tes';
        return $this->render('fullpage');
    }

   
}
