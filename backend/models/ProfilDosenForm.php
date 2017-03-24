<?php
namespace backend\models;

use Yii;
use yii\base\Model;

class ProfilDosenForm extends Model
{
    public $id;
    public $nama_dosen;
    public $bidang;
    public $pend_terakhir;
    public $email;
    public $jabatan;
    public $foto;

    public function rules()
    {
        return [
            [['nama_dosen'], 'required'],
            // ['foto', 'image', 'extensions' => 'png, jpg',
            //     'minWidth' => 100, 'maxWidth' => 1000,
            //     'minHeight' => 100, 'maxHeight' => 1000,
            // ],

        ];
    }

}
