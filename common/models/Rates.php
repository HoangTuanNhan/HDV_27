<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rates".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $restaurant_id
 * @property integer $point
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $delete_at
 *
 * @property Users $user
 * @property Restaurants $restaurant
 */
class Rates extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'rates';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'restaurant_id', 'point', 'create_at', 'update_at'], 'required'],
            [['user_id', 'restaurant_id', 'point', 'create_at', 'update_at', 'delete_at'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['restaurant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurants::className(), 'targetAttribute' => ['restaurant_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'restaurant_id' => 'Restaurant ID',
            'point' => 'Point',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'delete_at' => 'Delete At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    public static function listUser() {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurant() {
        return $this->hasOne(Restaurants::className(), ['id' => 'restaurant_id']);
    }

}
