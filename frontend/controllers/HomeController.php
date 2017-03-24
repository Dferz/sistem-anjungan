<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use frontend\models\Jadwal;
use frontend\models\Penelitian;
use frontend\models\ArsipJurnal;
use frontend\models\ArsipPenelitian;
use frontend\models\ArsipPengabdian;
use frontend\models\SeminarKMM;
use frontend\models\SeminarProposal;
use frontend\models\SeminarHasil;
use frontend\models\SidangTA;


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

    public function actionIndex($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Home ';
        if($autoplay=='true') {
            $url = Url::to(['agenda']).'?autoplay=true&timer='.$timer;
            return $this->render('index', array('title' => $title, 'url' => $url, 'timer' => $timer));
        }

        return $this->render('index',  array('title' => $title));
    }

    public function actionAgenda($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Agenda ';
        if($autoplay=='true') {
            $url = Url::to(['prestasi-mahasiswa']).'?autoplay=true&timer='.$timer;
            return $this->render('agenda', array('title' => $title, 'url' => $url, 'timer' => $timer));
        }

        return $this->render('agenda', array('title' => $title));
    }

    // public function actionKehadiranDosen($autoplay=null,$timer=20000)
    // {
    //     $title = 'Sistem Anjungan - Kehadiran Dosen ';
    //     if($autoplay=='true') {
    //         $url = Url::to(['prestasi-mahasiswa']).'?autoplay=true&timer='.$timer;
    //         return $this->render('kehadiran-dosen', array('title' => $title, 'url' => $url, 'timer' => $timer));
            
    //     }

    //     return $this->render('kehadiran-dosen',  array('title' => $title));
    // }

    public function actionPrestasiMahasiswa($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Prestasi Mahasiswa ';
        if($autoplay=='true') {
            $url = Url::to(['jadwal']).'?autoplay=true&timer='.$timer;
            return $this->render('prestasi-mahasiswa', array('title' => $title, 'url' => $url, 'timer' => $timer));
            
        }
        return $this->render('prestasi-mahasiswa',  array('title' => $title));
    }

    public function actionJadwal($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Jadwal Seminar ';

        $query = SeminarProposal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        $query = SeminarHasil::find();

        $dataProvider1 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        $query = SidangTA::find();

        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        $query = SeminarKMM::find();

        $dataProvider3 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);

        if($autoplay=='true') {
            $url = Url::to(['maps']).'?autoplay=true&timer='.$timer;
            return $this->render('jadwal',  ['title' => $title,
                                            'dataProvider' => $dataProvider,
                                            'dataProvider1' => $dataProvider1,
                                            'dataProvider2' => $dataProvider2,
                                            'dataProvider3' => $dataProvider3,
                                            'url' => $url, 
                                            'timer' => $timer
                                        ]);
            
        }

        return $this->render('jadwal',  ['title' => $title,
                                            'dataProvider' => $dataProvider,
                                            'dataProvider1' => $dataProvider1,
                                            'dataProvider2' => $dataProvider2,
                                            'dataProvider3' => $dataProvider3,
                                        ]);
    }

    public function actionMaps($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Maps ';
        if($autoplay=='true') {
            $url = Url::to(['profil-dosen']).'?autoplay=true&timer='.$timer;
            return $this->render('maps', array('title' => $title, 'url' => $url, 'timer' => $timer));
            
        }
        return $this->render('maps', array('title' => $title));
    }

    public function actionProfilDosen($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Profil Dosen ';
        if($autoplay=='true') {
            $url = Url::to(['p2m-dosen']).'?autoplay=true&timer='.$timer;
            return $this->render('profil-dosen', array('title' => $title, 'url' => $url, 'timer' => $timer));
            
        }
        return $this->render('profil-dosen', array('title' => $title));
    }

    public function actionP2mDosen($autoplay=null,$timer=20000)
    {
        $title = 'Sistem Anjungan - Penelitian, Pengabdian Dosen ';

        $query = ArsipJurnal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);

        $query = ArsipPengabdian::find();

        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);
        
        $query = ArsipPenelitian::find();

        $dataProvider3 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);

        $query = ArsipJurnal::find()
                    ->select('NAMA, count(*) jumlah')
                    ->groupby('NIP');
                    

        $dataProvider01 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        $query = ArsipPengabdian::find()
                    ->select('NAMA, count(*) jumlah')
                    ->groupby('NIP');
                    

        $dataProvider02 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        $query = ArsipPenelitian::find()
                    ->select('NAMA, count(*) jumlah')
                    ->groupby('NIP');
                    

        $dataProvider03 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        if($autoplay=='true') {
            $url = Url::to(['/']).'?autoplay=true&timer='.$timer;
            return $this->render('p2m-dosen', array('title' => $title, 
                                                    'dataProvider' => $dataProvider,
                                                    'dataProvider2' => $dataProvider2,
                                                    'dataProvider3' => $dataProvider3,
                                                    'dataProvider01' => $dataProvider01,
                                                    'dataProvider02' => $dataProvider02,
                                                    'dataProvider03' => $dataProvider03,
                                                    'url' => $url, 'timer' => $timer ));
            
        }

        return $this->render('p2m-dosen', array('title' => $title, 
                                                    'dataProvider' => $dataProvider,
                                                    'dataProvider2' => $dataProvider2,
                                                    'dataProvider3' => $dataProvider3,
                                                    'dataProvider01' => $dataProvider01,
                                                    'dataProvider02' => $dataProvider02,
                                                    'dataProvider03' => $dataProvider03 ));
    }

    public function actionAutoPlay()
    {

        $query = Jadwal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'tanggal' => SORT_DESC,
                ]
            ],
        ]);
        
        return $this->render('fullpage', ['dataProvider' => $dataProvider]);
    }

}
