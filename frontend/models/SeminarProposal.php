<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class SeminarProposal extends ActiveRecord
{

	public static function getDb()
	{
	    return \Yii::$app->db2;
	}

    public static function tableName()
    {
        return 'VIEW_SEMINAR_PROPOSAL_TA';
    }
}