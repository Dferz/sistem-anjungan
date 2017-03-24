<?php
namespace backend\models;

use Yii;
use yii\base\Model;

class TaUnggulanForm extends Model
{
    public $nama;
    public $nim;
    public $anggota;
    public $judul;
    public $keyword;
    public $deskripsi;
    public $tanggal;

    public function rules()
    {
        return [
            [['nama'], 'required'],
        ];
    }

}
