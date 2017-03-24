<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use backend\models\PrestasiForm;
use backend\models\ProfilDosenForm;
use backend\models\TaUnggulanForm;
use backend\models\RegisterForm;
use common\models\LoginForm;
use backend\models\PrestasiMahasiswa;
use backend\models\ProfilDosen;
use backend\models\TaUnggulan;

class DashboardController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'all-user','add-user'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                                        'index',
                                        'prestasi',
                                        'profil-dosen',
                                        'ta-unggulan',
                                        'all-user',
                                        'add-user',
                                        'prestasi-insert',
                                        'prestasi-view',
                                        'prestasi-update',
                                        'prestasi-delete',
                                        'prestasi-delete-multiple',
                                        'profil-dosen-insert',
                                        'profil-dosen-view',
                                        'profil-dosen-update',
                                        'profil-dosen-delete',
                                        'profil-dosen-delete-multiple',
                                        'ta-unggulan-insert',
                                        'ta-unggulan-view',
                                        'ta-unggulan-update',
                                        'ta-unggulan-delete',
                                        'ta-unggulan-delete-multiple',
                                        'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'prestasi-insert' => ['post'],
                    'prestasi-delete' => ['post'],
                    'prestasi-delete-multiple' => ['post'],
                    'profil-dosen-insert' => ['post'],
                    'profil-dosen-delete' => ['post'],
                    'profil-dosen-delete-multiple' => ['post'],
                    'ta-unggulan-insert' => ['post'],
                    'ta-unggulan-delete' => ['post'],
                    'ta-unggulan-delete-multiple' => ['post'],
                ],
            ],
        ];
    }

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
        $query = PrestasiMahasiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        $query = ProfilDosen::find();

        $dataProvider1 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        $query = TaUnggulan::find();

        $dataProvider2 = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        return $this->render('index',  ['dataProvider' => $dataProvider,
                                        'dataProvider1' => $dataProvider1,
                                        'dataProvider2' => $dataProvider2,
                                        ]);
    }

    public function actionPrestasi()
    {
        $model = new PrestasiForm();

        $query = PrestasiMahasiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        return $this->render('prestasi-page', ['dataProvider' => $dataProvider, 'model' => $model]);
    }

    public function actionProfilDosen()
    {

        $model = new ProfilDosenForm();
        $query = ProfilDosen::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        return $this->render('profil-page', ['dataProvider' => $dataProvider, 'model' => $model]);
    }

    public function actionTaUnggulan()
    {
        $model = new TaUnggulanForm();
        $query = TaUnggulan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8
            ],
        ]);

        return $this->render('ta-unggulan', ['dataProvider' => $dataProvider, 'model' => $model]);
    }

    #### MENU CRUD ####

    public function actionPrestasiInsert()
    {
        $model = new PrestasiForm;

        if (Yii::$app->request->isAjax) {

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                
                $prestasi = new PrestasiMahasiswa();
                $data = Yii::$app->request->post();

                $prestasi->judul = $data['PrestasiForm']['judul'];
                // $prestasi->anggota = $data['anggota'];
                $prestasi->deskripsi = $data['PrestasiForm']['deskripsi'];
                // $prestasi->foto = $data['PrestasiForm']['foto'];
                $prestasi->tanggal = $data['PrestasiForm']['tanggal'];
                 
                $prestasi->save();

                return 'Success';
                                
            }

            return 'Failed';
            
        }

        return;
    }

    public function actionPrestasiView($id)
    {
        $model = new PrestasiForm;
        $data = PrestasiMahasiswa::findOne(['id'=>$id]);

        return $this->render('prestasi-view', ['model'=>$model, 'data'=>$data]);
       
    }

    public function actionPrestasiUpdate($id)
    {
        $model = new PrestasiForm;
        $prestasi = PrestasiMahasiswa::findOne(['id'=>$id]);


        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $data = Yii::$app->request->post();

            $prestasi->judul = $data['PrestasiForm']['judul'];
            // // $prestasi->anggota = $data['anggota'];
            $prestasi->deskripsi = $data['PrestasiForm']['deskripsi'];
            // $prestasi->foto = $data['PrestasiForm']['foto'];
            $prestasi->tanggal = $data['PrestasiForm']['tanggal'];
             
            $prestasi->save();


        }

        return $this->render('prestasi-update', ['model'=>$model, 'data'=>$prestasi]);

    }

    public function actionPrestasiDelete($id)
    {

        if (Yii::$app->request->isAjax) {

            if(!$id){
                return;
            }

            $prestasi = PrestasiMahasiswa::findOne(['id' => $id]);
            return $prestasi->delete();
        }

        return;
  
    }

    public function actionPrestasiDeleteMultiple()
    {
        if (Yii::$app->request->isAjax) {
            $pk = Yii::$app->request->post('pk');

            if (!$pk) {
                return;
            }

            return PrestasiMahasiswa::deleteAll(['id' => $pk]);
        }
    }

    public function actionProfilDosenInsert()
    {
        $model = new ProfilDosenForm;

        if (Yii::$app->request->isAjax) {

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                
                $profil = new ProfilDosen();
                $data = Yii::$app->request->post();

                $profil->nama_dosen = $data['ProfilDosenForm']['nama_dosen'];
                // $profil->bidang = $data['ProfilDosenForm']['bidang'];
                // $profil->pend_terakhir = $data['ProfilDosenForm']['pend_terakhir'];
                // $profil->email = $data['ProfilDosenForm']['email'];
                // $profil->jabatan = $data['ProfilDosenForm']['jabatan'];
                // $profil->foto = $data['ProfilDosenForm']['foto'];

                $profil->save();

                return 'Success';
                                
            }

            return 'Failed';
            
        }

        return;
    }

    public function actionProfilDosenView($id)
    {
        $model = new ProfilDosenForm;
        $data = ProfilDosen::findOne(['id'=>$id]);

        return $this->render('profil-view', ['model'=>$model, 'data'=>$data]);
       
    }

    public function actionProfilDosenUpdate($id)
    {
        $model = new ProfilDosenForm;
        $profil = ProfilDosen::findOne(['id'=>$id]);


        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $data = Yii::$app->request->post();

            $profil->nama_dosen = $data['ProfilDosenForm']['nama_dosen'];
            $profil->bidang = $data['ProfilDosenForm']['bidang'];
            $profil->pend_terakhir = $data['ProfilDosenForm']['pend_terakhir'];
            $profil->email = $data['ProfilDosenForm']['email'];
            $profil->jabatan = $data['ProfilDosenForm']['jabatan'];
            $profil->foto = $data['ProfilDosenForm']['foto'];

            $profil->save();


        }

        return $this->render('profil-update', ['model'=>$model, 'data'=>$profil]);

    }

    public function actionProfilDosenDelete($id)
    {

        if (Yii::$app->request->isAjax) {

            if(!$id){
                return;
            }

            $profil = ProfilDosen::findOne(['id' => $id]);
            return $profil->delete();
        }

        return;
  
    }

    public function actionProfilDosenDeleteMultiple()
    {
        if (Yii::$app->request->isAjax) {
            $pk = Yii::$app->request->post('pk');

            if (!$pk) {
                return;
            }

            return ProfilDosen::deleteAll(['id' => $pk]);
        }
    }

    public function actionTaUnggulanInsert()
    {
        $model = new TaUnggulanForm;

        if (Yii::$app->request->isAjax) {

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                
                $ta = new TaUnggulan();
                $data = Yii::$app->request->post();

                $ta->nama = $data['TaUnggulanForm']['nama'];
                // $ta->nim = $data['TaUnggulanForm']['nim'];
                // $ta->judul = $data['TaUnggulanForm']['judul'];
                // $ta->deskripsi = $data['TaUnggulanForm']['deskripsi'];
                // $ta->tanggal = $data['TaUnggulanForm']['tanggal'];

                $ta->save();

                return 'Success';
                                
            }

            return 'Failed';
            
        }

        return;
    }

    public function actionTaUnggulanView($id)
    {
        $model = new TaUnggulanForm;
        $data = TaUnggulan::findOne(['id'=>$id]);

        return $this->render('ta-unggulan-view', ['model'=>$model, 'data'=>$data]);
       
    }

    public function actionTaUnggulanUpdate($id)
    {
        $model = new TaUnggulanForm;
        $ta = TaUnggulan::findOne(['id'=>$id]);


        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $data = Yii::$app->request->post();

            $ta->nama = $data['TaUnggulanForm']['nama'];
            $ta->nim = $data['TaUnggulanForm']['nim'];
            $ta->judul = $data['TaUnggulanForm']['judul'];
            $ta->deskripsi = $data['TaUnggulanForm']['deskripsi'];
            $ta->tanggal = $data['TaUnggulanForm']['tanggal'];

            $ta->save();


        }

        return $this->render('ta-unggulan-update', ['model'=>$model, 'data'=>$ta]);

    }

    public function actionTaUnggulanDelete($id)
    {

        if (Yii::$app->request->isAjax) {

            if(!$id){
                return;
            }

            $profil = TaUnggulan::findOne(['id' => $id]);
            return $profil->delete();
        }

        return;
  
    }

    public function actionTaUnggulanDeleteMultiple()
    {
        if (Yii::$app->request->isAjax) {
            $pk = Yii::$app->request->post('pk');

            if (!$pk) {
                return;
            }

            return TaUnggulan::deleteAll(['id' => $pk]);
        }
    }

    

    #### MENU TAMBAHAN ####

    public function actionAllUser()
    {
        // return $this->render('all-user-page');
        return $this->goHome();
    }

    public function actionAddUser()
    {
        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('add-user-page', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login-page', [
                'model' => $model,
            ]);
        }
        // return $this->render('login-page');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
