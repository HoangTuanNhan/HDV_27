<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "password_resets".
 *
 * @property string $email
 * @property string $token
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $deelte_at
 *
 * @property Users[] $users
 */
class PasswordResets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'password_resets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'token'], 'required'],
            [['create_at', 'update_at', 'deelte_at'], 'integer'],
            [['email', 'token'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'token' => 'Token',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'deelte_at' => 'Deelte At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['email' => 'email']);
    }
}
