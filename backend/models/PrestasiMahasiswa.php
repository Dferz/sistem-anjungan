<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class PrestasiMahasiswa extends ActiveRecord
{

	public static function getDb()
	{
	    return \Yii::$app->db;
	}

    public static function tableName()
    {
        return 'prestasi_mahasiswa';
    }

}