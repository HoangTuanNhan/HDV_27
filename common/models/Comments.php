<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $foody_id
 * @property string $content
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $delete_at
 *
 * @property Foods $foody
 * @property Users $user
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'foody_id', 'content'], 'required'],
            [['user_id', 'foody_id', 'create_at', 'update_at', 'delete_at'], 'integer'],
            [['content'], 'string'],
            [['foody_id'], 'exist', 'skipOnError' => true, 'targetClass' => Foods::className(), 'targetAttribute' => ['foody_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'foody_id' => 'Foody ID',
            'content' => 'Content',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'delete_at' => 'Delete At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoody()
    {
        return $this->hasOne(Foods::className(), ['id' => 'foody_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
