<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\base\NotSupportedException;
use yii\helpers\Security;
use yii\web\IdentityInterface;


class Users extends ActiveRecord
{

	public static function getDb()
	{
	    return \Yii::$app->db;
	}

    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 100]           
        ];
    }

    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'username' => 'Username',
            'password' => 'Password'
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }


}