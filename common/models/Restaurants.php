<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "restaurants".
 *
 * @property integer $id
 * @property string $name
 * @property string $detail
 * @property string $image
 * @property integer $restaurant_category_id
 * @property integer $address_id
 * @property string $time_open
 * @property string $time_close
 * @property integer $price_min
 * @property integer $price_max
 * @property integer $point
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $delete_at
 *
 * @property Rates[] $rates
 * @property RestaurantCategories $restaurantCategories
 * @property Addresses $address
 */
class Restaurants extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
     public $file_image;
    public static function tableName() {
        return 'restaurants';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'detail','restaurant_category_id', 'address_id', 'time_open', 'time_close', 'price_min', 'price_max', 'point'], 'required'],
            [['detail'], 'string'],
            [['restaurant_category_id', 'address_id', 'price_min', 'price_max', 'point', 'create_at', 'update_at', 'delete_at'], 'integer'],
            [['time_open', 'time_close'], 'safe'],
            [['name', 'image'], 'string', 'max' => 200],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => Addresses::className(), 'targetAttribute' => ['address_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'detail' => 'Detail',
            'image' => 'Image',
            'restaurant_category_id' => 'Restaurant Category ID',
            'address_id' => 'Address ID',
            'time_open' => 'Time Open',
            'time_close' => 'Time Close',
            'price_min' => 'Price Min',
            'price_max' => 'Price Max',
            'point' => 'Point',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'delete_at' => 'Delete At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRates() {
        return $this->hasMany(Rates::className(), ['restaurant_id' => 'id']);
    }

    public static function listRestaurant() {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurantCategories() {
        return $this->hasOne(RestaurantCategories::className(), ['id' => 'restaurant_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress() {
        return $this->hasOne(Addresses::className(), ['id' => 'address_id']);
    }

}
