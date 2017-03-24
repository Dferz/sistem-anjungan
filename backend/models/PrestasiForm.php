<?php
namespace backend\models;

use Yii;
use yii\base\Model;

class PrestasiForm extends Model
{
    public $id;
    public $judul;
    public $anggota;
    public $deskripsi;
    public $foto;
    public $tanggal;

    public function rules()
    {
        return [
            [['judul', 'anggota', 'deskripsi', 'foto',], 'default'],
            ['judul', 'string', 'max' => 255],
            [['judul', 'tanggal'], 'required'],
            // ['foto', 'image', 'extensions' => 'png, jpg',
            //     'minWidth' => 100, 'maxWidth' => 1000,
            //     'minHeight' => 100, 'maxHeight' => 1000,
            // ],

        ];
    }

}
