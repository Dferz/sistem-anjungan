<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class TaUnggulan extends ActiveRecord
{

	public static function getDb()
	{
	    return \Yii::$app->db;
	}

    public static function tableName()
    {
        return 'ta_unggulan';
    }
}