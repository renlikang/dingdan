<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xy_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 64],
            [['password'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
        ];
    }

    public function validatePassword()
    {

    }

    public function findByUsername()
    {
        return !self::find()
                    ->where('username=:username',[':username'=>$this->username])
                    ->exists();

    }
}
