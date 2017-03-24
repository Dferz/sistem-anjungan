<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class ProfilDosen extends ActiveRecord
{

	public static function getDb()
	{
	    return \Yii::$app->db;
	}

    public static function tableName()
    {
        return 'profil_dosen';
    }
}