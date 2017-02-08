<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Penelitian extends ActiveRecord
{
	public $jumlah;

	public static function getDb()
	{
	    return \Yii::$app->db2;
	}

    public static function tableName()
    {
        return 'penelitiandosen';
    }
}