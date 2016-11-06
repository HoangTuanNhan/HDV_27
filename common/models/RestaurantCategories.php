<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "restaurant_categories".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Restaurants $id0
 */
class RestaurantCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'restaurant_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 200],
            [['id'], 'exist', 'skipOnError' => true, 'targetAttribute' => ['id' => 'restaurant_category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Restaurants::className(), ['restaurant_category_id' => 'id']);
    }
}
