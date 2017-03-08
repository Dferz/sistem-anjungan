<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class ArsipPenelitian extends ActiveRecord
{
	public $jumlah;

	public static function getDb()
	{
	    return \Yii::$app->db2;
	}

    public static function tableName()
    {
        return 'VIEW_ARSIP_PENELITIAN_DOSEN';
    }
}