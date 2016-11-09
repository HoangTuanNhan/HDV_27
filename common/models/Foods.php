<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "foods".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property string $detail
 * @property string $image

 * @property integer $food_category_id
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $delete_at
 *
 * @property Comments[] $comments
 * @property FoodCategories $foodCategories
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $file_image;
    public static function tableName()
    {
        return 'foods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'detail', 'image', 'food_category_id'], 'required'],
            [['price', 'food_category_id', 'create_at', 'update_at', 'delete_at'], 'integer'],
            [['detail'], 'string'],
            [['name', 'image'], 'string', 'max' => 200],
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
            'price' => 'Price',
            'detail' => 'Detail',
            'image' => 'Image', 
            'food_category_id' => 'Food Category ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'delete_at' => 'Delete At',
        ];
    }
     public static function listFood(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoodCategories()
    {
        return $this->hasOne(FoodCategories::className(), ['id' => 'food_category_id']);
    }
}
